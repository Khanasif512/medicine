@verbatim
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from https://htmldemo.net/ecolife/ecolife/contact.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:20:37 GMT -->
@endverbatim
@include('Layout.heads.head')
@verbatim

<body>
    <!-- main layout start from here -->
    @endverbatim
    @include('Layout.Preloaders.preloader')
    @verbatim
    <div id="main">
        <!-- Header Start -->
        @endverbatim
        @include('Layout.Navbar.navbar')
        @verbatim
        <!-- Header End -->
        

        <!-- offcanvas overlay start -->
        <div class="offcanvas-overlay"></div>
        <!-- offcanvas overlay end -->
        <!-- OffCanvas Cart Start -->
        <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
            <div class="inner">
                <div class="head">
                    <span class="title">Cart</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <div class="body customScroll">
                    <ul class="minicart-product-list">
                        <li>
                            <a href="/single-product" class="image"><img
                                    src="assets/images/product-image/mini-cart/1.jpg" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="/single-product" class="title">Juicy Couture...</a>
                                <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="/single-product" class="image"><img
                                    src="assets/images/product-image/mini-cart/2.jpg" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="/single-product" class="title">Water and Wind...</a>
                                <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                        <li>
                            <a href="/single-product" class="image"><img
                                    src="assets/images/product-image/mini-cart/3.jpg" alt="Cart product Image"></a>
                            <div class="content">
                                <a href="/single-product" class="title">Fila Locker Room...</a>
                                <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shopping-cart-total">
                    <h4>Subtotal : <span>$20.00</span></h4>
                    <h4>Shipping : <span>$7.00</span></h4>
                    <h4>Taxes : <span>$0.00</span></h4>
                    <h4 class="shop-total">Total : <span>$27.00</span></h4>
                </div>
                <div class="foot">
                    <div class="buttons">
                        <a href="/cart" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                        <a href="/checkout" class="btn btn-outline-dark current-btn">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- OffCanvas Cart End -->
        <!-- OffCanvas Menu Start -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <button class="offcanvas-close"></button>
            <!-- contact Info -->
            <div class="contact-info d-flex align-items-center justify-content-center color-black py-3">
                <img class="me-3" src="assets/images/icons/mobile-contact.png" alt="">
                <p>Call us:</p>
                <a class="color-black" href="tel:(+800)345678">(+800)345678</a>
            </div>
            <!-- offcanvas compare & wishlist -->
            <div class="user-panel">
                <ul class="d-flex justify-content-between">

                    <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i>Wishlist (0)</a>
                    </li>
                </ul>
            </div>
            <div class="menu-close">
                menu
            </div>
            <!-- offcanvas menu -->
            <div class="inner customScroll">
                <div class="offcanvas-menu mb-4">
                    <ul>
                        <li><a href="/"><span class="menu-text">Home</span></a></li>
                        <li class="menu-dropdown">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="/about">About Page</a></li>
                                <li><a href="/cart">Cart Page</a></li>
                                <li><a href="/checkout">Checkout Page</a></li>

                                <li><a href="/login">Login & Regiter Page</a></li>
                                <li><a href="/my-account">Account Page</a></li>
                                <li><a href="/wishlist">Wishlist Page</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Shop</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#"><span class="menu-text">Shop Page</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="/shop-3-column">Shop Grid 3 Column</a></li>
                                        <li><a href="/shop-4-column">Shop Grid 4 Column</a></li>
                                        <li><a href="/shop-left-sidebar">Shop Grid Left Sidebar</a>
                                        </li>
                                        <li><a href="/shop-right-sidebar">Shop Grid Right
                                                Sidebar</a></li>
                                        <li><a href="/shop-list">Shop List</a></li>
                                        <li><a href="/shop-list-left-sidebar">Shop List Left
                                                Sidebar</a></li>
                                        <li><a href="/shop-list-right-sidebar">Shop List Right
                                                Sidebar</a></li>
                                        <li><a href="/shop-filter">Shop Filter Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text">product Details Page</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="/single-product">Shop Single</a></li>
                                        <li><a href="/single-product-variable">Shop Variable</a>
                                        </li>
                                        <li><a href="/single-product-affiliate">Shop Affiliate</a>
                                        </li>
                                        <li><a href="/single-product-group">Shop Group</a></li>
                                        <li><a href="/single-product-tabstyle-2">Shop Tab 2</a></li>
                                        <li><a href="/single-product-tabstyle-3">Shop Tab 3</a></li>
                                        <li><a href="/single-product-slider">Shop Slider</a></li>
                                        <li><a href="/single-product-gallery-left">Shop Gallery
                                                Left</a></li>
                                        <li><a href="/single-product-gallery-right">Shop Gallery
                                                Right</a></li>
                                        <li><a href="/single-product-sticky-left">Shop Sticky
                                                Left</a></li>
                                        <li><a href="/single-product-sticky-right">Shop Sticky
                                                Right</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Blog</span></a>
                            <ul class="sub-menu">
                                <li><a href="/blog-grid-left-sidebar">Grid Left Sidebar</a></li>
                                <li><a href="/blog-grid-right-sidebar">Grid Right Sidebar</a></li>
                                <li><a href="/blog-list-left-sidebar">List Left Sidebar</a></li>
                                <li><a href="/blog-list-right-sidebar">List Right Sidebar</a></li>
                                <li><a href="/blog-single-left-sidebar">Single Left Sidebar</a></li>
                                <li><a href="/blog-single-right-sidebar">Single Right Sidbar</a>
                            </ul>
                        </li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
                <!-- OffCanvas Menu End -->
                <div class="offcanvas-social mt-5">
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-google"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- OffCanvas Menu End -->
        <!-- Header End -->
        <!-- Breadcrumb Area start -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <h1 class="breadcrumb-hrading">Contact Page</h1>
                            <ul class="breadcrumb-links">
                                <li><a href="/">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Area End -->
        <!-- contact area start -->
        <div class="contact-area mtb-60px">
            <div class="container">
                <div class="contact-map mb-10">
                    <div id="map">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe id="gmap_canvas"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58405.460328222754!2d90.29723167419434!3d23.806460660543568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c72d1a5bf2a9%3A0x25a0f9a592e96ad8!2z4Kay4Ka_4KaC4KaVIOCmhuCmqiDgpqrgp43gprDgpq_gp4HgppXgp43gpqTgpr8g4Kay4Ka_4KaD!5e0!3m2!1sbn!2sbd!4v1793765929353!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-row-2">
                    <div class="col-lg-4 col-md-5">
                        <div class="contact-info-wrap">
                            <div class="single-contact-info">
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-info-dec">
                                    <p>+012 345 678 102</p>
                                    <p>+012 345 678 102</p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="contact-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="contact-info-dec">
                                    <p><a href="#">urname@email.com</a></p>
                                    <p><a href="#">urwebsitenaem.com</a></p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-info-dec">
                                    <p>Address goes here,</p>
                                    <p>street, Crossroad 123.</p>
                                </div>
                            </div>
                            <div class="contact-social">
                                <h3>Follow Us</h3>
                                <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-youtube"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-google"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="contact-form">
                            <div class="contact-title mb-30">
                                <h2>Get In Touch</h2>
                            </div>
                            <form class="contact-form-style" id="contact-form" action="https://whizthemes.com/nazmul/php/mail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input name="name" placeholder="Name*" type="text" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input name="email" placeholder="Email*" type="email" />
                                    </div>
                                    <div class="col-lg-12">
                                        <input name="subject" placeholder="Subject*" type="text" />
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="message" placeholder="Your Message*"></textarea>
                                        <button class="submit" type="submit">SEND</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area end -->
        <!-- Footer Area start -->
        @endverbatim
        @include('Layout.Footers.footer')
        @verbatim
        <!--  Footer Area End -->
    </div>

    @endverbatim
    @include('Layout.scripts.scripts')
    @verbatim

    <!-- Mirrored from https://htmldemo.net/ecolife/ecolife/contact.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:20:37 GMT -->

</html>

@endverbatim