

<?php


include "Database_Connection.php";


?>

<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
								<li><i class="ti-email"></i> support@eyecare.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<!-- <li><i class="ti-location-pin"></i> Store location</li>
								<li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>  -->
								 <!-- <li><i class="ti-user"></i> <a href="myacc.php">My account</a></li>
								<li><i class="ti-power-off"></i><a href="login.php">Login</a></li> -->
								
                            <!-- <a href="login.php" class="nav-item nav-link">Login</a>
                            <a href="Register.php" class="nav-item nav-link">Register</a> -->
                            <!-- <a href="myacc.php" class="nav-item nav-link">My Account</a> -->
                            <li>
								<?php 
				 if(isset($_SESSION["un"]))
				 {
				  ?>
                 <a href="myacc.php"class="nav-item nav-link"><input type="submit" style="border: none; background-color: white;" name="check_out" value="My Account" class="nav-item nav-link"/></a>
                 <?php
				 }
				 ?>
                 <?php 
				 if(!isset($_SESSION["un"]))
				 {
				  ?>
                 <a href="login.php"class="nav-item nav-link"><input type="submit" style="border: none; background-color: white;" name="check_out" value="My Account" class="nav-item nav-link"/></a>
                 <?php
				 }
				 ?>
							</li>   

							<li>
					   <?php 
				 if(isset($_SESSION["un"]))
				 {
				  ?>
                 <a href="login.php"class="nav-item nav-link"><input type="submit" style="border: none; background-color: white;" name="check_out" value="Logout" class="nav-item nav-link"/></a>
                 <?php
				 }
				 ?>
                 <?php 
				 if(!isset($_SESSION["un"]))
				 {
				  ?>
                 <a href="login.php"class="nav-item nav-link"><input type="submit" style="border: none; background-color: white;" name="check_out" value="Login" class="nav-item nav-link"/></a>
                 <?php
				 }
				 ?>
							</li>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.php"><img src="../Styling/images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					
					<!-- <div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar" style="float: right;">-->
							<!-- Search Form -->
							<!--<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>-->
								<!-- Shopping Item -->
								<!--<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>2 Items</span>
										<a href="#">View Cart</a>
									</div>
									<ul class="shopping-list">
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Ring</a></h4>
											<p class="quantity">1x - <span class="amount">$99.00</span></p>
										</li>
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Necklace</a></h4>
											<p class="quantity">1x - <span class="amount">$35.00</span></p>
										</li>
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">$134.00</span>
										</div>
										<a href="checkout.php" class="btn animate">Checkout</a>
									</div>
								</div>-->
								<!--/ End Shopping Item -->
							<!--</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
								<ul class="main-category">
									<?php
                        $sql = mysqli_query($conn, "SELECT * From category");
                        $row = mysqli_num_rows($sql);
                        while ($row = mysqli_fetch_array($sql)){
						?>
						<!-- <li><a href="#"><?php echo $row['cat_name']?></a></li> -->
						<a href="show_category.php?edit_id=<?php echo $row["cat_id"] ?>" class="nav-item nav-link" style="color: black;"><?php echo $row["cat_name"] ?></a>
						<?php
                        }
                        ?>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="index.php">Home</a></li>
													<!-- <li><a href="#">Product</a></li>												
													<li><a href="#">Service</a></li>
													<li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown"> -->
															<!-- <li><a href="shopgrid.php">Shop Grid</a></li> -->
															<li><a href="cart.php">Cart</a></li>
															<li><a href="checkout.php">Checkout</a></li>
														<!-- </ul> 
													</li>
													 <li><a href="#">Pages</a></li>									
													<li><a href="#">Blog<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="blog-single-sidebar.php">Blog Single Sidebar</a></li>
														</ul>
													</li> -->
													<!-- <li><a href="contact.php">Contact Us</a></li> -->
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>