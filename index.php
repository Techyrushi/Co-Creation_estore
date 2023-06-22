<?php

session_start();

include("includes/db.php");
include("functions/functions.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>CoCreation</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="images/urja.jpg">
      <!-- CSS here -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="css1/custom.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="assets/css/preloader.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/meanmenu.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="assets/css/backToTop.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
      <link rel="stylesheet" href="assets/css/simple-line-icons.css">
      <link rel="stylesheet" href="assets/css/default.css">
      <link rel="stylesheet" href="assets/css/style.css">
       <link rel="stylesheet" href="css/bootstrap.css">
       <link href="styles/bootstrap.min.css" rel="stylesheet">

  <link href="styles/style.css" rel="stylesheet">
       
    <!-- Bootstrap-Core-CSS -->
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

	<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script>
    <style>
.op-w3pvt {
    padding-bottom: 1.5em;
    padding-top:0em;
}
    #logo a span {
    color: black;
    font-size: 1em;
    margin: 2px;
    font-weight: 800;
    text-shadow: 3px 1px 3px rgba(19, 18, 18, 0.19);
    
}

.sub-des {
    text-transform: uppercase;
    display: block;
    font-size: 0.5em;
    margin: 0;
    color: #5b7a9a;
    letter-spacing: 4px;
    font-weight: 700;
    text-shadow: 3px 1px 3px rgba(78, 73, 73, 0.21);
    padding-left:20px;
    
}
.form-control {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.fa {
    font-size: 50px;
    color: black
}
.btn.shop {
    background: #ec1c24;
    -moz-transition: all 0.25s ease;
    -o-transition: all 0.25s ease;
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease;
    color: #fff;
    padding: 0.6em 2.5em;
    text-transform: uppercase;
    font-size: 0.9em;
    letter-spacing: 2px;
    font-weight: 600;
    -moz-box-shadow: 1px 3px 8px 0 rgba(0, 0, 0, 0.15);
    -webkit-box-shadow: 1px 3px 8px 0 rgba(0, 0, 0, 0.15);
    box-shadow: 1px 3px 8px 0 rgba(0, 0, 0, 0.15);
}
.pos-wthree {
    position: absolute;
    bottom: 20%;
    left: 10%;
}

.pos-w3pvt {
    right: 10%;
    position: absolute;
    bottom: 20%;
}


</style>
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- Add your site or application content here -->

      <!-- preloader start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
            <div id="object"></div>
            </div>
         </div>
      </div>
      <!-- preloader end -->

      <!-- back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->

      <!-- header area start -->
      <header>
         <div class="header__area">
            <div class="header__top black-bg header__padding d-none d-lg-block">
               <div class="container-fluid">
                  <div class="row align-items-center">
                     <div class="col-xxl-8 col-xl-6 col-lg-8">
                        <div class="header__info d-flex align-items-center">
                        <a class="currency__change" href="customer/my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Welcome :Guest"; 
          }
          else
          { 
              echo "Welcome : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
                          
          <div class="header__currency">
                              <select>
                                 <option>USD</option>
                                 <option>ERO</option>
                                 <option>BDT</option>
                                 <option>INR</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-xl-6 col-lg-4">
                        <div class="header__right d-flex justify-content-end">
                           <ul>
                              <li><?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="customer_register.php" class="login__link">Register</a>';
} 
  else
  { 
      echo '<a href="customer/my_account.php?my_orders" class="login__link">My Account</a>';
  }   
?>  </li>
                              <li><?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="checkout.php" class="login__link">Sign In</a>';
} 
  else
  { 
      echo '<a href="./logout.php" class="login__link">Logout</a>';
  }   
?>  </li>
              <li class="d-none d-sm-inline-block" >
                                    <div class="header__cart">
                                       <a href="cart.php" class="cart-toggle-btn">
                                          <i class="icon-handbag"></i>
                                          <?php items(); ?> 
                                       </a>
                                    </div>
                                 </li>  
                              </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="header-sticky" class="header__bottom header__padding header__sticky">
               <div class="container-fluid">
                  <div class="row align-items-center">
                     <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                        <div class="logo">
                           <a href="index.php">
                           <div class="op-w3pvt d-flex">
                        <div id="logo">
                            <h1> <a style="text-transform:lowercase;" href="index.php"><span class="log-w3pvt" style="font-size:80px;">C</span>o<b style="text-transform:uppercase;">C</b>reation</a> <label class="sub-des">Online Store</label></h1>
                        </div>
