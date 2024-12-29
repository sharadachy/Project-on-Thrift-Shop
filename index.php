<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.png" />
        <title>Thrift Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>

        <div>
           <?php
            require 'header.php';
           ?>

           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell secondhand clothes in affordable price</h1>
                       <p>New Year Offer</p>
                       <p>Clothes in just Rs.500</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/ctops.jpg" alt="ctops">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Cami Tops</p>
                                        <p>Choose among the best tops.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/jacket.jpg" alt="jacket">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">jacket</p>
                                    <p>Original jackets from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/shirt.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Shirts</p>
                                   <p>Our exquisite collection of shirts.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            

            <div class="content">
                <div class="container">
                    <div class="single-content">
                        <h1>Thrift Store</h1>
                    </div>
                </div>
            </div>
            <footer> 
               <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-box">
                            <div class="img/logo.png" alt="">
                              <p>This is the first online based thrift store in the Nepal. We have been serving our secondhand loving customers all over Nepal.</p>
                              <h3>We Accept</h3>
                            <div class="card-area">
                                <i class="fa fa-cc-visa"></i>
                                <i class="fa fa-credit-card"></i>
                                <i class="fa fa-cc-mastercard"></i>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-box">
                            <h2>About</h2>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Delivery Policy</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                         </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-box">
                            <h2>My Account</h2>
                            <ul>
                                <li><a href="#">Sign In</a></li>
                                <li><a href="#">View Cart</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                         </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-box">
                            <h2>NewsLetter</h2>
                            <div class="input-group mb-3">
                               <input type="text" class="form-control" placeholder="Your email address........" aria-label="Recipient's username" aria-describedby="basic-addon2">
                             <span class="input-group-text" id="basic-addon2"><i class="fa fa-long-arrow-right"></i></span>
                            </div>
                            <h2>Follow Us On</h2>
                            <p class="socials">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-instagram"></i>
                                <i class="fa fa-twitter"></i>
                            </p>
                         </div>
                    </div>
                </div>
               </div>
           </footer>
           
        </div>
    </body>
</html>