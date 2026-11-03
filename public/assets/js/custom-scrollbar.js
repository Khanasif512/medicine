(function () {
    "use strict";

    var root = document.documentElement,
        track = document.createElement("div"),
        thumb = document.createElement("div"),
        maxScroll = 0,
        thumbTravel = 0,
        thumbHeight = 0,
        targetScroll = window.scrollY,
        animationFrame = null,
        previousFrameTime = 0,
        dragStartY = 0,
        dragStartScroll = 0,
        dragging = false,
        dragSensitivity = 0.7,
        prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    track.className = "page-scrollbar";
    track.setAttribute("role", "scrollbar");
    track.setAttribute("aria-label", "Page scroll position");
    track.setAttribute("aria-orientation", "vertical");
    track.setAttribute("aria-controls", "main");
    track.setAttribute("aria-valuemin", "0");
    track.tabIndex = 0;

    thumb.className = "page-scrollbar__thumb";
    thumb.setAttribute("aria-hidden", "true");
    track.appendChild(thumb);
    document.body.appendChild(track);
    root.classList.add("custom-scrollbar-enabled");

    function getDocumentHeight() {
        return Math.max(document.body.scrollHeight, root.scrollHeight);
    }

    function updateScrollbar() {
        var viewportHeight = window.innerHeight,
            trackHeight = track.clientHeight,
            scrollHeight = getDocumentHeight(),
            scrollRange = Math.max(0, scrollHeight - viewportHeight),
            scrollRatio;

        maxScroll = scrollRange;
        thumbHeight = Math.min(trackHeight, Math.max(36, viewportHeight / scrollHeight * trackHeight));
        thumbTravel = Math.max(0, trackHeight - thumbHeight);
        track.hidden = maxScroll === 0;
        track.setAttribute("aria-valuemax", String(Math.round(maxScroll)));

        if (maxScroll === 0) {
            return;
        }

        scrollRatio = window.scrollY / maxScroll;
        thumb.style.height = thumbHeight + "px";
        thumb.style.transform = "translateY(" + scrollRatio * thumbTravel + "px)";
        track.setAttribute("aria-valuenow", String(Math.round(window.scrollY)));
    }

    function stopAnimation() {
        if (animationFrame !== null) {
            window.cancelAnimationFrame(animationFrame);
            animationFrame = null;
        }
    }

    function interruptAnimation(event) {
        if (event.type === "keydown" && track.contains(event.target)) {
            return;
        }

        if (animationFrame !== null) {
            stopAnimation();
            targetScroll = window.scrollY;
            previousFrameTime = 0;
        }
    }

    function animateToTarget(timestamp) {
        var currentScroll = window.scrollY,
            difference = targetScroll - currentScroll,
            elapsed,
            easing;

        if (Math.abs(difference) < 0.5 || prefersReducedMotion) {
            window.scrollTo(0, targetScroll);
            animationFrame = null;
            previousFrameTime = 0;
            updateScrollbar();
            return;
        }

        elapsed = previousFrameTime === 0 ? 16 : Math.min(timestamp - previousFrameTime, 64);
        previousFrameTime = timestamp;
        easing = 1 - Math.exp(-elapsed / 220);
        window.scrollTo(0, currentScroll + difference * easing);
        animationFrame = window.requestAnimationFrame(animateToTarget);
    }

    function moveTo(scrollPosition) {
        targetScroll = Math.max(0, Math.min(maxScroll, scrollPosition));

        if (prefersReducedMotion) {
            stopAnimation();
            window.scrollTo(0, targetScroll);
            updateScrollbar();
            return;
        }

        if (animationFrame === null) {
            animationFrame = window.requestAnimationFrame(animateToTarget);
        }
    }

    window.addEventListener("scroll", function () {
        if (!dragging && animationFrame === null) {
            targetScroll = window.scrollY;
        }

        updateScrollbar();
    }, { passive: true });

    window.addEventListener("wheel", interruptAnimation, { passive: true });
    window.addEventListener("touchstart", interruptAnimation, { passive: true });
    window.addEventListener("pointerdown", interruptAnimation);
    window.addEventListener("keydown", interruptAnimation);
    window.addEventListener("resize", updateScrollbar);

    if ("ResizeObserver" in window) {
        new ResizeObserver(updateScrollbar).observe(document.body);
    }

    thumb.addEventListener("pointerdown", function (event) {
        if (event.button !== 0 || maxScroll === 0) {
            return;
        }

        event.preventDefault();
        dragging = true;
        dragStartY = event.clientY;
        dragStartScroll = window.scrollY;
        targetScroll = dragStartScroll;
        track.classList.add("is-dragging");
        thumb.setPointerCapture(event.pointerId);
    });

    thumb.addEventListener("pointermove", function (event) {
        var scrollPerPixel;

        if (!dragging || thumbTravel === 0) {
            return;
        }

        scrollPerPixel = maxScroll / thumbTravel;
        moveTo(dragStartScroll + (event.clientY - dragStartY) * scrollPerPixel * dragSensitivity);
    });

    function endDrag() {
        if (!dragging) {
            return;
        }

        dragging = false;
        track.classList.remove("is-dragging");
    }

    thumb.addEventListener("pointerup", endDrag);
    thumb.addEventListener("pointercancel", endDrag);

    track.addEventListener("pointerdown", function (event) {
        var bounds,
            clickPosition;

        if (event.target === thumb || maxScroll === 0) {
            return;
        }

        bounds = track.getBoundingClientRect();
        clickPosition = event.clientY - bounds.top - thumbHeight / 2;
        moveTo(clickPosition / Math.max(1, thumbTravel) * maxScroll);
    });

    track.addEventListener("keydown", function (event) {
        var scrollStep = window.innerHeight * 0.85,
            nextScroll = window.scrollY;

        switch (event.key) {
            case "ArrowDown":
                nextScroll += 40;
                break;
            case "ArrowUp":
                nextScroll -= 40;
                break;
            case "PageDown":
                nextScroll += scrollStep;
                break;
            case "PageUp":
                nextScroll -= scrollStep;
                break;
            case "Home":
                nextScroll = 0;
                break;
            case "End":
                nextScroll = maxScroll;
                break;
            default:
                return;
        }

        event.preventDefault();
        moveTo(nextScroll);
    });

    updateScrollbar();
})();