</div>
                           </a>
                        </div>
                     </div>
                     <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-6 col-sm-6 col-6">
                        <div class="header__bottom-right p-relative d-flex align-items-center justify-content-end">
                           <div class="main-menu mr-100">
                              <nav id="mobile-menu">
                                 <ul>
                                    <li>
                                       <a href="index.php">Home</a>
                                    </li>
                                    <li class="static">
                                       <a href="shop.php">Shop <i class="icon-arrow-down"></i></a>
                                       <ul class="mega-menu mega-menu-2-col">
                                          <li class="has-dropdown">
                                              <a href="shop.php">Men</a>
                                              <ul class="has-dropdown">
                                              <li><a href="shop.php">Backpack</a></li>
                                               <li><a href="shop.php">Briefcase</a></li>
                                               <li><a href="shop.php">Messanger bag</a></li>
                                               <li><a href="shop.php">Tote bag</a></li>
                                               <li><a href="shop.php">laptop Bag</a></li>
                                               <li><a href="shop.php">Tiffin Bag</a></li>
                                               <li><a href="shop.php">Travel Bag</a></li>
                                               <li><a href="shop.php">Duffel bag</a></li>
                                              </ul>
                                          </li>
                                          <li class="has-dropdown">
                                              <a href="shop.php">Women</a>
                                              <ul class="has-dropdown">
                                              <li><a href="shop.php">Backpack</a></li>
                                               <li><a href="shop.php">Briefcase</a></li>
                                               <li><a href="shop.php">Messanger bag</a></li>
                                               <li><a href="shop.php">Tote bag</a></li>
                                               <li><a href="shop.php">laptop Bag</a></li>
                                               <li><a href="shop.php">Tiffin Bag</a></li>
                                               <li><a href="shop.php">Travel Bag</a></li>
                                               <li><a href="shop.php">Duffel bag</a></li>
                                              </ul>
                                          </li>
                                          <li class="d-none d-lg-block">
                                              <div class="product__banner">
                                                  <a class="w-img" href="shop.php">
                                                      <img src="assets/img/banner/menu/banner-women.jpg" alt="">
                                                  </a>
                                                  <div class="product__banner-btn">
                                                      <a href="shop.php" class="e-btn">women</a>
                                                  </div>
                                              </div>
                                          </li>
                                          <li class="d-none d-xl-block">
                                              <div class="product__banner">
                                                  <a class="w-img" href="shop.php">
                                                      <img src="assets/img/banner/menu/banner-men.jpg" alt="">
                                                  </a>
                                                  <div class="product__banner-btn">
                                                      <a href="shop.php" class="e-btn">men</a>
                                                  </div>
                                              </div>
                                          </li>
                                       </ul>
                                    </li>
                                    <li class="static">
                                       <a href="about.php">About Us</a>
                                    </li>
                                    <li>
                                       <a href="blog.html">Blog <i class="icon-arrow-down"></i></a>
                                       <ul class="submenu">
                                          <li><a href="blog.html">Blog</a></li>
                                          <li><a href="blog-details.html">Blog Details</a></li>
                                      </ul>
                                    </li>
                                    <li>
                                       <a href="shop.php">Pages <i class="icon-arrow-down"></i></a>
                                       <ul class="submenu">
                                          <li><a href="checkout.php">Login</a></li>
                                          <li><a href="customer_register.php">Register</a></li>
                                          <li><a href="cart.php">Cart</a></li>
                                          <li><a href="checkout.php">Checkout</a></li>
                                          <li><a href="customer/my_wishlist.php">Wishlist</a></li>
                                          <li><a href="contact.php">Contact</a></li>
                                          <li><a href="about.php">About</a></li>
                                          <li><a href="faq.php">FAQ</a></li>
                                      </ul>
                                    </li>
                                 </ul>
                              </nav>
                           </div>
                           <div class="header__search mr-30 d-none d-xl-block">
                              <form action="search.php">
                                 <div class="header__search-input">
                                    <input type="text" placeholder="Search with keyword">
                                    <button type="submit"><i class="icon-magnifier"></i></button>
                                 </div>
                              </form>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <!-- cartmini area start -->
      <section class="cartmini__area white-bg transition-3">
         <div class="cartmini__wrapper">
            <div class="cartmini__inner">
               <div class="cartmini__close">
                  <button type="button" class="cartmini__close-btn">
                     Close
                     <svg viewBox="0 0 22 22">
                        <path d="M12.41,11l5.29-5.29c0.39-0.39,0.39-1.02,0-1.41s-1.02-0.39-1.41,0L11,9.59L5.71,4.29c-0.39-0.39-1.02-0.39-1.41,0
                        s-0.39,1.02,0,1.41L9.59,11l-5.29,5.29c-0.39,0.39-0.39,1.02,0,1.41C4.49,17.9,4.74,18,5,18s0.51-0.1,0.71-0.29L11,12.41l5.29,5.29
                        C16.49,17.9,16.74,18,17,18s0.51-0.1,0.71-0.29c0.39-0.39,0.39-1.02,0-1.41L12.41,11z"/>
                     </svg>
                  </button>
               </div>
               <div class="cartmini__top">
                  <div class="cartmini__count">
                     <h3>Shoping Cart (5)</h3>
                  </div>
               </div>
               <div class="cartmini__progress">
                  <div class="progress">
                     <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h3>Almost there, add $70.50 more to get FREE SHIPPING!</h3>
               </div>
               <div class="cartmini__content">
                  <ul>
                     <li>
                        <div class="cartmini__item d-flex">
                           <div class="cartmini__thumb mr-20">
                              <a href="product-details.html">
                                 <img src="assets/img/product/cartmini/cartmini-1.jpg" alt="product">
                              </a>
                           </div>
                           <div class="cartmini__text">
                              <h3 class="cartmini__title">
                                 <a href="product-details.html">Morgan Draped Slip Dress</a>
                              </h3>
                              <div class="cartmini__info d-sm-flex align-items-center">
                                 <div class="cartmini__size mr-10">
                                    <h3>Size: <span>M</span></h3>
                                 </div>
                                 <div class="cartmini__color mr-10">
                                    <h3>Color: <span>Deep Blue</span></h3>
                                 </div>
                                 <div class="cartmini__edit">
                                    <button type="button"><i class="fal fa-edit"></i></button>
                                 </div>
                              </div>
                              <div class="cartmini__price">
                                 <span class="price">$90.00</span>
                              </div>
                              <div class="product-quantity mt-10 mb-10">
                                 <div class="product-quantity-form">
                                    <form action="#">
                                       <button class="cart-minus"><i class="far fa-minus"></i></button>
                                       <input class="cart-input" type="text" value="1"/>
                                       <button class="cart-plus"><i class="far fa-plus"></i></button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class="cartmini__item-remove">
                              <button type="button">
                                 <svg viewBox="0 0 22 22">
                                    <path d="M21,1h-4c0-0.55-0.45-1-1-1H6C5.45,0,5,0.45,5,1H1C0.45,1,0,1.45,0,2v4c0,0.55,0.45,1,1,1h0.12l1.88,14.13
                                    C3.08,21.63,3.5,22,4,22h14c0.53,0,0.96-0.41,1-0.93L19.94,7H21c0.55,0,1-0.45,1-1V2C22,1.45,21.55,1,21,1z M17.06,20H4.88L3.14,7
                                    h14.79L17.06,20z M20,5h-1H2V3h18V5z M12.01,16.86l1-7c0.08-0.55,0.59-0.93,1.13-0.85c0.55,0.08,0.93,0.58,0.85,1.13l-1,7
                                    C13.92,17.64,13.49,18,13,18c-0.05,0-0.09,0-0.14-0.01C12.31,17.91,11.93,17.41,12.01,16.86z M8.01,17.14l-1-7
                                    c-0.08-0.55,0.3-1.05,0.85-1.13c0.55-0.08,1.05,0.3,1.13,0.85l1,7c0.08,0.55-0.3,1.05-0.85,1.13C9.09,18,9.05,18,9,18
                                    C8.51,18,8.08,17.64,8.01,17.14z"/>
                                    </svg>
                              </button>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="cartmini__item d-flex">
                           <div class="cartmini__thumb mr-20">
                              <a href="product-details.html">
                                 <img src="assets/img/product/cartmini/cartmini-2.jpg" alt="product">
                              </a>
                           </div>
                           <div class="cartmini__text">
                              <h3 class="cartmini__title">
                                 <a href="product-details.html">Women's Metallic My First Classic Solitaire Ring</a>
                              </h3>
                              <div class="cartmini__price">
                                 <span class="price">$2283.00</span>
                              </div>
                              <div class="product-quantity mt-10 mb-10">
                                 <div class="product-quantity-form">
                                    <form action="#">
                                       <button class="cart-minus"><i class="far fa-minus"></i></button>
                                       <input class="cart-input" type="text" value="1"/>
                                       <button class="cart-plus"><i class="far fa-plus"></i></button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class="cartmini__item-remove">
                              <button type="button">
                                 <svg viewBox="0 0 22 22">
                                    <path d="M21,1h-4c0-0.55-0.45-1-1-1H6C5.45,0,5,0.45,5,1H1C0.45,1,0,1.45,0,2v4c0,0.55,0.45,1,1,1h0.12l1.88,14.13
                                    C3.08,21.63,3.5,22,4,22h14c0.53,0,0.96-0.41,1-0.93L19.94,7H21c0.55,0,1-0.45,1-1V2C22,1.45,21.55,1,21,1z M17.06,20H4.88L3.14,7
                                    h14.79L17.06,20z M20,5h-1H2V3h18V5z M12.01,16.86l1-7c0.08-0.55,0.59-0.93,1.13-0.85c0.55,0.08,0.93,0.58,0.85,1.13l-1,7
                                    C13.92,17.64,13.49,18,13,18c-0.05,0-0.09,0-0.14-0.01C12.31,17.91,11.93,17.41,12.01,16.86z M8.01,17.14l-1-7
                                    c-0.08-0.55,0.3-1.05,0.85-1.13c0.55-0.08,1.05,0.3,1.13,0.85l1,7c0.08,0.55-0.3,1.05-0.85,1.13C9.09,18,9.05,18,9,18
                                    C8.51,18,8.08,17.64,8.01,17.14z"/>
                                    </svg>
                              </button>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="cartmini__item d-flex">
                           <div class="cartmini__thumb mr-20">
                              <a href="product-details.html">
                                 <img src="assets/img/product/cartmini/cartmini-3.jpg" alt="product">
                              </a>
                           </div>
                           <div class="cartmini__text">
                              <h3 class="cartmini__title">
                                 <a href="product-details.html">Nike Dri-FIT Miler Wild Run</a>
                              </h3>
                              <div class="cartmini__price">
                                 <span class="price">$283.00</span>
                              </div>
                              <div class="product-quantity mt-10 mb-10">
                                 <div class="product-quantity-form">
                                    <form action="#">
                                       <button class="cart-minus"><i class="far fa-minus"></i></button>
                                       <input class="cart-input" type="text" value="1"/>
                                       <button class="cart-plus"><i class="far fa-plus"></i></button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class="cartmini__item-remove">
                              <button type="button">
                                 <svg viewBox="0 0 22 22">
                                    <path d="M21,1h-4c0-0.55-0.45-1-1-1H6C5.45,0,5,0.45,5,1H1C0.45,1,0,1.45,0,2v4c0,0.55,0.45,1,1,1h0.12l1.88,14.13
                                    C3.08,21.63,3.5,22,4,22h14c0.53,0,0.96-0.41,1-0.93L19.94,7H21c0.55,0,1-0.45,1-1V2C22,1.45,21.55,1,21,1z M17.06,20H4.88L3.14,7
                                    h14.79L17.06,20z M20,5h-1H2V3h18V5z M12.01,16.86l1-7c0.08-0.55,0.59-0.93,1.13-0.85c0.55,0.08,0.93,0.58,0.85,1.13l-1,7
                                    C13.92,17.64,13.49,18,13,18c-0.05,0-0.09,0-0.14-0.01C12.31,17.91,11.93,17.41,12.01,16.86z M8.01,17.14l-1-7
                                    c-0.08-0.55,0.3-1.05,0.85-1.13c0.55-0.08,1.05,0.3,1.13,0.85l1,7c0.08,0.55-0.3,1.05-0.85,1.13C9.09,18,9.05,18,9,18
                                    C8.51,18,8.08,17.64,8.01,17.14z"/>
                                    </svg>
                              </button>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="cartmini__bottom-wrapper">
               <div class="cartmini__bottom">
                  <div class="cartmini__total d-flex justify-content-between align-items-center">
                     <h3>Subtotal:</h3>
                     <span class="price">$2,840.00</span>
                  </div>
                  <div class="cartmini__agree mb-20 d-flex align-items-center">
                     <input class="-check-input" type="checkbox" id="z-kit">
                     <label class="z-check-label" for="z-kit">I agree with the terms and conditions.</label>
                  </div>
                  <div class="cartmini__btn d-flex justify-content-between">
                     <a href="checkout.php" class="e-btn">Checkout</a>
                     <a href="cart.php" class="e-btn e-btn-border">Viewcart</a>
                  </div>
                  <div class="cartmini__security">
                     <ul class="d-flex align-items-center">
                        <li>
                           <img src="assets/img/security/security-1.png" alt="">
                        </li>
                        <li>
                           <img src="assets/img/security/security-2.png" alt="">
                        </li>
                        <li>
                           <img src="assets/img/security/security-3.png" alt="">
                        </li>
                        <li>
                           <img src="assets/img/security/security-4.png" alt="">
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="body-overlay"></div>
      <!-- cartmini area end -->

      <!-- sidebar area start -->
      <section class="canvas__area">
         <div class="canvas__wrapper">
            <div class="canvas__top d-flex align-items-center mb-60">
               <div class="canvas__close mr-35">
                  <button class="canvas__close-btn">
                     <svg viewBox="0 0 22 22">
                        <path d="M12.41,11l5.29-5.29c0.39-0.39,0.39-1.02,0-1.41s-1.02-0.39-1.41,0L11,9.59L5.71,4.29c-0.39-0.39-1.02-0.39-1.41,0
                        s-0.39,1.02,0,1.41L9.59,11l-5.29,5.29c-0.39,0.39-0.39,1.02,0,1.41C4.49,17.9,4.74,18,5,18s0.51-0.1,0.71-0.29L11,12.41l5.29,5.29
                        C16.49,17.9,16.74,18,17,18s0.51-0.1,0.71-0.29c0.39-0.39,0.39-1.02,0-1.41L12.41,11z"/>
                     </svg>
                  </button>
               </div>
               <div class="logo">
                  <a href="index-2.html">
                     <img src="assets/img/logo/logo.png" alt="logo">
                  </a>
               </div>
            </div>
            <div class="canvas__content p-relative z-index-1">
               <div class="canvas__menu">
                  <div class="mobile-menu"></div>
               </div>
               <div class="canvas__action mb-15">
                  <a href="checkout.php">Login</a>
               </div>
               <div class="canvas__action mb-15 ">
                  <a href="wishlist.html" class="has-tag">
                     <svg viewBox="0 0 22 22">
                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                     </svg>
                     <span class="tag">2</span>
                  </a>
               </div>
               <div class="canvas__action mb-15 d-sm-block">
                  <a href="wishlist.html" class="has-tag">
                     <i class="icon-handbag"></i>
                     <span class="tag">4</span>
                  </a>
               </div>
               <div class="canvas__social mt-15">
                  <ul>
                     <li>
                        <a href="#"><i class="icon-social-facebook"></i></a>
                     </li>
                     <li>
                        <a href="#"><i class="icon-social-twitter"></i></a>
                     </li>
                     <li>
                        <a href="#"><i class="icon-social-instagram"></i></a>
                     </li>
                     <li>
                        <a href="#"><i class="icon-social-dribbble"></i></a>
                     </li>
                     <li>
                        <a href="#"><i class="icon-social-linkedin"></i></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <!-- sidebar area end -->


      <main>

            <!-- slider area start -->
            <section class="slider__area box-plr-75 pb-30">
               <div class="slider__wrapper slider__active swiper-container">
                  <div class="swiper-wrapper">
                     <div class="slider__item slider__height d-flex align-items-center swiper-slide p-relative" data-background="images/ab.jpg">
                        <div class="slider__shape">
                           <img class="slider__shape-1" data-animation="bounceInDown" data-delay=".1s" src="assets/img/slider/slider-shape-1.png" alt="">
                        </div>
                        <div class="container">
                           <div class="row">
                              <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 col-sm-10">
                                 <div class="slider__content p-relative z-index-1">
                                    <span data-animation="fadeInUp" data-delay=".2s">Hot Collections</span>
                                    <h2 class="slider__title" data-animation="fadeInUp" data-delay=".4s">Top Picks For  <span class="slider__underline">Man</span>, <span class="slider__underline">Women</span></h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Clean and classic up front, with graphic boldness at the back.</p>
                                    <div class="slider__btn" data-animation="fadeInUp" data-delay=".8s">

                                       <a href="shop.php" class="e-btn">Shop Now</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slider__item slider__height d-flex align-items-center swiper-slide p-relative" data-background="images/ab2cp.jpg">
                        <div class="slider__shape">
                           <img class="slider__shape-1" data-animation="bounceInDown" data-delay=".1s" src="assets/img/slider/slider-shape-1.png" alt="">
                        </div>
                        <div class="container">
                           <div class="row">
                              <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 col-sm-10">
                                 <div class="slider__content p-relative z-index-1">
                                    <span data-animation="fadeInUp" data-delay=".2s">Hot Collections</span>
                                    <h2 class="slider__title" data-animation="fadeInUp" data-delay=".4s">Top Picks For  <span class="slider__underline">Man</span>, <span class="slider__underline">Women</span></h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Clean and classic up front, with graphic boldness at the back.</p>
                                    <div class="slider__btn" data-animation="fadeInUp" data-delay=".8s">
                                      
                                       <a href="shop.php" class="e-btn">Shop Now</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slider__item slider__height d-flex align-items-center swiper-slide p-relative" data-background="images/g5cp.jpg">
                        <div class="slider__shape">
                           <img class="slider__shape-1" data-animation="bounceInDown" data-delay=".1s" src="assets/img/slider/slider-shape-1.png" alt="">
                        </div>
                        <div class="container">
                           <div class="row">
                              <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 col-sm-10">
                                 <div class="slider__content p-relative z-index-1">
                                    <span data-animation="fadeInUp" data-delay=".2s">Hot Collections</span>
                                    <h2 class="slider__title" data-animation="fadeInUp" data-delay=".4s">Top Picks For  <span class="slider__underline">Man</span>, <span class="slider__underline">Women</span></h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Clean and classic up front, with graphic boldness at the back.</p>
                                    <div class="slider__btn" data-animation="fadeInUp" data-delay=".8s">
                                       
                                       <a href="shop.php" class="e-btn">Shop Now</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="main-slider-pagination"></div>
               </div>
            </section>
            <!-- slider area end -->
            <div class="wrapper">
            <h1>Featured Collection<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
            <br><br><br>
             <!-- /mid-section -->
    <section class="mid-section">
        <div class="d-lg-flex p-0">
            <div class="col-lg-6 bottom-w3pvt-left p-lg-0">
                <img src="images/ab1.jpg" class="img-fluid" alt="" />
                <div class="pos-wthree">
                    <h4 class="text-wthree">50% Off Any <br> Women's Bags</h4>
                    <a href="shop.html" class="btn shop mt-3">Shop Now</a>
                </div>
            </div>
            <div class="col-lg-6 bottom-w3pvt-left bottom-w3pvt-right p-lg-0">
                <img src="images/ab2.jpg" class="img-fluid" alt="" />
                <div class="pos-w3pvt">
                    <h4 class="text-w3pvt">30% Off Any <br> Men's Bags</h4>
                    <a href="shop.html" class="btn shop mt-3">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //mid-section -->

            <!-- testimonial area start -->
            <section class="testimonial__area box-plr-60 pb-60 pt-120">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xxl-12">
                        <div class="testimonial__slider swiper-container pb-85">
                           <div class="swiper-wrapper">
                              <div class="testimonial__item swiper-slide p-relative grey-bg mt-35">
                                 <div class="testimonial__shape">
                                    <img class="testimonial__shape-2" src="assets/img/testimonial/testimonial-msg-2.png" alt="">
                                 </div>
                                 <div class="testimonial__inner fix p-relative">
                                    <div class="testimonial__shape">
                                       <img class="testimonial__shape-1" src="assets/img/testimonial/testimonial-msg-1.png" alt="">
                                    </div>
                                    <div class="testimonial__text">
                                       <p>"Thanks guys, keep up the good work! I just can't get a T-Shirt with fashion on it so I can show it off exactly what I've been looking for."</p>
                                    </div>
                                    <div class="testimonial__user d-flex align-items-center">
                                       <div class="testimonial__user-thumb mr-25">
                                          <img src="images/sonu.jpg" alt="">
                                       </div>
                                       <div class="testimonial__user-content">
                                          <h5>Rushikesh.K.Chavan</h5>
                                          <span>- Developer</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="testimonial__item swiper-slide p-relative grey-bg mt-35">
                                 <div class="testimonial__shape">
                                    <img class="testimonial__shape-2" src="assets/img/testimonial/testimonial-msg-2.png" alt="">
                                 </div>
                                 <div class="testimonial__inner fix p-relative">
                                    <div class="testimonial__shape">
                                       <img class="testimonial__shape-1" src="assets/img/testimonial/testimonial-msg-1.png" alt="">
                                    </div>
                                    <div class="testimonial__text">
                                       <p>"Thanks guys, keep up the good work! I just can't get a Bag with fashion on it so I can show it off exactly what I've been looking for."</p>
                                    </div>
                                    <div class="testimonial__user d-flex align-items-center">
                                       <div class="testimonial__user-thumb mr-25">
                                          <img src="images/anuj.jpg" alt="">
                                       </div>
                                       <div class="testimonial__user-content">
                                          <h5>Anuj Yeole</h5>
                                          <span>- Developer</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="testimonial__item swiper-slide p-relative grey-bg mt-35">
                                 <div class="testimonial__shape">
                                    <img class="testimonial__shape-2" src="assets/img/testimonial/testimonial-msg-2.png" alt="">
                                 </div>
                                 <div class="testimonial__inner fix p-relative">
                                    <div class="testimonial__shape">
                                       <img class="testimonial__shape-1" src="assets/img/testimonial/testimonial-msg-1.png" alt="">
                                    </div>
                                    <div class="testimonial__text">
                                       <p>"Thanks guys, keep up the good work! I just can't get a Bag with fashion on it so I can show it off exactly what I've been looking for."</p>
                                    </div>
                                    <div class="testimonial__user d-flex align-items-center">
                                       <div class="testimonial__user-thumb mr-25">
                                          <img src="images/ani.jpg" alt="">
                                       </div>
                                       <div class="testimonial__user-content">
                                          <h5>Anirudha Salve</h5>
                                          <span>- Designer</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="testimonial__item swiper-slide p-relative grey-bg mt-35">
                                 <div class="testimonial__shape">
                                    <img class="testimonial__shape-2" src="assets/img/testimonial/testimonial-msg-2.png" alt="">
                                 </div>
                                 <div class="testimonial__inner fix p-relative">
                                    <div class="testimonial__shape">
                                       <img class="testimonial__shape-1" src="assets/img/testimonial/testimonial-msg-1.png" alt="">
                                    </div>
                                    <div class="testimonial__text">
                                       <p>"Thanks guys, keep up the good work! I just can't get a Bag with fashion on it so I can show it off exactly what I've been looking for."</p>
                                    </div>
                                    <div class="testimonial__user d-flex align-items-center">
                                       <div class="testimonial__user-thumb mr-25">
                                          <img src="images/meeta.jpg" alt="">
                                       </div>
                                       <div class="testimonial__user-content">
                                          <h5>Meeta Nahar</h5>
                                          <span>- Designer</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="testimonial-pagination"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- testimonial area end -->

            <!-- blog area start -->
            <section class="blog__area box-plr-60 pt-60 pb-30 grey-bg">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xxl-4 col-xl-4">
                        <div class="cta__wrapper cta__overlay text-center include-background pt-100 pb-100 pl-65 pr-65" data-background="assets/img/cta/cta-1.jpg">
                           <div class="cta__content p-relative z-index-1">
                              <img src="assets/img/cta/cta-mail.png" alt="">
                              <span>Newsletter</span>
                              <h4>Get Every Updates</h4>
                           </div>
                           <div class="cta__form  p-relative z-index-1">
                           <form method="post" id="form-subscribe" action="submit.php">
                                 <div class="cta__input mb-10">
                                 <input type="text" name="name" placeholder="Enter Full Name" class="form-input" required autocomplete="off">
                                    <i class="fal fa-user"></i></div>
                                    <div class="cta__input mb-10">
                                    <input type="email" name="email" placeholder="Enter Email address" class="form-input" required autocomplete="off">
                                    <i class="fal fa-envelope"></i>
                                 </div>
                                 <button type="submit"><i class="fal fa-paper-plane"></i> Subscribe Now</button>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-8 col-xl-8">
                        <div class="blog__wrapper pl-50">
                           <div class="section__title-wrapper mb-30">
                              <h2 class="section__title">Trending News</h2>
                           </div>
                           <div class="row">
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                 <div class="blog__item mb-30 white-bg">
                                    <div class="blog__thumb w-img fix">
                                       <a href="blog-details.html">
                                          <img src="assets/img/blog/blog-1.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="blog__content">
                                       <div class="blog__meta">
                                          <span class="tag">
                                             <a href="#">Fashion /</a>
                                          </span>
                                          <span><i class="fal fa-calendar-alt"></i> 24 June 2021</span>
                                       </div>
                                       <h3 class="blog__title">
                                          <a href="blog-details.html">From warm-ups to cool with downs, the Nike</a>
                                       </h3>
                                       <p>Ecommerce, also known as electronic commerce or internet commerce</p>
                                       <a href="blog-details.html" class="link-btn">Read More</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                 <div class="blog__item mb-30 white-bg">
                                    <div class="blog__thumb w-img fix">
                                       <a href="blog-details.html">
                                          <img src="assets/img/blog/blog-2.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="blog__content">
                                       <div class="blog__meta">
                                          <span class="tag">
                                             <a href="#">Fashion /</a>
                                          </span>
                                          <span><i class="fal fa-calendar-alt"></i> 24 June 2021</span>
                                       </div>
                                       <h3 class="blog__title">
                                          <a href="blog-details.html">Fashion Month-Ready In Xmart Studio FW2021</a>
                                       </h3>
                                       <p>Ecommerce, also known as electronic commerce or internet commerce</p>
                                       <a href="blog-details.html" class="link-btn">Read More</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                 <div class="blog__item mb-30 white-bg">
                                    <div class="blog__thumb w-img fix">
                                       <a href="blog-details.html">
                                          <img src="assets/img/blog/blog-3.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="blog__content">
                                       <div class="blog__meta">
                                          <span class="tag">
                                             <a href="#">Fashion /</a>
                                          </span>
                                          <span><i class="fal fa-calendar-alt"></i> 24 June 2021</span>
                                       </div>
                                       <h3 class="blog__title">
                                          <a href="blog-details.html">Fashion Girls Are Secretly Shopping This Item</a>
                                       </h3>
                                       <p>Ecommerce, also known as electronic commerce or internet commerce</p>
                                       <a href="blog-details.html" class="link-btn">Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- blog area end -->
           
            <section class="banner-bottom py-5">
        <div class="container py-md-3">
            <div class="row grids-wthree-info text-center">
                <div class="col-lg-4 ab-content">
                    <div class="ab-info-con">
                        <h4>Fast & Free Delivery</h4>
                        <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.</p>
                    </div>
                </div>
                <div class="col-lg-4 ab-content">
                    <div class="ab-info-con">
                        <h4>Safe & Secure Payments</h4>
                        <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.</p>
                    </div>
                </div>
                <div class="col-lg-4 ab-content">
                    <div class="ab-info-con">
                        <h4>100% Money Back Guarantee</h4>
                        <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

            <!-- brand area start -->
            <section class="brand__area box-plr-60 white-bg">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xxl-12">
                        <div class="brand__slider swiper-container pt-60 pb-60">
                           <div class="swiper-wrapper">
                              <div class="brand__item swiper-slide text-center">
                                 <img src="images/Aristocrat_logo.jpg" alt="">
                              </div>
                              <div class="brand__item swiper-slide text-center">
                                 <img src="images/ktmlogo.png" alt="">
                              </div>
                              <div class="brand__item swiper-slide text-center">
                                 <img src="images/Safari.jfif" alt="">
                              </div>
                              <div class="brand__item swiper-slide text-center">
                                 <img src="images/samsonite.png" alt="">
                              </div>
                              <div class="brand__item swiper-slide text-center">
                                 <img src="images/Aristocrat_logo.jpg" alt="">
                              </div>
                              <div class="brand__item swiper-slide text-center">
                                 <img src="images/samsonite.png" alt="">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- brand area end -->

            <!-- product quick view modal start -->
            <div class="product__modal modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
               <div class="modal-dialog product__modal-wrapper modal-dialog-scrollable modal-dialog-centered">
                  <div class="modal-content">
                     <div class="product__modal-inner d-lg-flex ">
                        <button type="button" class="product__modal-close" data-bs-dismiss="modal" aria-label="Close">
                           <svg viewBox="0 0 22 22">
                              <path d="M12.41,11l5.29-5.29c0.39-0.39,0.39-1.02,0-1.41s-1.02-0.39-1.41,0L11,9.59L5.71,4.29c-0.39-0.39-1.02-0.39-1.41,0
                              s-0.39,1.02,0,1.41L9.59,11l-5.29,5.29c-0.39,0.39-0.39,1.02,0,1.41C4.49,17.9,4.74,18,5,18s0.51-0.1,0.71-0.29L11,12.41l5.29,5.29
                              C16.49,17.9,16.74,18,17,18s0.51-0.1,0.71-0.29c0.39-0.39,0.39-1.02,0-1.41L12.41,11z"/>
                           </svg>
                        </button>
                        <div class="product__modal-slider">
                           <div class="product__modal-img">
                              <img src="assets/img/product/quick/quick-1.jpg" alt="">
                              <div class="product__modal-view-details text-center">
                                 <a href="details.php" class="z-btn z-btn-black w-100">view details <i class="fas fa-long-arrow-alt-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="product__modal-content">
                           <div class="product__modal-top">
                              <h3 class="product__modal-title">
                                 <a href="details.php">Ultrabreathe Support Sports Bra</a>
                              </h3>
                           </div>
                           <div class="product__modal-rating">
                              <ul>
                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                 <li><a href="#"><i class="fas fa-star"></i></a></li>
                                 <li><a href="#"><i class="far fa-star"></i></a></li>
                              </ul>
                              <a href="#" class="product-review">03 reviews</a>
                           </div>
                           <div class="product__modal-price">
                              <span class="price">$195.00 - $220.00</span>
                           </div>
                           <p>In order to sit comfortably for long periods, people need freedom of movement. The Form rocking chair has a molded plastic shell with a wide, curved seat...</p>
                           <div class="product__modal-color mb-20">
                              <h3>Color: <span>Grey</span></h3>
                              <div class="product__color">
                                 <ul>
                                    <li>
                                       <a href="#">
                                          <img src="assets/img/product/quick/color/color-1.png" alt="">
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <img src="assets/img/product/quick/color/color-2.png" alt="">
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <img src="assets/img/product/quick/color/color-3.png" alt="">
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" class="unavailable">
                                          <img src="assets/img/product/quick/color/color-4.png" alt="">
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <img src="assets/img/product/quick/color/color-5.png" alt="">
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#">
                                          <img src="assets/img/product/quick/color/color-6.png" alt="">
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="product__modal-size product__size  mb-40">
                              <h3>Size: <span>S</span></h3>
                              <ul>
                                 <li><a href="#">M</a></li>
                                 <li><a href="#" class="selected">S</a></li>
                                 <li><a href="#">XXL</a></li>
                              </ul>
                           </div>
                           <div class="product__modal-action mb-10">
                              <div class="product__modal-quantity d-sm-flex align-items-center">
                                 <div class="product-quantity-form mr-15 mb-10">
                                    <form action="#">
                                       <button class="cart-minus"><i class="far fa-minus"></i></button>
                                       <input class="cart-input" type="text" value="1"/>
                                       <button class="cart-plus"><i class="far fa-plus"></i></button>
                                    </form>
                                 </div>
                                 <div class="product__modal-add  mb-10">
                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                       <svg viewBox="0 0 22 22">
                                             <g>
                                             <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                             l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                             C18.83,18.71,18.44,19,18,19z"/>
                                             </g>
                                          </svg>
                                       Add to cart
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="product__modal-meta">
                              <span class="sku-wrapper">
                                 <span class="meta-title">SKU:</span>
                                 <span class="sku">463CS90</span>
                              </span>
                              <span class="categories">
                                 <span class="meta-title">Categories:</span>
                                 <a href="#">Trousers,</a>
                                 <a href="#">Life style </a>
                              </span>
                              <span class="tag">
                                 <span class="meta-title">Tags:</span>
                                 <a href="#">Designer,</a>
                                 <a href="#">Women</a>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- product quick view modal end -->

      </main>

      <!-- footer area start -->
      <footer>
         <div class="footer__area footer__subscribe-overlay">
            <div class="footer__top box-plr-60 grey-bg pt-70">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 ">
                        <div class="footer__widget mb-25">
                           <div class="footer__widget-content">
                              <div class="footer__info mb-20">
                                 <div class="footer__call mb-20">
                                    <a href="tel:(+1)-000-123-456">(+1) 000 123 456</a>
                                 </div>
                                 <ul>
                                    <li class=" d-flex align-items-center">
                                       <i class="icon-location-pin"></i>
                                       <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Plot No.09 Opp. Shree krishna sweets Satpur-Ambad link road, Ambad-422010,Nashik</a>
                                    </li>
                                    <li class=" d-flex align-items-center">
                                       <i class="icon-envelope"></i>
                                       <a href="cocreation@gmail.com"><span class="__cf_email__" data-cfemail="492c31282439252c093a3c3939263b3d672a2624">cocreation@gmail.com</span></a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="footer__social">
                                 <ul>
                                    <li>
                                       <a href="#"><i class="icon-social-facebook"></i></a>
                                    </li>
                                    <li>
                                       <a href="#"><i class="icon-social-twitter"></i></a>
                                    </li>
                                    <li>
                                       <a href="#"><i class="icon-social-instagram"></i></a>
                                    </li>
                                    <li>
                                       <a href="#"><i class="icon-social-linkedin"></i></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 ">
                        <div class="footer__widget mb-25">
                           <div class="footer__widget-top">
                              <h3 class="footer__widget-title">Other Pages</h3>
                           </div>
                           <div class="footer__widget-content">
                              <div class="footer__link">
                                 <ul>
                                    <li>
                                       <a href="terms.php">Terms Of Use</a>
                                    </li>
                                    <li>
                                       <a href="terms.php">Privacy & Policy</a>
                                    </li>
                                    <li>
                                       <a href="terms.php">Return Policy</a>
                                    </li>
                                    <li>
                                       <a href="#">Shipping</a>
                                    </li>
                                    <li>
                                       <a href="checkout.php">Account</a>
                                    </li>
                                    <li>
                                       <a href="customer/my_wishlist.php">Wishlist</a>
                                    </li>
                                    <li>
                                       <a href="cart.php">Shopping Cart</a>
                                    </li>
                                    <li>
                                       <a href="checkout.php">Track My Order</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 ">
                        <div class="footer__widget mb-25 pr-120">
                           <div class="footer__widget-top">
                              <h3 class="footer__widget-title">News Feeds</h3>
                           </div>
                           <div class="footer__widget-content">
                              <div class="footer__blog">
                                 <ul>
                                    <li>
                                       <div class="blog__sm d-flex mb-20">
                                          <div class="blog__sm-thumb mr-20">
                                             <a href="blog-details.html">
                                                <img src="assets/img/blog/sm/blog-sm-1.jpg" alt="">
                                             </a>
                                          </div>
                                          <div class="blog__sm-content">
                                             <h3 class="blog__sm-title">
                                                <a href="blog-details.html">If you need a crown or lorem an implant</a>
                                             </h3>
                                             <div class="blog__sm-meta">
                                                <span>July 2, 2021</span>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="blog__sm d-flex mb-20">
                                          <div class="blog__sm-thumb mr-20">
                                             <a href="blog-details.html">
                                                <img src="assets/img/blog/sm/blog-sm-2.jpg" alt="">
                                             </a>
                                          </div>
                                          <div class="blog__sm-content">
                                             <h3 class="blog__sm-title">
                                                <a href="blog-details.html">If you need a crown or lorem an implant</a>
                                             </h3>
                                             <div class="blog__sm-meta">
                                                <span>July 2, 2021</span>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 ">
                        <div class="footer__widget mb-25">
                           <div class="footer__widget-top">
                              <h3 class="footer__widget-title">Get Newsletter</h3>
                           </div>
                           <div class="footer__widget-content">
                              <div class="footer__subscribe">
                                 <p>Get every weeks news & offer news insights</p>
                                 <form method="post" id="form-subscribe" action="submit.php">
                                    <div class="footer__subscribe-input mb-10">
                                       <input type="text" name="name" placeholder="Full name" class="form-input" required autocomplete="off">
                                       <i class="fal fa-user"></i>
                                    </div>
                                    <div class="footer__subscribe-input mb-10">
                                       <input type="email" name="email" placeholder="Enter your email..."  class="form-input" required autocomplete="off">
                                       <i class="fal fa-envelope"></i>
                                    </div>
                                    <button type="submit" value="" class="e-btn e-btn-black w-100"><i class="fal fa-paper-plane"></i> subscribe now</button>
                                 </form> 
                              </div>
                           </div>
                        </div>
                     </div>
                    
                  </div>
               </div>
            </div>
            <div class="footer__bottom footer-bg box-plr-60">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xxl-12">
                        <div class="footer__copyright pt-15 pb-15">
                           <p class="pl-490">Copyright <a href="crushikesh74@gmail.com" >CoCreation</a>-<a href="index.php">eShopping</a> - 2022</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer area end -->

      <!-- JS here -->
      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
      <script src="assets/js/vendor/waypoints.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/meanmenu.js"></script>
      <script src="assets/js/swiper-bundle.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/magnific-popup.min.js"></script>
      <script src="assets/js/parallax.min.js"></script>
      <script src="assets/js/backToTop.js"></script>
      <script src="assets/js/nice-select.min.js"></script>
      <script src="assets/js/counterup.min.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/isotope.pkgd.min.js"></script>
      <script src="assets/js/imagesloaded.pkgd.min.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="assets/js/jquery-2.2.4.min.js"></script>
      <script type="text/javascript" src="js/custom.js"></script>
   </body>
</html>
