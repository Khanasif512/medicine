@verbatim
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from https://htmldemo.net/ecolife/ecolife/shop-3-column.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:20:28 GMT -->
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
                                <h1 class="breadcrumb-hrading">Shop Page</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="/">Home</a></li>
                                    <li>Shop Grid</li>
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
                        <div class="col-lg-12 col-md-12">
                            <!-- Shop Top Area Start -->
                            <div class="shop-top-bar">
                                <!-- Left Side start -->
                                <div class="shop-tab nav mb-res-sm-15">
                                    <a class="active" href="#shop-1" data-bs-toggle="tab">
                                        <i class="fa fa-th show_grid"></i>
                                    </a>
                                    <a href="#shop-2" data-bs-toggle="tab">
                                        <i class="fa fa-list-ul"></i>
                                    </a>
                                    <p>There Are 17 Products.</p>
                                </div>
                                <!-- Left Side End -->
                                <!-- Right Side Start -->
                                <div class="select-shoing-wrap">
                                    <div class="shot-product">
                                        <p>Sort By:</p>
                                    </div>
                                    <div class="shop-select">
                                        <select>
                                            <option value="">Sort by newness</option>
                                            <option value="">A to Z</option>
                                            <option value=""> Z to A</option>
                                            <option value="">In stock</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Right Side End -->
                            </div>
                            <!-- Shop Top Area End -->

                            <!-- Shop Bottom Area Start -->
                            <div class="shop-bottom-area mt-35">
                                <!-- Shop Tab Content Start -->
                                <div class="tab-content jump">
                                    <!-- Tab One Start -->
                                    <div id="shop-1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-1.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-1.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="/single-product" class="product-link">Juicy Couture Juicy Quilted T..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€18.90</li>
                                                                <li class="current-price">€34.21</li>
                                                                <li class="discount-price">-5%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-2.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="/single-product" class="product-link">New Balance Fresh Foam Ka..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€18.90</li>
                                                                <li class="current-price">€15.12</li>
                                                                <li class="discount-price">-20%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-3.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-4.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                        <h2><a href="/single-product" class="product-link">Brixton Patrol All Terrain..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-5.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-5.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                        <h2><a href="/single-product" class="product-link">Juicy Couture Tricot Logo S..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-6.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-6.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="/single-product" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-7.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-8.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNAR</span></a>
                                                        <h2><a href="/single-product" class="product-link">Fila Locker Room Varsit...</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="/single-product" class="product-link">Water and Wind Resista..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-10.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-10.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="/single-product" class="product-link">New Luxury Men's Slim Fi...</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€29.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-11.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-12.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="/single-product" class="product-link">Originals Kaval Win...</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€23.90</li>
                                                                <li class="current-price">€21.51</li>
                                                                <li class="discount-price">-10%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-13.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-3.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="/single-product" class="product-link">Brixton Patrol All Terra...</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-14.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-14.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="/single-product" class="product-link">Madden by Steve Madden C...</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€11.90</li>
                                                                <li class="current-price">€10.12</li>
                                                                <li class="discount-price">-15%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-2.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="/single-product" class="product-link">Juicy Couture Juicy Quilted T..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€35.90</li>
                                                                <li class="current-price">€34.11</li>
                                                                <li class="discount-price">-5%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-1.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-1.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="/single-product" class="product-link">Juicy Couture Juicy Quilted T..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€18.90</li>
                                                                <li class="current-price">€34.21</li>
                                                                <li class="discount-price">-5%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-2.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                        <h2><a href="/single-product" class="product-link">New Balance Fresh Foam Ka..</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price">€18.90</li>
                                                                <li class="current-price">€15.12</li>
                                                                <li class="discount-price">-20%</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="/single-product" class="thumbnail">
                                                            <img class="first-img" src="assets/images/product-image/organic/product-3.jpg" alt="" />
                                                            <img class="second-img" src="assets/images/product-image/organic/product-4.jpg" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">New</li>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                        <h2><a href="/single-product" class="product-link">Brixton Patrol All Terra...</a></h2>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">€18.90</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab One End -->
                                    <!-- Tab Two Start -->
                                    <div id="shop-2" class="tab-pane">
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-7.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-8.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="/single-product" class="product-link">Fila Locker Room Varsity Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€9.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Create a cool and sporty look with the FILA® Locker Room Varsity Jacket.</p>
                                                                        <p>Comfortable cotton-blend fabrication.</p>
                                                                        <p>Classic varsity jacket features brand details throughout.</p>
                                                                        <p>Flat knit collar.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-5.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-5.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="/single-product" class="product-link">Juicy Couture Tricot Logo Stripe Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€18.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Freshen up your look with the Juicy Couture™ Tricot Logo Stripe Jacket.</p>
                                                                        <p>Polyester fabrication flaunts stripe and brand logo detail at sleeves.</p>
                                                                        <p>Stand collar.</p>
                                                                        <p>Front-zipper closure.</p>
                                                                        <p>100% polyester.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>300 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-19.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-20.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                                    <h2><a href="/single-product" class="product-link">New Balance Fresh Foam LAZR v1 Sport</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€18.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>The New Balance® Fresh Foam LAZR v1 Sport running shoe gives you total focus on the road with its precision-engineered design.</p>
                                                                        <p>Predecessor: None.</p>
                                                                        <p>Support Type: Neutral.</p>
                                                                        <p>Flat knit collar.</p>
                                                                        <p>Cushioning: Minimal feel with extreme flexibility.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>300 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-18.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-18.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="/single-product" class="product-link">Juicy Couture Solid Sleeve Puffer Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€18.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Stay toasty with this Juicy Couture™ Solid Sleeve Puffer Jacket!</p>
                                                                        <p>Stand collar.</p>
                                                                        <p>Long sleeves.</p>
                                                                        <p>100% polyester;</p>
                                                                        <p>Lining: 100% polyester;</p>
                                                                        <p>Filling: 100% polyester.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-23.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-22.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="/single-product" class="product-link">New Balance Fresh Foam Kaymin</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price">€18.90</li>
                                                                            <li class="current-price">€15.12</li>
                                                                            <li class="discount-price">-20%</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Increase your distance with the superior cushioning of the Fresh Foam Kaymin running shoe from New Balance®.</p>
                                                                        <p>Predecessor: None.</p>
                                                                        <p>Support Type: Neutral.</p>
                                                                        <p>Cushioning: High energizing cushioning.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>298 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="/single-product" class="product-link">Water and Wind Resistant Insulated Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€11.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Stay ready for a change in weather with the IZOD® Water and Wind Resistant Insulated Jacket.</p>
                                                                        <p>Water-resistant jacket keeps you warm and dry.</p>
                                                                        <p>Stand collar features an attached hood.</p>
                                                                        <p>Front-zip closure.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>291 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-16.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-17.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                                    <h2><a href="/single-product" class="product-link">Trans-Weight Hooded Wind and Water Resistant Shell</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star-half"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€11.90</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Keep the elements away and warmth priority number one in this Nautica® Trans-Weight Hooded Wind and Water Resistant Shell.</p>
                                                                        <p>Hooded collar with a high collar for maximum coverage.</p>
                                                                        <p>Long sleeves with banded collars.</p>
                                                                        <p>Zip front closure.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-14.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-14.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="/single-product" class="product-link">Madden by Steve Madden Cale 6</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price">€19.90</li>
                                                                            <li class="current-price">€10.12</li>
                                                                            <li class="discount-price">-15%</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>No one can deny your sleek style with these handsome Madden by Steve Madden® Cale 6 oxfords.</p>
                                                                        <p>Man-made upper features a plain toe.</p>
                                                                        <p>Lace-up closure.</p>
                                                                        <p>Man-made lining.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-22.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="/single-product" class="product-link">Calvin Klein Jeans Reflective Logo Full Zip</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€29.00</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Calvin Klein® Jeans hoodie with reflective logo detailing at the sleeves.</p>
                                                                        <p>Sweatshirt crafted in a soft-knit fabric for superior comfort.</p>
                                                                        <p>Drawstring hood.</p>
                                                                        <p>Long sleeves.</p>
                                                                        <p>Full-zip front.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>300 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-6.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-6.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="/single-product" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€29.00</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Break old records and make new goals in the New Balance® Arishi Sport v1.</p>
                                                                        <p>Predecessor: None.</p>
                                                                        <p>Support Type: Neutral.</p>
                                                                        <p>Cushioning: High energizing cushioning.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>899 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-3.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-4.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="/single-product" class="product-link">Brixton Patrol All Terrain Anorak Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€29.00</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Whether you're exploring the woods or the city, the Brixton™ Patrol All Terrain Anorak Jacket has got you covered.</p>
                                                                        <p>Camo jacket crafted from 4.5 oz nylon ripstop with two-way stretch, and a water-repellent coating.</p>
                                                                        <p>Drawstring hood.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>899 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-1.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-1.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                                    <h2><a href="/single-product" class="product-link">Juicy Couture Juicy Quilted Terry Track Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price">€35.90</li>
                                                                            <li class="current-price">€34.12</li>
                                                                            <li class="discount-price">-5%</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Score extra points when it comes to your sporty look with the Juicy Couture™ Juicy Quilted Terry Track Jacket.</p>
                                                                        <p>Soft terry construction in a quilted design.</p>
                                                                        <p>Front zipper closure.</p>
                                                                        <p>61% cotton, 39% polyester;</p>
                                                                        <p>Lining: 58% cotton, 42% polyester.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>1189 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-11.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-12.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                                                    <h2><a href="/single-product" class="product-link">Originals Kaval Windbreaker Winter Jacket</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price">€23.90</li>
                                                                            <li class="current-price">€21.51</li>
                                                                            <li class="discount-price">-10%</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker Jacket.</p>
                                                                        <p>Part of the Kaval Collection.</p>
                                                                        <p>Regular fit is eased, but not sloppy, and perfect for any activity.</p>
                                                                        <p>Plain-woven jacket specifically constructed for freedom of movement.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-10.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-10.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="/single-product" class="product-link">New Luxury Men's Slim Fit Shirt Short Sleeve...</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€29.00</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Break old records and make new goals in the New Balance® Arishi Sport v1.</p>
                                                                        <p>Predecessor: None.</p>
                                                                        <p>Support Type: Neutral.</p>
                                                                        <p>Cushioning: High energizing cushioning.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>397 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-4.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-4.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="/single-product" class="product-link">Brixton Patrol All Terrain Anorak Jacket 2</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price not-cut">€29.00</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Whether you're exploring the woods or the city, the Brixton™ Patrol All Terrain Anorak Jacket has got you covered.</p>
                                                                        <p>Camo jacket crafted from 4.5 oz nylon ripstop with two-way stretch, and a water-repellent coating.</p>
                                                                        <p>Drawstring hood.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>400 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap scroll-zoom">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="/single-product" class="thumbnail">
                                                                        <img class="first-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                                                        <img class="second-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                            <i class="ion-ios-search-strong"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-flag">
                                                                    <li class="new">New</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                                                    <h2><a href="/single-product" class="product-link">Juicy Couture Juicy Quilted Terry Track Jacket 2</a></h2>
                                                                    <div class="rating-product">
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                        <i class="ion-android-star"></i>
                                                                    </div>
                                                                    <div class="pricing-meta">
                                                                        <ul>
                                                                            <li class="old-price">€35.90</li>
                                                                            <li class="current-price">€34.11</li>
                                                                            <li class="discount-price">-5%</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-intro-info">
                                                                        <p>Score extra points when it comes to your sporty look with the Juicy Couture™ Juicy Quilted Terry Track Jacket.</p>
                                                                        <p>Soft terry construction in a quilted design.</p>
                                                                        <p>Front zipper closure.</p>
                                                                        <p>61% cotton, 39% polyester;</p>
                                                                        <p>Lining: 58% cotton, 42% polyester.</p>
                                                                    </div>
                                                                    <div class="in-stock">Availability: <span>199 In Stock</span></div>
                                                                </div>
                                                                <div class="add-to-link">
                                                                    <ul>
                                                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                                        <li>
                                                                            <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab Two End -->
                                </div>
                                <!-- Shop Tab Content End -->
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
                            <!-- Shop Bottom Area End -->
                        </div>
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

<!-- Mirrored from https://htmldemo.net/ecolife/ecolife/shop-3-column.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:20:29 GMT -->
</html>

@endverbatim
