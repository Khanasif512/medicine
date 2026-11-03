@verbatim
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from https://htmldemo.net/ecolife/ecolife/blog-list-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:20:37 GMT -->
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
@include('Layout.Headers.header')
@verbatim
            <!-- Header End -->
            <div class="mobile-search-option pb-3 d-lg-none">
                <div class="container-fluid">
                    <div class="header-account-list">
                        <div class="dropdown-search">
                            <form action="#">
                                <input placeholder="Search entire store here ..." type="text" />
                                <div class="search-category">
                                    <select class="bootstrap-select" name="poscats">
                                        <option value="0">All categories</option>
                                        <option value="104">
                                            Fresh Food
                                        </option>
                                        <option value="183">
                                            - - Fresh Fruit
                                        </option>
                                        <option value="187">
                                            - - - - Bananas
                                        </option>
                                        <option value="188">
                                            - - - - Apples &amp; Pears
                                        </option>
                                        <option value="189">
                                            - - - - Berries &amp; Cherries
                                        </option>
                                        <option value="190">
                                            - - - - Oranges &amp; Citrus Fruit
                                        </option>
                                        <option value="191">
                                            - - - - Grapes
                                        </option>
                                        <option value="184">
                                            - - Fresh Vegetables
                                        </option>
                                        <option value="192">
                                            - - - - Potatoes &amp; Sweet Potatoes
                                        </option>
                                        <option value="193">
                                            - - - - Onions &amp; Leeks
                                        </option>
                                        <option value="194">
                                            - - - - Carrots &amp; Root Vegetables
                                        </option>
                                        <option value="195">
                                            - - - - Broccoli &amp; Cauliflower
                                        </option>
                                        <option value="196">
                                            - - - - Cabbages &amp; Greens
                                        </option>
                                        <option value="185">
                                            - - Fresh Salad &amp; Dips
                                        </option>
                                        <option value="197">
                                            - - - - Lettuce &amp; Salad bags
                                        </option>
                                        <option value="198">
                                            - - - - Tomatoes
                                        </option>
                                        <option value="199">
                                            - - - - Cucumber
                                        </option>
                                        <option value="200">
                                            - - - - Celery
                                        </option>
                                        <option value="201">
                                            - - - - Peppers
                                        </option>
                                        <option value="186">
                                            - - Milk, Butter &amp; Eggs
                                        </option>
                                        <option value="202">
                                            - - - - Milk
                                        </option>
                                        <option value="203">
                                            - - - - Spreads &amp; Margarine
                                        </option>
                                        <option value="204">
                                            - - - - Fresh Cream &amp; Custard
                                        </option>
                                        <option value="205">
                                            - - - - Eggs
                                        </option>
                                        <option value="206">
                                            - - - - Baking &amp; Cooking
                                        </option>
                                    </select>
                                </div>
                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
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
                                <h1 class="breadcrumb-hrading">Blog Post</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="/">Home</a></li>
                                    <li>Blog List Right Sidebar</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->
            <!-- Shop Category Area End -->
            <div class="shop-category-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="single-blog-post blog-grid-post">
                                        <div class="blog-post-media">
                                            <div class="blog-image">
                                                <a href="#"><img src="assets/images/blog-image/blog-1.jpg" alt="blog" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 align-self-center align-items-center">
                                    <div class="blog-post-content-inner">
                                        <h4 class="blog-title"><a href="#">This is Third Post For XipBlog</a></h4>
                                        <ul class="blog-page-meta">
                                            <li>
                                                <a href="#"><i class="ion-person"></i> Admin</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-calendar"></i> 24 April, 2020</a>
                                            </li>
                                        </ul>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum eius expedita hic, vel minima minus reiciendis consequuntur ab beatae necessitatibus amet magni itaque, nostrum vero eos nobis modi
                                            temporibus recusandae.
                                        </p>
                                        <a class="read-more-btn" href="/blog-single-left-sidebar"> Read More <i class="ion-android-arrow-dropright-circle"></i></a>
                                    </div>
                                </div>
                                <!-- single blog post -->
                            </div>
                            <div class="row mt-50">
                                <div class="col-lg-5 col-md-6">
                                    <div class="single-blog-post blog-grid-post">
                                        <div class="blog-post-media">
                                            <div class="blog-gallery">
                                                <div class="gallery-item">
                                                    <a href="#"><img src="assets/images/blog-image/blog-2.jpg" alt="blog" /></a>
                                                </div>
                                                <div class="gallery-item">
                                                    <a href="#"><img src="assets/images/blog-image/blog-3.jpg" alt="blog" /></a>
                                                </div>
                                                <div class="gallery-item">
                                                    <a href="#"><img src="assets/images/blog-image/blog-4.jpg" alt="blog" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 align-self-center align-items-center">
                                    <div class="blog-post-content-inner">
                                        <h4 class="blog-title"><a href="#">This is Third Post For XipBlog</a></h4>
                                        <ul class="blog-page-meta">
                                            <li>
                                                <a href="#"><i class="ion-person"></i> Admin</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-calendar"></i> 24 April, 2020</a>
                                            </li>
                                        </ul>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum eius expedita hic, vel minima minus reiciendis consequuntur ab beatae necessitatibus amet magni itaque, nostrum vero eos nobis modi
                                            temporibus recusandae.
                                        </p>
                                        <a class="read-more-btn" href="/blog-single-left-sidebar"> Read More <i class="ion-android-arrow-dropright-circle"></i></a>
                                    </div>
                                </div>
                                <!-- single blog post -->
                            </div>
                            <div class="row mt-50">
                                <div class="col-lg-5 col-md-6">
                                    <div class="single-blog-post blog-grid-post">
                                        <div class="blog-post-media">
                                            <div class="blog-post-audio">
                                                <iframe
                                                    class="embed-responsive-item"
                                                    width="500"
                                                    height="260"
                                                    allow="autoplay"
                                                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/182537870&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 align-self-center align-items-center">
                                    <div class="blog-post-content-inner">
                                        <h4 class="blog-title"><a href="#">This is Third Post For XipBlog</a></h4>
                                        <ul class="blog-page-meta">
                                            <li>
                                                <a href="#"><i class="ion-person"></i> Admin</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-calendar"></i> 24 April, 2020</a>
                                            </li>
                                        </ul>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum eius expedita hic, vel minima minus reiciendis consequuntur ab beatae necessitatibus amet magni itaque, nostrum vero eos nobis modi
                                            temporibus recusandae.
                                        </p>
                                        <a class="read-more-btn" href="/blog-single-left-sidebar"> Read More <i class="ion-android-arrow-dropright-circle"></i></a>
                                    </div>
                                </div>
                                <!-- single blog post -->
                            </div>
                            <div class="row mt-50">
                                <div class="col-lg-5 col-md-6">
                                    <div class="single-blog-post blog-grid-post">
                                        <div class="blog-post-media">
                                                <div class="blog-post-video">
                                                    <div class="blog-post-video position-relative">
                                                        <a class="venobox venoboxvid video-icon overflow-hidden vbox-item" data-gall="gall-video" data-autoplay="true" data-vbtype="video" href="https://youtu.be/Hx64uvCA_zQ">
                                                            <img class="img-responsive w-100 thumb-image" src="assets/images/blog-image/blog-5.jpg" alt="">
                                                            <img class="icon" src="assets/images/icons/youtube-brands.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 align-self-center align-items-center">
                                    <div class="blog-post-content-inner">
                                        <h4 class="blog-title"><a href="#">This is Third Post For XipBlog</a></h4>
                                        <ul class="blog-page-meta">
                                            <li>
                                                <a href="#"><i class="ion-person"></i> Admin</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-calendar"></i> 24 April, 2020</a>
                                            </li>
                                        </ul>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum eius expedita hic, vel minima minus reiciendis consequuntur ab beatae necessitatibus amet magni itaque, nostrum vero eos nobis modi
                                            temporibus recusandae.
                                        </p>
                                        <a class="read-more-btn" href="/blog-single-left-sidebar"> Read More <i class="ion-android-arrow-dropright-circle"></i></a>
                                    </div>
                                </div>
                                <!-- single blog post -->
                            </div>
                            <div class="row mt-50">
                                <div class="col-lg-5 col-md-6">
                                    <div class="single-blog-post blog-grid-post">
                                        <div class="blog-post-media">
                                            <div class="blog-image">
                                                <a href="#"><img src="assets/images/blog-image/blog-3.jpg" alt="blog" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 align-self-center align-items-center">
                                    <div class="blog-post-content-inner">
                                        <h4 class="blog-title"><a href="#">This is Third Post For XipBlog</a></h4>
                                        <ul class="blog-page-meta">
                                            <li>
                                                <a href="#"><i class="ion-person"></i> Admin</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-calendar"></i> 24 April, 2020</a>
                                            </li>
                                        </ul>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum eius expedita hic, vel minima minus reiciendis consequuntur ab beatae necessitatibus amet magni itaque, nostrum vero eos nobis modi
                                            temporibus recusandae.
                                        </p>
                                        <a class="read-more-btn" href="/blog-single-left-sidebar"> Read More <i class="ion-android-arrow-dropright-circle"></i></a>
                                    </div>
                                </div>
                                <!-- single blog post -->
                            </div>
                            <!-- single blog post -->
                            <div class="row mt-50">
                                <div class="col-lg-5 col-md-6">
                                    <div class="single-blog-post blog-grid-post">
                                        <div class="blog-post-media">
                                            <div class="blog-image">
                                                <a href="#"><img src="assets/images/blog-image/blog-4.jpg" alt="blog" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6 align-self-center align-items-center">
                                    <div class="blog-post-content-inner">
                                        <h4 class="blog-title"><a href="#">This is Third Post For XipBlog</a></h4>
                                        <ul class="blog-page-meta">
                                            <li>
                                                <a href="#"><i class="ion-person"></i> Admin</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-calendar"></i> 24 April, 2020</a>
                                            </li>
                                        </ul>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum eius expedita hic, vel minima minus reiciendis consequuntur ab beatae necessitatibus amet magni itaque, nostrum vero eos nobis modi
                                            temporibus recusandae.
                                        </p>
                                        <a class="read-more-btn" href="/blog-single-left-sidebar"> Read More <i class="ion-android-arrow-dropright-circle"></i></a>
                                    </div>
                                </div>
                                <!-- single blog post -->
                            </div>
                            <!--  Pagination Area Start -->
                            <div class="pro-pagination-style text-center">
                                <ul>
                                    <li>
                                        <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                                    </li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li>
                                        <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!--  Pagination Area End -->
                        </div>
                        <!-- Sidebar Area Start -->
                        <div class="col-lg-3 col-md-12 mb-res-md-60px mb-res-sm-60px">
                            <div class="left-sidebar">
                                <!-- Sidebar single item -->
                                <div class="sidebar-widget">
                                    <div class="main-heading">
                                        <h2>Search</h2>
                                    </div>
                                    <div class="search-widget">
                                        <form action="#">
                                            <input placeholder="Search entire store here ..." type="text" />
                                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Sidebar single item -->
                                <!-- Sidebar single item -->
                                <div class="sidebar-widget mt-40">
                                    <div class="main-heading">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class="category-post">
                                        <ul>
                                            <li><a href="#">Dresses (20)</a></li>
                                            <li><a href="#">Jackets & Coats (9)</a></li>
                                            <li><a href="#">Sweaters (5)</a></li>
                                            <li><a href="#">Jeans (11)</a></li>
                                            <li><a href="#">Blouses & Shirts (3)</a></li>
                                            <li><a href="#">Electronic Cigarettes (6)</a></li>
                                            <li><a href="#">Bags & Cases (4)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar single item -->
                                <div class="sidebar-widget mt-40">
                                    <div class="main-heading">
                                        <h2>Recent Post</h2>
                                    </div>
                                    <div class="recent-post-widget">
                                        <div class="recent-single-post d-flex">
                                            <div class="thumb-side">
                                                <a href="#"><img src="assets/images/blog-image/blog-1.jpg" alt="" /></a>
                                            </div>
                                            <div class="media-side">
                                                <h5><a href="#">This Is First Post For XipBlog </a></h5>
                                                <span class="date">APRIL 24, 2020</span>
                                            </div>
                                        </div>
                                        <div class="recent-single-post d-flex">
                                            <div class="thumb-side">
                                                <a href="#"><img src="assets/images/blog-image/blog-2.jpg" alt="" /></a>
                                            </div>
                                            <div class="media-side">
                                                <h5><a href="#">This Is Secound Post For XipBlog </a></h5>
                                                <span class="date">APRIL 25, 2020</span>
                                            </div>
                                        </div>
                                        <div class="recent-single-post d-flex">
                                            <div class="thumb-side">
                                                <a href="#"><img src="assets/images/blog-image/blog-3.jpg" alt="" /></a>
                                            </div>
                                            <div class="media-side">
                                                <h5><a href="#">This Is Third Post For XipBlog </a></h5>
                                                <span class="date">APRIL 26, 2020</span>
                                            </div>
                                        </div>
                                        <div class="recent-single-post d-flex">
                                            <div class="thumb-side m-0px">
                                                <a href="#"><img src="assets/images/blog-image/blog-4.jpg" alt="" /></a>
                                            </div>
                                            <div class="media-side">
                                                <h5><a href="#">This Is Fourth Post For XipBlog </a></h5>
                                                <span class="date">APRIL 27, 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sidebar single item -->
                                <div class="sidebar-widget mt-40">
                                    <div class="main-heading">
                                        <h2>Tag</h2>
                                    </div>
                                    <div class="sidebar-widget-tag">
                                        <ul>
                                            <li><a href="#">Fresh Fruit</a></li>
                                            <li><a href="#"> Fresh Vegetables</a></li>
                                            <li><a href="#">Fresh Salad</a></li>
                                            <li><a href="#"> Butter & Eggs</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar single item -->
                            </div>
                        </div>
                        <!-- Sidebar Area End -->
                    </div>
                </div>
            </div>
            <!-- Shop Category Area End -->
            <!-- Footer Area start -->
            @endverbatim
