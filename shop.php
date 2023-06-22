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
      <link href="styles/bootstrap.min.css" rel="stylesheet">

  <link href="styles/style.css" rel="stylesheet">
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
       <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap-Core-CSS -->
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
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
                           <a href="index-3.php">
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
                     <a href="checkout.html" class="e-btn">Checkout</a>
                     <a href="cart.html" class="e-btn e-btn-border">Viewcart</a>
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
                  <a href="login.html">Login</a>
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

  <!-- page title area start -->
         <section class="page__title-area box-plr-60">
            <div class="container-fluid">
               <div class="page__title-bg pt-150 pb-155" data-background="images/ab2.jpg">
                  <div class="row">
                     <div class="col-xxl-12">
                        <div class="page__title-content pl-150">
                           <h3 class="page__title">Shop  At CoCreation_eShopping</h3>
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item" ><a href="index.php" style="font-size:20px;">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="font-size:20px;">Shop</li>
                              </ol>
                            </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->


<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->

<div class="col-md-12" ><!--- col-md-12 Starts -->



</div><!--- col-md-12 Ends -->
<br><br><br><br>
<div class="col-md-3"><!-- col-md-3 Starts -->

<?php include("includes/sidebar.php"); ?>

</div><!-- col-md-3 Ends -->
<br>
<div class="col-md-9" ><!-- col-md-9 Starts --->


<?php getProducts(); ?>

</div><!-- row Ends -->

<center><!-- center Starts -->

<ul class="pagination" ><!-- pagination Starts -->

<?php getPaginator(); ?>

</ul><!-- pagination Ends -->

</center><!-- center Ends -->



</div><!-- col-md-9 Ends --->



</div><!--- wait Ends -->

