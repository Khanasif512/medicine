@verbatim
<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from https://htmldemo.net/ecolife/ecolife/blog-single-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:20:37 GMT -->
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
                                <h1 class="breadcrumb-hrading">Blog Post</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="/">Home</a></li>
                                    <li>Single Blog Left Sidebar</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->
            <!-- Shop Category Area End -->
            <div class="shop-category-area single-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                            <div class="blog-posts">
                                <div class="single-blog-post blog-grid-post">
                                    <div class="blog-post-media">
                                        <div class="blog-image single-blog">
                                            <a href="#"><img src="assets/images/blog-image/blog-1.jpg" alt="blog" /></a>
                                        </div>
                                    </div>
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
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                            aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat.
                                        </p>
                                    </div>
                                    <div class="single-post-content">
                                        <p class="quate-speech">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua.
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor
                                            incididunt ut labore et dolore magna aliqua. consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in rep rehenderit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor
                                            incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                                <!-- single blog post -->
                            </div>
                            <div class="blog-single-tags-share d-sm-flex justify-content-between">
                                <div class="blog-single-tags d-flex">
                                    <span class="title">Tags: </span>
                                    <ul class="tag-list">
                                        <li><a href="#">Fashion,</a></li>
                                        <li><a href="#">T-shirt,</a></li>
                                        <li><a href="#">White</a></li>
                                    </ul>
                                </div>
                                <div class="blog-single-share d-flex">
                                    <span class="title">Share:</span>
                                    <ul class="social">
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
                                            <a href="#"><i class="ion-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-related-post">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <!-- Section Title -->
                                        <div class="section-title underline-shape">
                                            <h2>Related Post</h2>
                                        </div>
                                        <!-- Section Title -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-res-md-30px mb-res-sm-30px">
                                        <div class="blog-post-media">
                                            <div class="blog-image single-blog">
                                                <a href="#"><img src="assets/images/blog-image/blog-1.jpg" alt="blog" /></a>
                                            </div>
                                        </div>
                                        <div class="blog-post-content-inner">
                                            <h4 class="blog-title"><a href="/blog-single-left-sidebar">This is Third Post For XipBlog</a></h4>
                                            <ul class="blog-page-meta">
                                                <li>
                                                    <a href="#"><i class="ion-person"></i> Admin</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-calendar"></i> 24 April, 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-res-md-30px mb-res-sm-30px">
                                        <div class="blog-post-media">
                                            <div class="blog-image single-blog">
                                                <a href="#"><img src="assets/images/blog-image/blog-2.jpg" alt="blog" /></a>
                                            </div>
                                        </div>
                                        <div class="blog-post-content-inner">
                                            <h4 class="blog-title"><a href="/blog-single-left-sidebar">This is Third Post For XipBlog</a></h4>
                                            <ul class="blog-page-meta">
                                                <li>
                                                    <a href="#"><i class="ion-person"></i> Admin</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-calendar"></i> 24 April, 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="blog-post-media">
                                            <div class="blog-image single-blog">
                                                <a href="#"><img src="assets/images/blog-image/blog-3.jpg" alt="blog" /></a>
                                            </div>
                                        </div>
                                        <div class="blog-post-content-inner">
                                            <h4 class="blog-title"><a href="/blog-single-left-sidebar">This is Third Post For XipBlog</a></h4>
                                            <ul class="blog-page-meta">
                                                <li>
                                                    <a href="#"><i class="ion-person"></i> Admin</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-calendar"></i> 24 April, 2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-area">
                                <h2 class="comment-heading">3 Comments</h2>
                                <div class="review-wrapper">
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="assets/images/testimonial-image/1.png" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                        <span class="date">February 16, 2020 at 1:38 am</span>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>
                                                    Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-review child-review">
                                        <div class="review-img">
                                            <img src="assets/images/testimonial-image/2.png" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                        <span class="date">February 16, 2020 at 1:38 am</span>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="assets/images/testimonial-image/1.png" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                        <span class="date">February 16, 2020 at 1:38 am</span>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>
                                                    Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-comment-form">
                                <h2 class="comment-heading">Leave a Reply</h2>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <label>Your Review:</label>
                                            <textarea placeholder="Write a review"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label>Name:</label>
                                            <input type="text" placeholder="Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label>Email:</label>
                                            <input type="email" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-form">
                                            <label>Website:</label>
                                            <input type="email" placeholder="Website" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <input type="submit" value="Submit" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Area Start -->
                        <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-res-md-60px mb-res-sm-60px">
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

<!-- Mirrored from https://htmldemo.net/ecolife/ecolife/blog-single-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:20:37 GMT -->
</html>

@endverbatim
