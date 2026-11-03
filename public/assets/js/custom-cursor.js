(function () {
    "use strict";

    var finePointer = window.matchMedia(
        "(hover: hover) and (pointer: fine) and (prefers-reduced-motion: no-preference)"
    ),
        cursor = document.createElement("div"),
        glow = document.createElement("span"),
        interactiveSelector = [
            "a",
            "button",
            "[role='button']",
            "input[type='button']",
            "input[type='submit']",
            "input[type='reset']",
            "label",
            "summary",
            ".page-scrollbar__thumb"
        ].join(","),
        textSelector = "input:not([type='button']):not([type='submit']):not([type='reset']):not([type='checkbox']):not([type='radio']), textarea, [contenteditable='true']",
        nativeCursorSelector = "select, input[type='checkbox'], input[type='radio']",
        touchHideTimeout = null;

    cursor.className = "modern-cursor";
    cursor.setAttribute("aria-hidden", "true");
    glow.className = "modern-cursor__glow";
    cursor.appendChild(glow);
    document.body.appendChild(cursor);

    function moveCursor(event) {
        var target = event.target instanceof Element ? event.target : null,
            interactive = target && target.closest(interactiveSelector),
            textInput = target && target.closest(textSelector),
            nativeControl = target && target.closest(nativeCursorSelector),
            sidebarMenu = target && target.closest(".offcanvas");

        if (event.pointerType === "touch") {
            if (!sidebarMenu) {
                cursor.classList.remove("is-touch-visible", "is-visible");
                return;
            }

            window.clearTimeout(touchHideTimeout);
            cursor.classList.add("is-touch-visible");
        } else if (!finePointer.matches) {
            return;
        }

        glow.style.left = event.clientX + "px";
        glow.style.top = event.clientY + "px";
        cursor.classList.add("is-visible");
        cursor.classList.toggle("is-interactive", Boolean(interactive));
        cursor.classList.toggle("is-native", Boolean(textInput || nativeControl));
    }

    document.addEventListener("pointermove", moveCursor, { passive: true });
    document.addEventListener("pointerdown", function (event) {
        if (event.pointerType === "touch") {
            moveCursor(event);
        }

        cursor.classList.add("is-pressed");
    });
    document.addEventListener("pointerup", function (event) {
        cursor.classList.remove("is-pressed");

        if (event.pointerType === "touch") {
            touchHideTimeout = window.setTimeout(function () {
                cursor.classList.remove("is-touch-visible", "is-visible");
            }, 700);
        }
    });
    document.addEventListener("pointerout", function (event) {
        if (!event.relatedTarget) {
            cursor.classList.remove("is-visible");
        }
    });
})();