</div><!-- container Ends -->
</div><!-- content Ends -->
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
    </section><br><br><br>
    <!-- //mid-section -->

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
            </section><br><br><br>
            <!-- brand area end -->

 <!-- footer area start -->
 <footer>
         <div class="footer__area">
            <div class="footer__top box-plr-60 grey-bg-3">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 footer__widget-border">
                        <div class="footer__widget mb-25 pt-70 pb-20">
                           <div class="footer__widget-top">
                              <h3 class="footer__widget-title-2">Contact Info</h3>
                           </div>
                           <div class="footer__widget-content">
                              <div class="footer__info footer__info-2 mb-20">
                                 <ul>
                                    <li class=" d-flex align-items-center">
                                       <i class="icon-location-pin"></i>
                                       <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">736 NW. Street Morrisville, NYC.</a>
                                    </li>
                                    <li class=" d-flex align-items-center">
                                       <i class="icon-envelope"></i>
                                       <a href="https://themepure.net/cdn-cgi/l/email-protection#781d00191508141d380b0d0808170a0c561b1715"><span class="__cf_email__" data-cfemail="0d68756c607d61684d7e787d7d627f79236e6260">[email&#160;protected]</span></a>
                                    </li>
                                    <li class=" d-flex align-items-center">
                                       <i class="icon-phone"></i>
                                       <a href="tel:(+1)-000-123-456">(+1) 000 123 456</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 footer__widget-border">
                        <div class="footer__widget mb-25 pt-70 pb-20">
                           <div class="footer__widget-top">
                              <h3 class="footer__widget-title-2">Useful Link</h3>
                           </div>
                           <div class="footer__widget-content">
                              <div class="footer__link footer__link-2">
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
                                       <a href="#">Shipping Policy</a>
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
                     <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 footer__widget-border">
                        <div class="footer__widget mb-25 pt-70 pb-20">
                           <div class="footer__widget-top">
                              <h3 class="footer__widget-title-2">Follow Us</h3>
                           </div>
                           <div class="footer__widget-content">
                              <div class="footer__social-2">
                                 <ul>
                                    <li>
                                       <a href="#"><i class="icon-social-facebook"></i> Facebook</a>
                                    </li>
                                    <li>
                                       <a href="#"><i class="icon-social-twitter"></i> Twitter</a>
                                    </li>
                                    <li>
                                       <a href="#"><i class="icon-social-instagram"></i> Instagram</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                        <div class="footer__widget mb-25 pl-50 pr-50 pt-70 pb-20">
                           <div class="footer__widget-top">
                              <h3 class="footer__widget-title-2">Get Newsletter</h3>
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
                                                <span>July 2, 2014</span>
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
                                                <span>July 2, 2014</span>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer__bottom grey-bg-4 box-plr-60 pt-14 pb-14">
               <div class="container-fluid">
                  <div class="row align-items-center">
                     <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                        <div class="footer__copyright">
                           <p>Copyright By 2022 <a href="index-2.html"> CoCreation-eShopping.</a></p>
                        </div>
                     </div>
                     <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8">
                        <div class="footer__bottom-right d-sm-flex align-items-center justify-content-md-end">
                           <div class="footer__bottom-link mr-40">
                              <ul>
                                 <li><a href="terms.php">Terms Of Use</a></li>
                                 <li><a href="#">Sitemap</a></li>
                                 <li><a href="#">FAQs</a></li>
                              </ul>
                           </div>
                           <div class="footer__select d-flex align-items-center">
                              <div class="footer__lang">
                                 <select>
                                    <option>ENG</option>
                                    <option>BAN</option>
                                    <option>HIN</option>
                                    <option>CHI</option>
                                 </select>
                              </div>
                              <div class="footer__currency">
                                 <select>
                                    <option>USD</option>
                                    <option>ERO</option>
                                    <option>BDT</option>
                                    <option>INR</option>
                                 </select>
                              </div>
                           </div>
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
      <script src="assets/js/jquery-ui-slider-range.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="js/jquery.min.js"> </script>
      <script src="js/bootstrap.min.js"></script>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

<script>

$(document).ready(function(){

/// Hide And Show Code Starts ///

$('.nav-toggle').click(function(){

$(".panel-collapse,.collapse-data").slideToggle(700,function(){

if($(this).css('display')=='none'){

$(".hide-show").html('Show');

}
else{

$(".hide-show").html('Hide');

}

});

});

/// Hide And Show Code Ends ///

/// Search Filters code Starts ///

$(function(){

$.fn.extend({

filterTable: function(){

return this.each(function(){

$(this).on('keyup', function(){

var $this = $(this),

search = $this.val().toLowerCase(),

target = $this.attr('data-filters'),

handle = $(target),

rows = handle.find('li a');

if(search == '') {

rows.show();

} else {

rows.each(function(){

var $this = $(this);

$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();

});

}

});

});

}

});

$('[data-action="filter"][id="dev-table-filter"]').filterTable();

});

/// Search Filters code Ends ///

});



</script>


<script>


$(document).ready(function(){

  // getProducts Function Code Starts

  function getProducts(){

  // Manufacturers Code Starts

    var sPath = '';

var aInputs = $('li').find('.get_manufacturer');

var aKeys = Array();

var aValues = Array();

iKey = 0;

$.each(aInputs,function(key,oInput){

if(oInput.checked){

aKeys[iKey] =  oInput.value

};

iKey++;

});

if(aKeys.length>0){

var sPath = '';

for(var i = 0; i < aKeys.length; i++){

sPath = sPath + 'man[]=' + aKeys[i]+'&';

}

}

// Manufacturers Code ENDS

// Products Categories Code Starts

var aInputs = Array();

var aInputs = $('li').find('.get_p_cat');

var aKeys = Array();

var aValues = Array();

iKey = 0;

$.each(aInputs,function(key,oInput){

if(oInput.checked){

aKeys[iKey] =  oInput.value

};

iKey++;

});

if(aKeys.length>0){

for(var i = 0; i < aKeys.length; i++){

sPath = sPath + 'p_cat[]=' + aKeys[i]+'&';

}

}

// Products Categories Code ENDS

   // Categories Code Starts

var aInputs = Array();

var aInputs = $('li').find('.get_cat');

var aKeys  = Array();

var aValues = Array();

iKey = 0;

    $.each(aInputs,function(key,oInput){

    if(oInput.checked){

    aKeys[iKey] =  oInput.value

};

    iKey++;

});

if(aKeys.length>0){

    for(var i = 0; i < aKeys.length; i++){

    sPath = sPath + 'cat[]=' + aKeys[i]+'&';

}

}

   // Categories Code ENDS

   // Loader Code Starts

$('#wait').html('<img src="images/load.gif">');

// Loader Code ENDS

// ajax Code Starts

$.ajax({

url:"load.php",

method:"POST",

data: sPath+'sAction=getProducts',

success:function(data){

 $('#Products').html('');

 $('#Products').html(data);

 $("#wait").empty();

}

});

    $.ajax({
url:"load.php",
method:"POST",
data: sPath+'sAction=getPaginator',
success:function(data){
$('.pagination').html('');
$('.pagination').html(data);
}

    });

// ajax Code Ends

   }

   // getProducts Function Code Ends

$('.get_manufacturer').click(function(){

getProducts();

});


  $('.get_p_cat').click(function(){

getProducts();

});

$('.get_cat').click(function(){

getProducts();

});


 });

</script>

</body>

</html>
