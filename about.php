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
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
      <!-- CSS here -->
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
                              <li><a href="checkout.php" style="font-size:15px;">Track My Order</a></li>
                              <li><a href="customer_register.php" style="font-size:15px">My Account</a></li>
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
                           <a href="index-3.html">
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
                                       <a href="index-3.php">Home</a>
                                    </li>
                                    <li class="static">
                                       <a href="shop.html">Shop <i class="icon-arrow-down"></i></a>
                                       <ul class="mega-menu mega-menu-2-col">
                                          <li class="has-dropdown">
                                              <a href="shop.html">Shop Pages</a>
                                              <ul class="has-dropdown">
                                                  <li><a href="shop-grid.html">Grid Layout</a></li>
                                                  <li><a href="shop-grid-2.html">Pckery Layout</a></li>
                                                  <li><a href="shop-list.html">Masonary Layout</a></li>
                                                  <li><a href="shop.html">Full width Layout</a></li>
                                                  <li><a href="shop.html">1600px Layout</a></li>
                                                  <li><a href="shop.html">Left Sidebar</a></li>
                                                  <li><a href="shop.html">Right Sidebar</a></li>
                                                  <li><a href="shop.html">Hidden Sidebar</a></li>
                                              </ul>
                                          </li>
                                          <li class="has-dropdown">
                                              <a href="shop.html">Features</a>
                                              <ul class="has-dropdown">
                                                  <li><a href="shop.html">Filter Options</a></li>
                                                  <li><a href="shop.html">Filters area</a></li>
                                                  <li><a href="shop.html">Filters Sidebar</a></li>
                                                  <li><a href="shop.html">Load More button</a></li>
                                                  <li><a href="shop.html">infinit scrolling</a></li>
                                                  <li><a href="shop.html">collections list</a></li>
                                                  <li><a href="shop.html">hidden search</a></li>
                                                  <li><a href="shop.html">Search Full screen</a></li>
                                              </ul>
                                          </li>
                                          <li class="d-none d-lg-block">
                                              <div class="product__banner">
                                                  <a class="w-img" href="shop.html">
                                                      <img src="assets/img/banner/menu/banner-women.jpg" alt="">
                                                  </a>
                                                  <div class="product__banner-btn">
                                                      <a href="shop.html" class="e-btn">women</a>
                                                  </div>
                                              </div>
                                          </li>
                                          <li class="d-none d-xl-block">
                                              <div class="product__banner">
                                                  <a class="w-img" href="shop.html">
                                                      <img src="assets/img/banner/menu/banner-men.jpg" alt="">
                                                  </a>
                                                  <div class="product__banner-btn">
                                                      <a href="shop.html" class="e-btn">men</a>
                                                  </div>
                                              </div>
                                          </li>
                                       </ul>
                                    </li>
                                    <li class="static">
                                       <a href="shop.html">Collections <i class="icon-arrow-down"></i></a>
                                       <ul class="mega-menu mega-full">
                                          <li class="has-dropdown">
                                              <a href="product-details.html">Product Layout</a>
                                              <ul class="has-dropdown">
                                                  <li><a href="product-details.html">Product Details Layout 1</a></li>
                                                  <li><a href="product-details.html">Product Details Layout 2</a></li>
                                                  <li><a href="product-details.html">Product Details Layout 3</a></li>
                                                  <li><a href="product-details.html">Product Thumb on right</a></li>
                                                  <li><a href="product-details.html">Product without thumbanail</a></li>
                                                  <li><a href="product-details.html">Left Sidebar</a></li>
                                                  <li><a href="product-details.html">Right Sidebar</a></li>
                                                  <li><a href="product-details.html">Sidebar full height</a></li>
                                                  <li><a href="product-details.html">Product tab acceordiaons</a></li>
                                                  <li><a href="product-details.html">Product full width ATC</a></li>
                                                  <li><a href="product-details.html">Product full width layout</a></li>
                                                  <li><a href="product-details.html">Advance Product Type <span class="menu-tag red">Hot</span></a></li>
                                              </ul>
                                          </li>
                                          <li class="has-dropdown">
                                              <a href="product-details.html">Product Details</a>
                                              <ul class="has-dropdown">
                                                  <li><a href="product-details.html">External/Affiliate Product</a></li>
                                                  <li><a href="product-details.html">Simple Product</a></li>
                                                  <li><a href="product-details.html">Variable Product</a></li>
                                                  <li><a href="product-details.html">Grouped Product <span class="menu-tag red">Hot</span></a></li>
                                                  <li><a href="product-details.html">Inner zoom #1</a></li>
                                                  <li><a href="product-details.html">External Zoom</a></li>
                                                  <li><a href="product-details.html">Inner zoom #2</a></li>
                                                  <li><a href="product-details.html">PhotoSwipe Popup</a></li>
                                                  <li><a href="product-details.html">Description with product</a></li>
                                                  <li><a href="product-details.html">Description with instagram shop</a></li>
                                                  <li><a href="product-details.html">Product Video</a></li>
                                                  <li><a href="product-details.html">Product 3D, Ar models</a></li>
                                              </ul>
                                          </li>
                                          <li class="has-dropdown">
                                              <a href="product-details.html">Product Swatch</a>
                                              <ul class="has-dropdown">
                                                  <li><a href="product-details.html">Product Color Swatch</a></li>
                                                  <li><a href="product-details.html">Product Gallery Swatch</a></li>
                                                  <li><a href="product-details.html">Product Images Swatch</a></li>
                                                  <li><a href="product-details.html">Swatch Color</a></li>
                                                  <li><a href="product-details.html">Swatch Color Circle</a></li>
                                                  <li><a href="product-details.html">Swatch Radio</a></li>
                                                  <li><a href="product-details.html">Swatch Radio COlor</a></li>
                                                  <li><a href="product-details.html">Swatch Rectangle</a></li>
                                                  <li><a href="product-details.html">Swatch Rectangle Color</a></li>
                                                  <li><a href="product-details.html">Swatch Simple <span class="menu-tag red">Hot</span></a></li>
                                                  <li><a href="product-details.html">Swatch Simple Color <span class="menu-tag red">Hot</span></a></li>
                                              </ul>
                                          </li>
                                          <li class="has-dropdown">
                                              <a href="product-details.html">Product Features</a>
                                              <ul class="has-dropdown">
                                                  <li><a href="product-details.html">Frequently Bought Together <span class="menu-tag red">Hot</span></a></li>
                                                  <li><a href="product-details.html">Product pre-orders</a></li>
                                                  <li><a href="product-details.html">Product upsell features <span class="menu-tag red">Hot</span></a></li>
                                                  <li><a href="product-details.html">Description with Lookbook <span class="menu-tag red">Hot</span></a></li>
                                                  <li><a href="product-details.html">Back iin stock notification</a></li>
                                                  <li><a href="product-details.html">Variant Images Grouped <span class="menu-tag red">Hot</span></a></li>
                                                  <li><a href="product-details.html">Size Guide HTML</a></li>
                                                  <li><a href="product-details.html">Delevery & return</a></li>
                                                  <li><a href="product-details.html">Ask a question</a></li>
                                                  <li><a href="product-details.html">Product Sticky</a></li>
                                                  <li><a href="product-details.html">360<sup>o</sup> product viewer</a></li>
                                                  <li><a href="product-details.html">Dynamic Checkout buttons <span class="menu-tag red">Hot</span></a></li>
                                                  <li><a href="product-details.html">Sticky add to cart <span class="menu-tag red">Hot</span></a></li>
                                              </ul>
                                          </li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="blog.html">Blog <i class="icon-arrow-down"></i></a>
                                       <ul class="submenu">
                                          <li><a href="blog.html">Blog</a></li>
                                          <li><a href="blog-details.html">Blog Details</a></li>
                                      </ul>
                                    </li>
                                    <li>
                                       <a href="shop.html">Pages <i class="icon-arrow-down"></i></a>
                                       <ul class="submenu">
                                          <li><a href="login.html">Login</a></li>
                                          <li><a href="register.html">Register</a></li>
                                          <li><a href="cart.html">Cart</a></li>
                                          <li><a href="checkout.html">Checkout</a></li>
                                          <li><a href="wishlist.html">Wishlist</a></li>
                                          <li><a href="contact.html">Contact</a></li>
                                          <li><a href="error.html">404 Error</a></li>
                                      </ul>
                                    </li>
                                 </ul>
                              </nav>
                           </div>
                           <div class="header__search mr-30 d-none d-xl-block">
                              <form action="#">
                                 <div class="header__search-input">
                                    <input type="text" placeholder="Search with keyword">
                                    <button type="submit"><i class="icon-magnifier"></i></button>
                                 </div>
                              </form>
                           </div>
                           <div class="header__action">
                              <ul>
                                 <li class="d-none d-sm-inline-block">
                                    <div class="header__wish">
                                       <a href="wishlist.html">
                                          <span>4</span>
                                          <i class="icon-heart"></i>
                                       </a>
                                    </div>
                                 </li>
                                 <li class="d-none d-sm-inline-block">
                                    <div class="header__cart">
                                       <a href="javasript:void(0)" class="cart-toggle-btn">
                                          <span>2</span>
                                          <i class="icon-handbag"></i>
                                       </a>
                                    </div>
                                 </li>
                                 <li class="d-lg-none">
                                    <a href="javascript:void(0)" class="sidebar-toggle">
                                       <span></span>
                                       <span></span>
                                       <span></span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->
     <!-- //banner-->
    <!--/banner-bottom -->
    <section class="banner-bottom py-5">
        <div class="container py-md-5">
            <div class="row grids-wthree-info">
                <div class="col-lg-6 bag-img">
                    <img src="images/bag1.png" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-6 ab-info-con ab-inf-page text-left">
                    <h4>About Our Baggage</h4>
                    <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.</p>
                    <a href="single.html" class="btn shop mt-4">Read More</a>
                </div>
            </div><br><br><br>
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
    <!-- /banner-bottom -->
    <!--/banner-bottom -->
    <section class="collections">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 ab-content-img">
                <img src="images/ab1.jpg" class="img-fluid" alt=""/>
                </div>
                <div class="col-md-4 ab-content text-center p-lg-5 p-3 my-lg-5">
                    <h4>Travel Must Haves</h4>
                    <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.</p>
                    <a href="shop.html" class="btn shop mt-3">Shop Now</a>

                </div>
            </div>
        </div>
    </section>
    <!-- /banner-bottom -->
    <!--/collections -->
    <section class="banner-bottom py-5">
        <div class="container py-md-5">

            <h3 class="title-wthree mb-lg-5 mb-4 text-center">Safety Meets Style </h3>
            <div class="row text-center">


                <div class="col-md-4 content-gd-wthree">
                    <img src="images/c1.jpg" class="img-fluid" alt="" />
                </div>
                <div class="col-md-4 content-gd-wthree ab-content py-lg-5 my-lg-5">
                    <h4>Need Extra Space ?</h4>
                    <p>Lorem ipsum dolor sit,Nulla pellentesque dolor ipsum laoreet eleifend integer,Pellentesque maximus libero.</p>
                    <a href="shop.html" class="btn shop mt-3">Shop Now</a>

                </div>
                <div class="col-md-4 content-gd-wthree">
                    <img src="images/c2.jpg" class="img-fluid" alt="" />
                </div>
            </div>

        </div>
    </section>
    <!-- //collections-->
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
                                       <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">736 NW. Street Morrisville, PA 19</a>
                                    </li>
                                    <li class=" d-flex align-items-center">
                                       <i class="icon-envelope"></i>
                                       <a href="https://themepure.net/cdn-cgi/l/email-protection#13766b727e637f7653606663637c61673d707c7e"><span class="__cf_email__" data-cfemail="492c31282439252c093a3c3939263b3d672a2624">[email&#160;protected]</span></a>
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
                                       <a href="#"><i class="icon-social-dribbble"></i></a>
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
                                       <a href="#">Terms Of Use</a>
                                    </li>
                                    <li>
                                       <a href="#">Privacy & Policy</a>
                                    </li>
                                    <li>
                                       <a href="#">Return Policy</a>
                                    </li>
                                    <li>
                                       <a href="#">Shipping</a>
                                    </li>
                                    <li>
                                       <a href="#">Account</a>
                                    </li>
                                    <li>
                                       <a href="#">Wishlist</a>
                                    </li>
                                    <li>
                                       <a href="#">Shopping Cart</a>
                                    </li>
                                    <li>
                                       <a href="#">Track My Order</a>
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
                                 <form action="#">
                                    <div class="footer__subscribe-input mb-10">
                                       <input type="text" placeholder="Full name">
                                       <i class="fal fa-user"></i>
                                    </div>
                                    <div class="footer__subscribe-input mb-10">
                                       <input type="email" placeholder="Enter your email...">
                                       <i class="fal fa-envelope"></i>
                                    </div>
                                    <button type="submit" class="e-btn e-btn-black w-100"><i class="fal fa-paper-plane"></i> subscribe now</button>
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
                           <p class="pl-490">Copyright <a href="crushikesh74@gmail.com" >CoCreation</a>-<a href="index-3.html">Automation</a> - 2022</p>
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
   </body>
</html>
