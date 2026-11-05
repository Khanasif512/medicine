@verbatim
<!doctype html>
<html lang="en">
<!-- Mirrored from https://htmldemo.net/ecolife/ecolife/index.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:18:44 GMT -->
@endverbatim
@include('Layout.heads.head-home')
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
    <div
      id="offcanvas-cart"
      class="offcanvas offcanvas-cart hover-style-default">
      <div class="inner">
        <div class="head">
          <span class="title">Cart</span>
          <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
          <ul class="minicart-product-list">
            <li>
              <a href="/single-product" class="image"><img
                  src="assets/images/product-image/mini-cart/1.jpg"
                  alt="Cart product Image" /></a>
              <div class="content">
                <a href="/single-product" class="title">Juicy Couture...</a>
                <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                <a href="#" class="remove">×</a>
              </div>
            </li>
            <li>
              <a href="/single-product" class="image"><img
                  src="assets/images/product-image/mini-cart/2.jpg"
                  alt="Cart product Image" /></a>
              <div class="content">
                <a href="/single-product" class="title">Water and Wind...</a>
                <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                <a href="#" class="remove">×</a>
              </div>
            </li>
            <li>
              <a href="/single-product" class="image"><img
                  src="assets/images/product-image/mini-cart/3.jpg"
                  alt="Cart product Image" /></a>
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
    <div
      id="offcanvas-mobile-menu"
      class="offcanvas offcanvas-mobile-menu hover-style-default">
      <button class="offcanvas-close"></button>
      <!-- contact Info -->
      <div
        class="contact-info d-flex align-items-center justify-content-center color-black py-3">
        <img
          class="me-3"
          src="assets/images/icons/mobile-contact.png"
          alt="" />
        <p>Call us:</p>
        <a class="color-black" href="tel:(+8801818453778)">(+8801818453778)</a>
      </div>
      <!-- offcanvas compare & wishlist -->
      <div class="user-panel">
        <ul class="d-flex justify-content-between">
          
          <li>
            <a href="/wishlist"><i class="ion-android-favorite-outline"></i>Wishlist (0)</a>
          </li>
        </ul>
      </div>
      <div class="menu-close">menu</div>
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
            <li>
              <a href="#"><span class="menu-text">Shop</span></a>
              <ul class="sub-menu">
                <li>
                  <a href="#"><span class="menu-text">Shop Page</span></a>
                  <ul class="sub-menu">
                    <li>
                      <a href="/shop-3-column">Shop Grid 3 Column</a>
                    </li>
                    <li>
                      <a href="/shop-4-column">Shop Grid 4 Column</a>
                    </li>
                    <li>
                      <a href="/shop-left-sidebar">Shop Grid Left Sidebar</a>
                    </li>
                    <li>
                      <a href="/shop-right-sidebar">Shop Grid Right Sidebar</a>
                    </li>
                    <li><a href="/shop-list">Shop List</a></li>
                    <li>
                      <a href="/shop-list-left-sidebar">Shop List Left Sidebar</a>
                    </li>
                    <li>
                      <a href="/shop-list-right-sidebar">Shop List Right Sidebar</a>
                    </li>
                    <li><a href="/shop-filter">Shop Filter Page</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"><span class="menu-text">product Details Page</span></a>
                  <ul class="sub-menu">
                    <li><a href="/single-product">Shop Single</a></li>
                    <li>
                      <a href="/single-product-variable">Shop Variable</a>
                    </li>
                    <li>
                      <a href="/single-product-affiliate">Shop Affiliate</a>
                    </li>
                    <li>
                      <a href="/single-product-group">Shop Group</a>
                    </li>
                    <li>
                      <a href="/single-product-tabstyle-2">Shop Tab 2</a>
                    </li>
                    <li>
                      <a href="/single-product-tabstyle-3">Shop Tab 3</a>
                    </li>
                    <li>
                      <a href="/single-product-slider">Shop Slider</a>
                    </li>
                    <li>
                      <a href="/single-product-gallery-left">Shop Gallery Left</a>
                    </li>
                    <li>
                      <a href="/single-product-gallery-right">Shop Gallery Right</a>
                    </li>
                    <li>
                      <a href="/single-product-sticky-left">Shop Sticky Left</a>
                    </li>
                    <li>
                      <a href="/single-product-sticky-right">Shop Sticky Right</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><span class="menu-text">Blog</span></a>
              <ul class="sub-menu">
                <li>
                  <a href="/blog-grid-left-sidebar">Grid Left Sidebar</a>
                </li>
                <li>
                  <a href="/blog-grid-right-sidebar">Grid Right Sidebar</a>
                </li>
                <li>
                  <a href="/blog-list-left-sidebar">List Left Sidebar</a>
                </li>
                <li>
                  <a href="/blog-list-right-sidebar">List Right Sidebar</a>
                </li>
                <li>
                  <a href="/blog-single-left-sidebar">Single Left Sidebar</a>
                </li>
                <li>
                  <a href="/blog-single-right-sidebar">Single Right Sidbar</a>
                </li>
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
    <!-- Medical Hero Start -->
    <section class="slider-area hero-showcase" aria-label="Featured medical products">
      <div class="hero-image-slider" aria-hidden="true">
        <img class="hero-image-slide" src="assets/images/hero/Essential Medical Care Essentials.png" alt="" />
        <img class="hero-image-slide" src="assets/images/hero/Essential Medical Care Essentials.png" alt="" />
      </div>
      <div class="container-fluid hero-showcase-wrap">
        <div class="row g-3 align-items-stretch">
          <aside class="col-12 col-md-3 offset-md-9">
            <div class="hero-benefits">
              <div class="single-static">
                <img src="assets/images/icons/static-icons-1.png" alt="" class="img-responsive" />
                <div class="single-static-meta">
                  <h4>Free Shipping</h4>
                  <p>On orders over $75</p>
                </div>
              </div>
              <div class="single-static">
                <img src="assets/images/icons/static-icons-2.png" alt="" class="img-responsive" />
                <div class="single-static-meta">
                  <h4>Free Returns</h4>
                  <p>Within 9 days</p>
                </div>
              </div>
              <div class="single-static">
                <img src="assets/images/icons/static-icons-3.png" alt="" class="img-responsive" />
                <div class="single-static-meta">
                  <h4>Secure Payments</h4>
                  <p>Your payments are safe</p>
                </div>
              </div>
              <div class="single-static">
                <img src="assets/images/icons/static-icons-4.png" alt="" class="img-responsive" />
                <div class="single-static-meta">
                  <h4>Support 24/7</h4>
                  <p>We are here to help</p>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>
    <!-- Medical Hero End -->
    <!-- Best Sells Area Start -->
    <section class="best-sells-area mb-30px">
      <div class="container">
        <!-- Section Title Start -->
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h2>Best Sellers</h2>
              <p>Add bestselling products to weekly line up</p>
            </div>
          </div>
        </div>
        <!-- Section Title End -->
        <!-- Best Sell Slider Carousel Start -->
        <div class="best-sell-slider owl-carousel owl-nav-style">
          <!-- Single Item -->
          <article class="list-product">
            <div class="img-block">
              <a href="/single-product" class="thumbnail">
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-1.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-1.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
              <h2>
                <a href="/single-product" class="product-link">Juicy Couture Juicy Quilted</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-2.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-15.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
              <h2>
                <a href="/single-product" class="product-link">New Balance Fresh Foam Ka..</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-3.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-4.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
              <h2>
                <a href="/single-product" class="product-link">Brixton Patrol All Terrain</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-5.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-5.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
              <h2>
                <a href="/single-product" class="product-link">Juicy Couture Tricot Logo</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-6.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-6.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
              <h2>
                <a href="/single-product" class="product-link">New Balance Arishi Sport v1</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-7.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-8.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNAR</span></a>
              <h2>
                <a href="/single-product" class="product-link">Fila Locker Room Varsity Jacket</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-9.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-9.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
              <h2>
                <a href="/single-product" class="product-link">Water and Wind Resistant Ins..</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-10.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-10.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
              <h2>
                <a href="/single-product" class="product-link">New Luxury Men's Slim Fit Shi...</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-11.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-12.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
              <h2>
                <a href="/single-product" class="product-link">Originals Kaval Windbreaker...</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-13.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-3.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
              <h2>
                <a href="/single-product" class="product-link">Brixton Patrol All Terrain Anor...</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-14.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-14.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
              <h2>
                <a href="/single-product" class="product-link">Madden by Steve Madden Cale 6</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-15.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-2.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
              <h2>
                <a href="/single-product" class="product-link">Juicy Couture Juicy Quilted Ter..</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
                <li>
                  <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                </li>
                
              </ul>
            </div>
          </article>
          <!-- Single Item -->
        </div>
        <!-- Best Sells Carousel End -->
      </div>
    </section>
    <!-- Best Sells Slider End -->

    <!-- Category Area Start -->
    <section class="categorie-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Section Title -->
            <div class="section-title mt-res-sx-30px mt-res-md-30px">
              <h2>Popular Categories</h2>
              <p>Add Popular Categories to weekly line up</p>
            </div>
            <!-- Section Title -->
          </div>
        </div>
        <!-- Category Slider Start -->
        <div class="category-slider owl-carousel owl-nav-style">
          <div class="category-item">
            <div class="category-list">
              <div class="category-thumb">
                <a href="/shop-4-column"><img src="assets/images/product-image/medical/2.jpg" alt="Vitamins and supplements" /></a>
              </div>
              <div class="desc-listcategoreis">
                <div class="name_categories"><h4>Vitamins &amp; Supplements</h4></div>
                <a href="/shop-4-column">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="category-item">
            <div class="category-list">
              <div class="category-thumb">
                <a href="/shop-4-column"><img src="assets/images/product-image/medical/3.jpg" alt="Protein and nutrition" /></a>
              </div>
              <div class="desc-listcategoreis">
                <div class="name_categories"><h4>Protein &amp; Nutrition</h4></div>
                <a href="/shop-4-column">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="category-item">
            <div class="category-list">
              <div class="category-thumb">
                <a href="/shop-4-column"><img src="assets/images/product-image/medical/4.jpg" alt="Natural oils" /></a>
              </div>
              <div class="desc-listcategoreis">
                <div class="name_categories"><h4>Natural Oils</h4></div>
                <a href="/shop-4-column">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="category-item">
            <div class="category-list">
              <div class="category-thumb">
                <a href="/shop-4-column"><img src="assets/images/product-image/medical/5.jpg" alt="Essential nutrients" /></a>
              </div>
              <div class="desc-listcategoreis">
                <div class="name_categories"><h4>Essential Nutrients</h4></div>
                <a href="/shop-4-column">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="category-item">
            <div class="category-list">
              <div class="category-thumb">
                <a href="/shop-4-column"><img src="assets/images/product-image/medical/6.jpg" alt="Digestive health" /></a>
              </div>
              <div class="desc-listcategoreis">
                <div class="name_categories"><h4>Digestive Health</h4></div>
                <a href="/shop-4-column">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="category-item">
            <div class="category-list">
              <div class="category-thumb">
                <a href="/shop-4-column"><img src="assets/images/product-image/medical/7.jpg" alt="Everyday wellness" /></a>
              </div>
              <div class="desc-listcategoreis">
                <div class="name_categories"><h4>Everyday Wellness</h4></div>
                <a href="/shop-4-column">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="category-item">
            <div class="category-list">
              <div class="category-thumb">
                <a href="/shop-4-column"><img src="assets/images/product-image/medical/10.jpg" alt="Masks and first aid" /></a>
              </div>
              <div class="desc-listcategoreis">
                <div class="name_categories"><h4>Masks &amp; First Aid</h4></div>
                <a href="/shop-4-column">Shop Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Category Area End  -->
    <!-- Hot deal area Start -->
    <section class="hot-deal-area">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4">
            <div class="row">
              <div class="col-md-12">
                <!-- Section Title -->
                <div class="section-title">
                  <h2>Hot Deals</h2>
                  <p>Add hot products to weekly line up</p>
                </div>
                <!-- Section Title End-->
              </div>
            </div>
            <!-- Hot Deal Slider Start -->
            <div class="hot-deal owl-carousel owl-nav-style">
              <!--  Single item -->
              <article class="list-product">
                <div class="img-block">
                  <a href="/single-product" class="thumbnail">
                    <img
                      class="first-img"
                      src="assets/images/product-image/organic/product-16.jpg"
                      alt="" />
                    <img
                      class="second-img"
                      src="assets/images/product-image/organic/product-16.jpg"
                      alt="" />
                  </a>
                  <div class="quick-view">
                    <a
                      class="quick_view"
                      href="#"
                      data-link-action="quickview"
                      title="Quick view"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal">
                      <i class="ion-ios-search-strong"></i>
                    </a>
                  </div>
                </div>
                <ul class="product-flag">
                  <li class="new">New</li>
                </ul>
                <div class="product-decs">
                  <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                  <h2>
                    <a href="/single-product" class="product-link">Originals Kaval Windbreaker Winter Jacket 2</a>
                  </h2>
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
                  <div class="add-to-link">
                    <ul>
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
                <div class="in-stock">
                  Availability: <span>300 In Stock</span>
                </div>

                <div class="clockdiv">
                  <div class="title_countdown">Hurry Up! Offers ends in:</div>
                  <div data-countdown="2021/12/31"></div>
                </div>
              </article>
              <!--  Single item -->
              <article class="list-product">
                <div class="img-block">
                  <a href="/single-product" class="thumbnail">
                    <img
                      class="first-img"
                      src="assets/images/product-image/organic/product-11.jpg"
                      alt="" />
                    <img
                      class="second-img"
                      src="assets/images/product-image/organic/product-12.jpg"
                      alt="" />
                  </a>
                  <div class="quick-view">
                    <a
                      class="quick_view"
                      href="#"
                      data-link-action="quickview"
                      title="Quick view"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal">
                      <i class="ion-ios-search-strong"></i>
                    </a>
                  </div>
                </div>
                <ul class="product-flag">
                  <li class="new">New</li>
                </ul>
                <div class="product-decs">
                  <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                  <h2>
                    <a href="/single-product" class="product-link">Originals Kaval Windbreaker Winter Jacket</a>
                  </h2>
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
                  <div class="add-to-link">
                    <ul>
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
                <div class="in-stock">
                  Availability: <span>300 In Stock</span>
                </div>

                <div class="clockdiv">
                  <div class="title_countdown">Hurry Up! Offers ends in:</div>
                  <div data-countdown="2021/12/31"></div>
                </div>
              </article>
              <!--  Single item -->
              <article class="list-product">
                <div class="img-block">
                  <a href="/single-product" class="thumbnail">
                    <img
                      class="first-img"
                      src="assets/images/product-image/organic/product-15.jpg"
                      alt="" />
                    <img
                      class="second-img"
                      src="assets/images/product-image/organic/product-2.jpg"
                      alt="" />
                  </a>
                  <div class="quick-view">
                    <a
                      class="quick_view"
                      href="#"
                      data-link-action="quickview"
                      title="Quick view"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal">
                      <i class="ion-ios-search-strong"></i>
                    </a>
                  </div>
                </div>
                <ul class="product-flag">
                  <li class="new">New</li>
                </ul>
                <div class="product-decs">
                  <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                  <h2>
                    <a href="/single-product" class="product-link">New Balance Fresh Foam Kaymin</a>
                  </h2>
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
                  <div class="add-to-link">
                    <ul>
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
                <div class="in-stock">
                  Availability: <span>299 In Stock</span>
                </div>

                <div class="clockdiv">
                  <div class="title_countdown">Hurry Up! Offers ends in:</div>
                  <div data-countdown="2021/12/31"></div>
                </div>
              </article>
              <!--  Single item -->
              <article class="list-product">
                <div class="img-block">
                  <a href="/single-product" class="thumbnail">
                    <img
                      class="first-img"
                      src="assets/images/product-image/organic/product-14.jpg"
                      alt="" />
                    <img
                      class="second-img"
                      src="assets/images/product-image/organic/product-14.jpg"
                      alt="" />
                  </a>
                  <div class="quick-view">
                    <a
                      class="quick_view"
                      href="#"
                      data-link-action="quickview"
                      title="Quick view"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal">
                      <i class="ion-ios-search-strong"></i>
                    </a>
                  </div>
                </div>
                <ul class="product-flag">
                  <li class="new">New</li>
                </ul>
                <div class="product-decs">
                  <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                  <h2>
                    <a href="/single-product" class="product-link">Madden by Steve Madden Cale 6</a>
                  </h2>
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
                  <div class="add-to-link">
                    <ul>
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
                <div class="in-stock">
                  Availability: <span>299 In Stock</span>
                </div>

                <div class="clockdiv">
                  <div class="title_countdown">Hurry Up! Offers ends in:</div>
                  <div data-countdown="2021/12/31"></div>
                </div>
              </article>
              <!--  Single item -->
            </div>
            <!-- Hot Deal Slider End -->
          </div>
          <!-- New Arrivals Area Start -->
          <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
            <div class="row">
              <div class="col-md-12">
                <!-- Section Title -->
                <div class="section-title ml-0px mt-res-sx-30px">
                  <h2>New Arrivals</h2>
                  <p>Add new products to weekly line up</p>
                </div>
                <!-- Section Title -->
              </div>
            </div>
            <!-- New Product Slider Start -->
            <div class="new-product-slider owl-carousel owl-nav-style">
              <!-- Product Single Item -->
              <div class="product-inner-item">
                <article class="list-product mb-30px">
                  <div class="img-block">
                    <a href="/single-product" class="thumbnail">
                      <img
                        class="first-img"
                        src="assets/images/product-image/organic/product-16.jpg"
                        alt="" />
                      <img
                        class="second-img"
                        src="assets/images/product-image/organic/product-16.jpg"
                        alt="" />
                    </a>
                    <div class="quick-view">
                      <a
                        class="quick_view"
                        href="#"
                        data-link-action="quickview"
                        title="Quick view"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="ion-ios-search-strong"></i>
                      </a>
                    </div>
                  </div>
                  <ul class="product-flag">
                    <li class="new">New</li>
                  </ul>
                  <div class="product-decs">
                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                    <h2>
                      <a href="/single-product" class="product-link">Originals Kaval Windbr...</a>
                    </h2>
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
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </article>
                <article class="list-product">
                  <div class="img-block">
                    <a href="/single-product" class="thumbnail">
                      <img
                        class="first-img"
                        src="assets/images/product-image/organic/product-15.jpg"
                        alt="" />
                      <img
                        class="second-img"
                        src="assets/images/product-image/organic/product-2.jpg"
                        alt="" />
                    </a>
                    <div class="quick-view">
                      <a
                        class="quick_view"
                        href="#"
                        data-link-action="quickview"
                        title="Quick view"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="ion-ios-search-strong"></i>
                      </a>
                    </div>
                  </div>
                  <ul class="product-flag">
                    <li class="new">New</li>
                  </ul>
                  <div class="product-decs">
                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                    <h2>
                      <a href="/single-product" class="product-link">Juicy Couture Juicy Quil...</a>
                    </h2>
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
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </article>
              </div>
              <!-- Product Single Item -->
              <div class="product-inner-item">
                <article class="list-product mb-30px">
                  <div class="img-block">
                    <a href="/single-product" class="thumbnail">
                      <img
                        class="first-img"
                        src="assets/images/product-image/organic/product-4.jpg"
                        alt="" />
                      <img
                        class="second-img"
                        src="assets/images/product-image/organic/product-13.jpg"
                        alt="" />
                    </a>
                    <div class="quick-view">
                      <a
                        class="quick_view"
                        href="#"
                        data-link-action="quickview"
                        title="Quick view"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="ion-ios-search-strong"></i>
                      </a>
                    </div>
                  </div>
                  <ul class="product-flag">
                    <li class="new">New</li>
                  </ul>
                  <div class="product-decs">
                    <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                    <h2>
                      <a href="/single-product" class="product-link">Brixton Patrol All Terr...</a>
                    </h2>
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
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </article>
                <article class="list-product">
                  <div class="img-block">
                    <a href="/single-product" class="thumbnail">
                      <img
                        class="first-img"
                        src="assets/images/product-image/organic/product-10.jpg"
                        alt="" />
                      <img
                        class="second-img"
                        src="assets/images/product-image/organic/product-10.jpg"
                        alt="" />
                    </a>
                    <div class="quick-view">
                      <a
                        class="quick_view"
                        href="#"
                        data-link-action="quickview"
                        title="Quick view"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="ion-ios-search-strong"></i>
                      </a>
                    </div>
                  </div>
                  <ul class="product-flag">
                    <li class="new">New</li>
                  </ul>
                  <div class="product-decs">
                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                    <h2>
                      <a href="/single-product" class="product-link">New Luxury Men's Slim...</a>
                    </h2>
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
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </article>
              </div>
              <!-- Product Single Item -->
              <div class="product-inner-item">
                <article class="list-product mb-30px">
                  <div class="img-block">
                    <a href="/single-product" class="thumbnail">
                      <img
                        class="first-img"
                        src="assets/images/product-image/organic/product-11.jpg"
                        alt="" />
                      <img
                        class="second-img"
                        src="assets/images/product-image/organic/product-12.jpg"
                        alt="" />
                    </a>
                    <div class="quick-view">
                      <a
                        class="quick_view"
                        href="#"
                        data-link-action="quickview"
                        title="Quick view"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="ion-ios-search-strong"></i>
                      </a>
                    </div>
                  </div>
                  <ul class="product-flag">
                    <li class="new">New</li>
                  </ul>
                  <div class="product-decs">
                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                    <h2>
                      <a href="/single-product" class="product-link">Originals Kaval Windbr...</a>
                    </h2>
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
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </article>
                <article class="list-product">
                  <div class="img-block">
                    <a href="/single-product" class="thumbnail">
                      <img
                        class="first-img"
                        src="assets/images/product-image/organic/product-1.jpg"
                        alt="" />
                      <img
                        class="second-img"
                        src="assets/images/product-image/organic/product-1.jpg"
                        alt="" />
                    </a>
                    <div class="quick-view">
                      <a
                        class="quick_view"
                        href="#"
                        data-link-action="quickview"
                        title="Quick view"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="ion-ios-search-strong"></i>
                      </a>
                    </div>
                  </div>
                  <ul class="product-flag">
                    <li class="new">New</li>
                  </ul>
                  <div class="product-decs">
                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                    <h2>
                      <a href="/single-product" class="product-link">Juicy Couture Juicy Quil...</a>
                    </h2>
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
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </article>
              </div>
              <!-- Product Single Item -->
              <div class="product-inner-item">
                <article class="list-product mb-30px">
                  <div class="img-block">
                    <a href="/single-product" class="thumbnail">
                      <img
                        class="first-img"
                        src="assets/images/product-image/organic/product-14.jpg"
                        alt="" />
                      <img
                        class="second-img"
                        src="assets/images/product-image/organic/product-14.jpg"
                        alt="" />
                    </a>
                    <div class="quick-view">
                      <a
                        class="quick_view"
                        href="#"
                        data-link-action="quickview"
                        title="Quick view"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="ion-ios-search-strong"></i>
                      </a>
                    </div>
                  </div>
                  <ul class="product-flag">
                    <li class="new">New</li>
                  </ul>
                  <div class="product-decs">
                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                    <h2>
                      <a href="/single-product" class="product-link">Madden by Steve Madd...</a>
                    </h2>
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
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </article>
                <article class="list-product">
                  <div class="img-block">
                    <a href="/single-product" class="thumbnail">
                      <img
                        class="first-img"
                        src="assets/images/product-image/organic/product-17.jpg"
                        alt="" />
                      <img
                        class="second-img"
                        src="assets/images/product-image/organic/product-16.jpg"
                        alt="" />
                    </a>
                    <div class="quick-view">
                      <a
                        class="quick_view"
                        href="#"
                        data-link-action="quickview"
                        title="Quick view"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="ion-ios-search-strong"></i>
                      </a>
                    </div>
                  </div>
                  <ul class="product-flag">
                    <li class="new">New</li>
                  </ul>
                  <div class="product-decs">
                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                    <h2>
                      <a href="/single-product" class="product-link">Trans-Weight Hooded...</a>
                    </h2>
                    <div class="rating-product">
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                      <i class="ion-android-star"></i>
                    </div>
                    <div class="pricing-meta">
                      <ul>
                        <li class="old-price not-cut">€19.90</li>
                      </ul>
                    </div>
                  </div>
                  <div class="add-to-link">
                    <ul>
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </article>
              </div>
              <!-- Product Single Item -->
              <div class="product-inner-item">
                <article class="list-product mb-30px">
                  <div class="img-block">
                    <a href="/single-product" class="thumbnail">
                      <img
                        class="first-img"
                        src="assets/images/product-image/organic/product-9.jpg"
                        alt="" />
                      <img
                        class="second-img"
                        src="assets/images/product-image/organic/product-9.jpg"
                        alt="" />
                    </a>
                    <div class="quick-view">
                      <a
                        class="quick_view"
                        href="#"
                        data-link-action="quickview"
                        title="Quick view"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="ion-ios-search-strong"></i>
                      </a>
                    </div>
                  </div>
                  <ul class="product-flag">
                    <li class="new">New</li>
                  </ul>
                  <div class="product-decs">
                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                    <h2>
                      <a href="/single-product" class="product-link">Water and Wind Resist...</a>
                    </h2>
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
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </article>
                <article class="list-product">
                  <div class="img-block">
                    <a href="/single-product" class="thumbnail">
                      <img
                        class="first-img"
                        src="assets/images/product-image/organic/product-2.jpg"
                        alt="" />
                      <img
                        class="second-img"
                        src="assets/images/product-image/organic/product-15.jpg"
                        alt="" />
                    </a>
                    <div class="quick-view">
                      <a
                        class="quick_view"
                        href="#"
                        data-link-action="quickview"
                        title="Quick view"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="ion-ios-search-strong"></i>
                      </a>
                    </div>
                  </div>
                  <ul class="product-flag">
                    <li class="new">New</li>
                  </ul>
                  <div class="product-decs">
                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                    <h2>
                      <a href="/single-product" class="product-link">New Balance Fresh Foa...</a>
                    </h2>
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
                        <li class="current-price">€15.11</li>
                        <li class="discount-price">-20%</li>
                      </ul>
                    </div>
                  </div>
                  <div class="add-to-link">
                    <ul>
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </article>
              </div>
              <!-- Product Single Item -->
              <div class="product-inner-item">
                <article class="list-product mb-30px">
                  <div class="img-block">
                    <a href="/single-product" class="thumbnail">
                      <img
                        class="first-img"
                        src="assets/images/product-image/organic/product-18.jpg"
                        alt="" />
                      <img
                        class="second-img"
                        src="assets/images/product-image/organic/product-18.jpg"
                        alt="" />
                    </a>
                    <div class="quick-view">
                      <a
                        class="quick_view"
                        href="#"
                        data-link-action="quickview"
                        title="Quick view"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="ion-ios-search-strong"></i>
                      </a>
                    </div>
                  </div>
                  <ul class="product-flag">
                    <li class="new">New</li>
                  </ul>
                  <div class="product-decs">
                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                    <h2>
                      <a href="/single-product" class="product-link">Juicy Couture Solid Slee...</a>
                    </h2>
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
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </article>
                <article class="list-product">
                  <div class="img-block">
                    <a href="/single-product" class="thumbnail">
                      <img
                        class="first-img"
                        src="assets/images/product-image/organic/product-19.jpg"
                        alt="" />
                      <img
                        class="second-img"
                        src="assets/images/product-image/organic/product-20.jpg"
                        alt="" />
                    </a>
                    <div class="quick-view">
                      <a
                        class="quick_view"
                        href="#"
                        data-link-action="quickview"
                        title="Quick view"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="ion-ios-search-strong"></i>
                      </a>
                    </div>
                  </div>
                  <ul class="product-flag">
                    <li class="new">New</li>
                  </ul>
                  <div class="product-decs">
                    <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                    <h2>
                      <a href="/single-product" class="product-link">New Balance Fresh Foa...</a>
                    </h2>
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
                      <li class="cart">
                        <a class="cart-btn" href="#">ADD TO CART </a>
                      </li>
                      <li>
                        <a href="/wishlist"><i class="ion-android-favorite-outline"></i></a>
                      </li>
                      
                    </ul>
                  </div>
                </article>
              </div>
            </div>
            <!-- Product Slider End -->
          </div>
        </div>
      </div>
    </section>
    <!-- Hot Deal Area End -->
    <!-- Banner Area Start -->
    <div class="banner-area">
      <div class="container">
        <div class="row mb-n-30px">
          <div class="col-lg-3 col-sm-6 mb-30px xs-6 order-1 order-lg-1">
            <div class="banner-wrapper">
              <a href="/shop-4-column"><img src="assets/images/banner-image/1.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 mb-30px order-3 order-lg-2">
            <div class="banner-wrapper">
              <a href="/shop-4-column"><img src="assets/images/banner-image/2.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-30px xs-6 order-2 order-lg-3">
            <div class="banner-wrapper">
              <a href="/shop-4-column"><img src="assets/images/banner-image/3.jpg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Area End -->
    <!-- Feature Area Start -->
    <section class="feature-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Section Title -->
            <div class="section-title">
              <h2>Featured Products</h2>
              <p>Add products to weekly line up</p>
            </div>
            <!-- Section Title -->
          </div>
        </div>
        <!-- Feature Slider Start -->
        <div class="feature-slider owl-carousel owl-nav-style">
          <!-- Single Item -->
          <div class="feature-slider-item">
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-18.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-18.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                <h2>
                  <a href="/single-product" class="product-link">Juicy Couture Solid...</a>
                </h2>
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
            </article>
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-19.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-20.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                <h2>
                  <a href="/single-product" class="product-link">New Balance Fresh...</a>
                </h2>
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
            </article>
          </div>
          <!-- Single Item -->
          <div class="feature-slider-item">
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-16.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-17.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                <h2>
                  <a href="/single-product" class="product-link">Originals Kaval Win...</a>
                </h2>
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
                  </ul>
                </div>
              </div>
            </article>
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-11.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-12.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                <h2>
                  <a href="/single-product" class="product-link">Originals Kaval Win...</a>
                </h2>
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
                  </ul>
                </div>
              </div>
            </article>
          </div>
          <!-- Single Item -->
          <div class="feature-slider-item">
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-2.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-15.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                <h2>
                  <a href="/single-product" class="product-link">Juicy Couture Juicy...</a>
                </h2>
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
                  </ul>
                </div>
              </div>
            </article>
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-1.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-1.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                <h2>
                  <a href="/single-product" class="product-link">Juicy Couture Juicy...</a>
                </h2>
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
                  </ul>
                </div>
              </div>
            </article>
          </div>
          <!-- Single Item -->
          <div class="feature-slider-item">
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-2.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-23.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                <h2>
                  <a href="/single-product" class="product-link">New Balance Fresh...</a>
                </h2>
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
                  </ul>
                </div>
              </div>
            </article>
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-18.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-18.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                <h2>
                  <a href="/single-product" class="product-link">New Balance Fresh...</a>
                </h2>
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
            </article>
          </div>
          <!-- Single Item -->
          <div class="feature-slider-item">
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-5.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-5.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                <h2>
                  <a href="/single-product" class="product-link">Juicy Couture Trico...</a>
                </h2>
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
              </div>
            </article>
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-7.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-8.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                <h2>
                  <a href="/single-product" class="product-link">Fila Locker Room V...</a>
                </h2>
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
              </div>
            </article>
          </div>
          <!-- Single Item -->
          <div class="feature-slider-item">
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-17.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-16.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                <h2>
                  <a href="/single-product" class="product-link">Trans-Weight Hood...</a>
                </h2>
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
                  </ul>
                </div>
              </div>
            </article>
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-10.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-1.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                <h2>
                  <a href="/single-product" class="product-link">New Luxury Men's...</a>
                </h2>
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
                  </ul>
                </div>
              </div>
            </article>
          </div>
          <!-- Single Item -->
          <div class="feature-slider-item">
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-22.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-15.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
                <h2>
                  <a href="/single-product" class="product-link">Calvin Klein Jeans...</a>
                </h2>
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
            </article>
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-9.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-9.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                <h2>
                  <a href="/single-product" class="product-link">Water and Wind R...</a>
                </h2>
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
            </article>
          </div>
          <!-- Single Item -->
          <div class="feature-slider-item">
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-14.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-14.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>GRAPIC CORNER</span></a>
                <h2>
                  <a href="/single-product" class="product-link">Madden by Steve...</a>
                </h2>
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
                  </ul>
                </div>
              </div>
            </article>
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-4.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-3.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                <h2>
                  <a href="/single-product" class="product-link">Brixton Patrol All T...</a>
                </h2>
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
            </article>
          </div>
          <!-- Single Item -->
          <div class="feature-slider-item">
            <article class="list-product">
              <div class="img-block">
                <a href="/single-product" class="thumbnail">
                  <img
                    class="first-img"
                    src="assets/images/product-image/organic/product-1.jpg"
                    alt="" />
                  <img
                    class="second-img"
                    src="assets/images/product-image/organic/product-1.jpg"
                    alt="" />
                </a>
                <div class="quick-view">
                  <a
                    class="quick_view"
                    href="#"
                    data-link-action="quickview"
                    title="Quick view"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="ion-ios-search-strong"></i>
                  </a>
                </div>
              </div>
              <div class="product-decs">
                <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
                <h2>
                  <a href="/single-product" class="product-link">Juicy Couture Juicy...</a>
                </h2>
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
                  </ul>
                </div>
              </div>
            </article>
          </div>
          <!-- Single Item -->
        </div>
        <!-- Feature Slider End -->
      </div>
    </section>
    <!-- Feature Area End -->
    <!-- Banner Area 2 Start -->
    <div class="banner-area-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="banner-inner">
              <a href="/shop-4-column"><img src="assets/images/banner-image/4.jpg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Area 2 End -->
    <!-- Recent Add Product Area Start -->
    <section class="recent-add-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Section Title -->
            <div class="section-title">
              <h2>Recently Added</h2>
              <p>Add products to weekly line up</p>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-11.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-12.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
              <h2>
                <a href="/single-product" class="product-link">Originals Kaval Windbr...</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-1.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-1.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
              <h2>
                <a href="/single-product" class="product-link">Juicy Couture Juicy Quil...</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-3.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-4.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
              <h2>
                <a href="/single-product" class="product-link">Brixton Patrol All Terrai...</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-6.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-6.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
              <h2>
                <a href="/single-product" class="product-link">New Balance Arishi Spo...</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-22.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-15.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>GRAPHIC CORNER</span></a>
              <h2>
                <a href="/single-product" class="product-link">Calvin Klein Jeans Refle...</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-14.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-14.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
              <h2>
                <a href="/single-product" class="product-link">Madden by Steve Madd...</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-17.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-16.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
              <h2>
                <a href="/single-product" class="product-link">Trans-Weight Hooded...</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
                <img
                  class="first-img"
                  src="assets/images/product-image/organic/product-9.jpg"
                  alt="" />
                <img
                  class="second-img"
                  src="assets/images/product-image/organic/product-9.jpg"
                  alt="" />
              </a>
              <div class="quick-view">
                <a
                  class="quick_view"
                  href="#"
                  data-link-action="quickview"
                  title="Quick view"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  <i class="ion-ios-search-strong"></i>
                </a>
              </div>
            </div>
            <ul class="product-flag">
              <li class="new">New</li>
            </ul>
            <div class="product-decs">
              <a class="inner-link" href="/shop-4-column"><span>STUDIO DESIGN</span></a>
              <h2>
                <a href="/single-product" class="product-link">Water and Wind Resist...</a>
              </h2>
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
                <li class="cart">
                  <a class="cart-btn" href="#">ADD TO CART </a>
                </li>
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
    <!-- Brand area start -->
    <div class="brand-area">
      <div class="container">
        <div class="brand-slider owl-carousel owl-nav-style owl-nav-style-2">
          <div class="brand-slider-item">
            <a href="#"><img src="assets/images/brand-logo/1.jpg" alt="" /></a>
          </div>
          <div class="brand-slider-item">
            <a href="#"><img src="assets/images/brand-logo/2.jpg" alt="" /></a>
          </div>
          <div class="brand-slider-item">
            <a href="#"><img src="assets/images/brand-logo/3.jpg" alt="" /></a>
          </div>
          <div class="brand-slider-item">
            <a href="#"><img src="assets/images/brand-logo/4.jpg" alt="" /></a>
          </div>
          <div class="brand-slider-item">
            <a href="#"><img src="assets/images/brand-logo/5.jpg" alt="" /></a>
          </div>
          <div class="brand-slider-item">
            <a href="#"><img src="assets/images/brand-logo/1.jpg" alt="" /></a>
          </div>
          <div class="brand-slider-item">
            <a href="#"><img src="assets/images/brand-logo/2.jpg" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Brand area end -->
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
          <button
            type="button"
            class="close"
            data-bs-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
              <div class="tab-content quickview-big-img">
                <div id="pro-1" class="tab-pane fade show active">
                  <img
                    src="assets/images/product-image/organic/product-11.jpg"
                    alt="" />
                </div>
                <div id="pro-2" class="tab-pane fade">
                  <img
                    src="assets/images/product-image/organic/product-9.jpg"
                    alt="" />
                </div>
                <div id="pro-3" class="tab-pane fade">
                  <img
                    src="assets/images/product-image/organic/product-20.jpg"
                    alt="" />
                </div>
                <div id="pro-4" class="tab-pane fade">
                  <img
                    src="assets/images/product-image/organic/product-19.jpg"
                    alt="" />
                </div>
              </div>
              <!-- Thumbnail Large Image End -->
              <!-- Thumbnail Image End -->
              <div class="quickview-wrap mt-15">
                <div
                  class="quickview-slide-active owl-carousel nav owl-nav-style owl-nav-style-2"
                  role="tablist">
                  <a class="active" data-bs-toggle="tab" href="#pro-1"><img
                      src="assets/images/product-image/organic/product-11.jpg"
                      alt="" /></a>
                  <a data-bs-toggle="tab" href="#pro-2"><img
                      src="assets/images/product-image/organic/product-9.jpg"
                      alt="" /></a>
                  <a data-bs-toggle="tab" href="#pro-3"><img
                      src="assets/images/product-image/organic/product-20.jpg"
                      alt="" /></a>
                  <a data-bs-toggle="tab" href="#pro-4"><img
                      src="assets/images/product-image/organic/product-19.jpg"
                      alt="" /></a>
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
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm
                  tempor incidid ut labore et dolore magna aliqua. Ut enim ad
                  minim venialo quis nostrud exercitation ullamco
                </p>
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
                    <input
                      class="cart-plus-minus-box"
                      type="text"
                      name="qtybutton"
                      value="1" />
                  </div>
                  <div class="pro-details-cart btn-hover">
                    <a href="#"> + Add To Cart</a>
                  </div>
                </div>
                <div class="pro-details-wish-com">
                  <div class="pro-details-wishlist">
                    <a href="#"><i class="ion-android-favorite-outline"></i>Add to
                      wishlist</a>
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

  <!-- Mirrored from https://htmldemo.net/ecolife/ecolife/index.html by HTTrack Website Copier/3.x [XR&CO], Mon, 02 Nov 2026 10:19:11 GMT -->

</html>

@endverbatim