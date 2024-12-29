<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="#"><img src="images/logo.png" class="logo"alt="" width="100" height="50"></a>
                       <a href="index.php" class="navbar-brand">Thrift Shop</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="shop.php"><span class="glyphicon glyphicon-shop"></span>Shop</a></li>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           
                           <?php
                           }else{
                            ?>
                            <li><a class="active" href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				            <li><a href="shop.php"><span class="glyphicon glyphicon-shop"></span>Shop</a></li>
				            <li><a href="aboutus.php"><span class="glyphicon glyphicon-abtus"></span>About Us</a></li>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>