@include('Layout.Footers.footer')
@verbatim
            <!--  Footer Area End -->
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="assets/images/product-image/organic/product-11.jpg" alt="" />
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="assets/images/product-image/organic/product-20.jpg" alt="" />
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="assets/images/product-image/organic/product-19.jpg" alt="" />
                                    </div>
                                </div>
                                <!-- Thumbnail Large Image End -->
                                <!-- Thumbnail Image End -->
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active owl-carousel nav owl-nav-style owl-nav-style-2" role="tablist">
                                        <a class="active" data-bs-toggle="tab" href="#pro-1"><img src="assets/images/product-image/organic/product-11.jpg" alt="" /></a>
                                        <a data-bs-toggle="tab" href="#pro-2"><img src="assets/images/product-image/organic/product-9.jpg" alt="" /></a>
                                        <a data-bs-toggle="tab" href="#pro-3"><img src="assets/images/product-image/organic/product-20.jpg" alt="" /></a>
                                        <a data-bs-toggle="tab" href="#pro-4"><img src="assets/images/product-image/organic/product-19.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Originals Kaval Windbr</h2>
                                    <p class="reference">Reference:<span> demo_17</span></p>
                                    
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€18.90</li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                    <div class="pro-details-size-color">
                                        <div class="pro-details-color-wrap">
                                            <span>Color</span>
                                            <div class="pro-details-color-content">
                                                <ul>
                                                    <li class="blue"></li>
                                                    <li class="maroon active"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        </div>
                                        <div class="pro-details-cart btn-hover">
                                            <a href="#"> + Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-wish-com">
                                        <div class="pro-details-wishlist">
                                            <a href="#"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->

        @endverbatim
@include('Layout.scripts.scripts')
@verbatim

<!-- Mirrored from https://htmldemo.net/ecolife/ecolife/blog-list-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:20:37 GMT -->
</html>

@endverbatim
