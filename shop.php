<?php
    session_start();
    require 'check_if_added.php';
?>
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
                    <p>We have the best clothes for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/f1.jpg" alt="crop top">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3> crop top</h3>
                                    <p>Price: Rs. 200</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <a href="buynow.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Buy Now</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                        
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/f2.jpg" alt="leather jacket">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>leather jacket</h3>
                                    <p>Price: Rs. 1000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <a href="buynow.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Buy Now</a>
                                                <?php
                                            }
                                        }
                                        
                                        ?>
                                        
                                        
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/f3.jpg" alt="tshirt ">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>tshirt </h3>
                                    <p>Price: Rs. 500.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <a href="buynow.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Buy Now</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                        
                                        
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/f4.jpg" alt="tight jeans">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Tight jeans</h3>
                                    <p>Price: Rs. 800.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <a href="buynow.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Buy Now</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                       
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/f5.jpg" alt="HOt pant">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Hot Pant</h3>
                                    <p>Price: Rs. 850.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <a href="buynow.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Buy Now</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                        
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/f6.jpg" alt="frock">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>frock</h3>
                                    <p>Price: Rs. 700.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <a href="buynow.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Buy Now</a>

                                                <?php
                                            }
                                        }
                                        ?>
                                        
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/f7.JPG" alt="baggy pant">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>baggy pant</h3>
                                    <p>Price: Rs. 800.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <a href="buynowphp?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Buy Now</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                       
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/f8.jpg" alt="skirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>printed skirt</h3>
                                    <p>Price: Rs. 500.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <a href="buynow.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Buy Now</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                        
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/f12.jpg" alt="kurta">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>kurta</h3>
                                    <p>Price: Rs. 1500.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <a href="buynow.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Buy Now</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                       
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/f14.jpg" alt="one piece">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>one piece</h3>
                                    <p>Price: Rs. 1000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <a href="buynow.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Buy Now</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                        
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/fb2.jpg" alt="butterfly croptop">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>butterfly croptop</h3>
                                    <p>Price: Rs. 600.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <a href="buynow.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Buy Now</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                       
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/f16.jpg" alt="saree">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>purle saree</h3>
                                    <p>Price: Rs. 2500.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <a href="buynow.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Buy Now</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                       
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
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
