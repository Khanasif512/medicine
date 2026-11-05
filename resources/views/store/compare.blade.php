@verbatim
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from https://htmldemo.net/ecolife/ecolife/compare.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:19:23 GMT -->
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
                    <li class="m-0">
                        <a href="/compare"><i class="ion-ios-shuffle-strong"></i>Compare (0)</a>
                    </li>
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
                                <li><a href="/compare">Compare Page</a></li>
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
                                <h1 class="breadcrumb-hrading">Compare Page</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="/">Home</a></li>
                                    <li>Compare</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->
            <!-- Compare area start -->
            <div class="compare-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <!-- Compare Table -->
                                <div class="compare-table table-responsive">
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="first-column">Product</td>
                                                <td class="product-image-title">
                                                    <a href="#" class="image"><img src="assets/images/product-image/electronic/10.jpg" alt="Compare Product" /></a>
                                                    <a href="#" class="category">Camera</a>
                                                    <a href="#" class="title">Zeon Zen 4 Pro</a>
                                                </td>
                                                <td class="product-image-title">
                                                    <a href="#" class="image"><img src="assets/images/product-image/electronic/9.jpg" alt="Compare Product" /></a>
                                                    <a href="#" class="category">Doren</a>
                                                    <a href="#" class="title">Aquet Doren D 420</a>
                                                </td>
                                                <td class="product-image-title">
                                                    <a href="#" class="image"><img src="assets/images/product-image/electronic/4.jpg" alt="Compare Product" /></a>
                                                    <a href="#" class="category">Games</a>
                                                    <a href="#" class="title">Game Station X 22</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Description</td>
                                                <td class="pro-desc">
                                                    <p>Samsome Note Book Pro 5 is the best Laptop on this budget. You can satisfy after usign this laptop. It’s performance is awesome. Designer’s love it.</p>
                                                </td>
                                                <td class="pro-desc">
                                                    <p>Samsome Note Book Pro 5 is the best Laptop on this budget. You can satisfy after usign this laptop. It’s performance is awesome. Designer’s love it.</p>
                                                </td>
                                                <td class="pro-desc">
                                                    <p>Samsome Note Book Pro 5 is the best Laptop on this budget. You can satisfy after usign this laptop. It’s performance is awesome. Designer’s love it.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Price</td>
                                                <td class="pro-price">$295</td>
                                                <td class="pro-price">$275</td>
                                                <td class="pro-price">$395</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Color</td>
                                                <td class="pro-color">Black</td>
                                                <td class="pro-color">Black</td>
                                                <td class="pro-color">Black</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                                <td class="pro-stock">In Stock</td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Add to cart</td>
                                                <td class="pro-addtocart">
                                                    <a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a>
                                                </td>
                                                <td class="pro-addtocart">
                                                    <a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a>
                                                </td>
                                                <td class="pro-addtocart">
                                                    <a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Delete</td>
                                                <td class="pro-remove">
                                                    <button><i class="ion-trash-b"></i></button>
                                                </td>
                                                <td class="pro-remove">
                                                    <button><i class="ion-trash-b"></i></button>
                                                </td>
                                                <td class="pro-remove">
                                                    <button><i class="ion-trash-b"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="first-column">Rating</td>
                                                <td class="pro-ratting">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </td>
                                                <td class="pro-ratting">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star-outline"></i>
                                                </td>
                                                <td class="pro-ratting">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star-half"></i>
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
            <!-- Compare area end -->
            <!-- Footer Area start -->
            @endverbatim
@include('Layout.Footers.footer')
@verbatim
            <!--  Footer Area End -->
        </div>

        @endverbatim
@include('Layout.scripts.scripts')
@verbatim

<!-- Mirrored from https://htmldemo.net/ecolife/ecolife/compare.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:19:23 GMT -->
</html>

@endverbatim
