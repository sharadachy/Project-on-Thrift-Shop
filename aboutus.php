<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.png" />
        <title>Thrift Store</title>
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
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our ecommerce Store!</h1>
                    <p>We have the best clothes for you. No need to hunt around, we have all in one place. 
                    We are providing secondhand clothes in affordable prices. We also follow environment friendly e-commerce. </p>
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
