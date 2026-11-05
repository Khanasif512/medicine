@verbatim
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from https://htmldemo.net/ecolife/ecolife/single-product-group.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:20:34 GMT -->
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
                                <h1 class="breadcrumb-hrading">Single Product Page</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="/">Home</a></li>
                                    <li>Single product Group</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->
            <!-- Shop details Area start -->
            <section class="product-details-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="product-details-img product-details-tab">
                                <div class="zoompro-wrap zoompro-2">
                                    <div class="zoompro-border zoompro-span">
                                        <img class="zoompro" src="assets/images/product-image/organic/display/1.jpg" data-zoom-image="assets/images/product-image/organic/zoom/1.jpg" alt="" />
                                    </div>
                                </div>
                                <div id="gallery" class="product-dec-slider-2">
                                    <a class="active" data-image="assets/images/product-image/organic/display/1.jpg" data-zoom-image="assets/images/product-image/organic/zoom/1.jpg">
                                        <img src="assets/images/product-image/organic/product-11.jpg" alt="" />
                                    </a>
                                    <a data-image="assets/images/product-image/organic/display/2.jpg" data-zoom-image="assets/images/product-image/organic/zoom/2.jpg">
                                        <img src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                    </a>
                                    <a data-image="assets/images/product-image/organic/display/3.jpg" data-zoom-image="assets/images/product-image/organic/zoom/3.jpg">
                                        <img src="assets/images/product-image/organic/product-20.jpg" alt="" />
                                    </a>
                                    <a data-image="assets/images/product-image/organic/display/4.jpg" data-zoom-image="assets/images/product-image/organic/zoom/4.jpg">
                                        <img src="assets/images/product-image/organic/product-19.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="product-details-content">
                                <h2>Originals Kaval Windbr</h2>
                                
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€18.90</li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style</li>
                                    </ul>
                                </div>
                                <div class="product-details-table table-responsive pro-details-quality">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="quantity d-flex">
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><a href="#">Vestibulum suscipit</a></td>
                                                <td><span class="amount">€165.00</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="quantity d-flex">
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><a href="#">Ullamco laboris</a></td>
                                                <td><span class="amount">€165.00</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="pro-details-size-color d-flex">
                                    
                                    <div class="product-size">
                                        <span>Size</span>
                                        <select>
                                            <option value="1">S</option>
                                            <option value="2">M</option>
                                            <option value="3">L</option>
                                            <option value="4">XL</option>
                                        </select>
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
                                
                                <div class="pro-details-policy">
                                    <ul>
                                        <li><img src="assets/images/icons/policy.png" alt="" /><span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                                        <li><img src="assets/images/icons/policy-2.png" alt="" /><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                                        <li><img src="assets/images/icons/policy-3.png" alt="" /><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Shop details Area End -->
            <!-- product details description area start -->
            <div class="description-review-area mb-60px">
                <div class="container">
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <a data-bs-toggle="tab" href="#des-details1">Description</a>
                            <a class="active" data-bs-toggle="tab" href="#des-details2">Product Details</a>
                            <a data-bs-toggle="tab" href="#des-details3">Reviews (2)</a>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details2" class="tab-pane active">
                                <div class="product-anotherinfo-wrapper">
                                    <ul>
                                        <li><span>Weight</span> 400 g</li>
                                        <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                                        <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                        <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="des-details1" class="tab-pane">
                                <div class="product-description-wrapper">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                    <p>
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    </p>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="row">
                                    <div class="col-lg-7">
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
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
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
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
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
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="ratting-form-wrapper pl-50">
                                            <h3>Add a Review</h3>
                                            <div class="ratting-form">
                                                <form action="#">
                                                    <div class="star-box">
                                                        <span>Your rating:</span>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="Name" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="Email" type="email" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="rating-form-style form-submit">
                                                                <textarea name="Your Review" placeholder="Message"></textarea>
                                                                <input type="submit" value="Submit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product details description area end -->
            <!-- Recent Add Product Area Start -->
            <section class="recent-add-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2>You Might Also Like</h2>
                                <p>Add Related products to weekly line up</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- Recent Product slider Start -->
                    <div class="recent-product-slider owl-carousel owl-nav-style">
                        <!-- Single Item -->
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
                                <h2><a href="/single-product" class="product-link">Originals Kaval Windbr...</a></h2>
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
                        <!-- Single Item -->
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
                                <h2><a href="/single-product" class="product-link">Juicy Couture Juicy Quil...</a></h2>
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
                        <!-- Single Item -->
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
                                <h2><a href="/single-product" class="product-link">Brixton Patrol All Terrai...</a></h2>
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
                        <!-- Single Item -->
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
                                <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                <h2><a href="/single-product" class="product-link">New Balance Arishi Spo...</a></h2>
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
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="/single-product" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-22.jpg" alt="" />
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
                                <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                <h2><a href="/single-product" class="product-link">Calvin Klein Jeans Refle...</a></h2>
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
                        <!-- Single Item -->
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
                                <h2><a href="/single-product" class="product-link">Madden by Steve Madd...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€12.90</li>
                                        <li class="current-price">€10.21</li>
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
                    <!-- Recent product slider end -->
                </div>
            </section>
            <!-- Recent product area end -->
            <!-- Recent Add Product Area Start -->
            <section class="recent-add-area mt-30 mb-30px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2>In The Same Category</h2>
                                <p>16 other products in the same category:</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- Recent Product slider Start -->
                    <div class="recent-product-slider owl-carousel owl-nav-style">
                        <!-- Single Item -->
                        <article class="list-product">
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
                            <div class="product-decs">
                                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                <h2><a href="/single-product" class="product-link">Originals Kaval Windbr...</a></h2>
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
                        <!-- Single Item -->
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
                                <h2><a href="/single-product" class="product-link">Juicy Couture Juicy Quil...</a></h2>
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
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="/single-product" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-22.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-23.jpg" alt="" />
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
                                <h2><a href="/single-product" class="product-link">Brixton Patrol All Terrai...</a></h2>
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
                        <!-- Single Item -->
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
                                <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                <h2><a href="/single-product" class="product-link">New Balance Arishi Spo...</a></h2>
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
                        <!-- Single Item -->
                        <article class="list-product">
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
                            <div class="product-decs">
                                <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                                <h2><a href="/single-product" class="product-link">Calvin Klein Jeans Refle...</a></h2>
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
                        <!-- Single Item -->
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
                                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                                <h2><a href="/single-product" class="product-link">Madden by Steve Madd...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€12.90</li>
                                        <li class="current-price">€10.21</li>
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
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="/single-product" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-17.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-16.jpg" alt="" />
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
                                <h2><a href="/single-product" class="product-link">Trans-Weight Hooded...</a></h2>
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
                        <!-- Single Item -->
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
                                <h2><a href="/single-product" class="product-link">Water and Wind Resist...</a></h2>
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
                        <!-- Single Item -->
                    </div>
                    <!-- Recent product slider end -->
                </div>
            </section>
            <!-- Recent product area end -->
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
                                    
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€18.90</li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                    
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

<!-- Mirrored from https://htmldemo.net/ecolife/ecolife/single-product-group.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:20:34 GMT -->
</html>

@endverbatim
