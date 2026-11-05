@verbatim
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from https://htmldemo.net/ecolife/ecolife/wishlist.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:19:23 GMT -->
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
                                <h1 class="breadcrumb-hrading">Wishlist Page</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="/">Home</a></li>
                                    <li>Wishlist</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->
            <!-- cart area start -->
            <div class="cart-main-area mtb-60px">
                <div class="container">
                    <h3 class="cart-page-title">Your cart items</h3>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <form action="#">
                                <div class="table-content table-responsive cart-table-content">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Until Price</th>
                                                <th>Qty</th>
                                                <th>Subtotal</th>
                                                <th>Add To Cart</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="assets/images/product-image/mini-cart/1.jpg" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a href="#">Product Name</a></td>
                                                <td class="product-price-cart"><span class="amount">$60.00</span></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">$70.00</td>
                                                <td class="product-wishlist-cart">
                                                    <a href="#">add to cart</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="assets/images/product-image/mini-cart/2.jpg" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a href="#">Product Name</a></td>
                                                <td class="product-price-cart"><span class="amount">$50.00</span></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">$80.00</td>
                                                <td class="product-wishlist-cart">
                                                    <a href="#">add to cart</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="assets/images/product-image/mini-cart/3.jpg" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a href="#">Product Name</a></td>
                                                <td class="product-price-cart"><span class="amount">$70.00</span></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">$90.00</td>
                                                <td class="product-wishlist-cart">
                                                    <a href="#">add to cart</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart area end -->
            <!-- Footer Area start -->
            @endverbatim
@include('Layout.Footers.footer')
@verbatim
            <!--  Footer Area End -->
        </div>

        @endverbatim
@include('Layout.scripts.scripts')
@verbatim

<!-- Mirrored from https://htmldemo.net/ecolife/ecolife/wishlist.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:19:23 GMT -->
</html>

@endverbatim
