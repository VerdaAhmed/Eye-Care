
<?php


include "Database_Connection.php";


?>
<!DOCTYPE html>
<php lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eyecare.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="../Styling/images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../Styling/css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="../Styling/css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="../Styling/css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="../Styling/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="../Styling/css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="../Styling/css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="../Styling/css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="../Styling/css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="../Styling/css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="../Styling/css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="../Styling/css/reset.css">
	<link rel="stylesheet" href="../Styling/style.css">
    <link rel="stylesheet" href="../Styling/css/responsive.css">

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	<!-- Header -->
	
<?php


include "nav.php";


?>
	<!--/ End Header -->
	
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider">
			<img src="../Styling/images/banner4.jpeg" style="width: 100%; height: 100%;">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
					
	
					<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<!-- <div class="hero-text">
										<h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
										<p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it pereri <br> odiy maboriosm.</p>
										<div class="button">
											<a href="#" class="btn">Shop Now!</a>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->

	
	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Trending Item</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Man</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Woman</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Kids</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Essential</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Prices</a></li>
								</ul> -->
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
										<?php

$sql = "SELECT * FROM `product` LIMIT 12";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
      ?>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.php">
															<img class="default-img" src="../Styling/images/<?php echo $row["pro_img"] ?>" alt="#" style="height: 150px; width: 100%;">
															<!-- <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#"> -->
														</a>
														<div class="button-head">
														<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<!-- <a title="Add to cart" href="#">Add to cart</a> -->
																<form method="get" action="singlecart.php">
                 <input type="hidden" value="1" min="1" name="qty" class="form-control" />                       
                  <input type="hidden" name="id" value="<?php echo $row["pro_id"]?>" /><br>
                  <input type="hidden" name="pro_name" value="<?php echo $row["pro_name"]?>" /><br>
                            <input type="submit" value="Add to Cart"  class="btn btn-primary" style="border: none; background-color: yellowgreen;" />
                            </form>   
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="show_category.php?edit_id=<?php echo $row["cat_id"]?>"><?php echo $row["pro_name"] ?></a></h3>
														<div class="product-price">
															<span><?php echo $row["pro_price"] ?></span>
														</div>
													</div>
												</div>
											</div>
											
											<?php
    }
}
            ?>
											
											
										
										
										
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	
	<!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="../Styling/images/download.jpg" alt="#" style="width: 600px; height: 370px;" >
						<div class="content">
							<p>Frames Collectons</p>
							<h3>Up to<span> 50%</span></h3>
							<a href="show_category.php?edit_id=3">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="../Styling/images/download (2).jpg" alt="#" style="width: 600px; height: 370px;">
						<div class="content">
							<p>Lens Collectons</p>
							<h3>Up to <span>70%</span></h3>
							<a href="show_category.php?edit_id=4" class="btn">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->
	
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hot Item</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						<?php

$sql = "SELECT * FROM product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
      ?>
						<div class="single-product">
                            <div class="product-img">
                                <a href="product-details.php">
                                    <img class="default-img" src="../Styling/images/<?php echo $row["pro_img"] ?>" alt="#">
                                    <!-- <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#"> -->
                                </a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<!-- <a title="Add to cart" href="#">Add to cart</a> -->
										<form method="get" action="singlecart.php">
                 <input type="hidden" value="1" min="1" name="qty" class="form-control" />                       
                  <input type="hidden" name="id" value="<?php echo $row["pro_id"]?>" /><br>
                  <input type="hidden" name="pro_name" value="<?php echo $row["pro_name"]?>" /><br>
                            <input type="submit" value="Add to Cart"  class="btn btn-primary" style="border: none; background-color: yellowgreen;" />
                            </form>  
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.php"><?php echo $row["pro_name"] ?></a></h3>
                                <div class="product-price">
                                    <span><?php echo $row["pro_price"] ?></span>
                                </div>
                            </div>
                        </div>
							
						<?php
    }
}
            ?>
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	
	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    <div class="quantity">
										<!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</div>
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
										<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->
	
	<!-- Start Footer Area -->
	<?php
	include "footer.php";
	?>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="../Styling/js/jquery.min.js"></script>
    <script src="../Styling/js/jquery-migrate-3.0.0.js"></script>
	<script src="../Styling/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="../Styling/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="../Styling/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="../Styling/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="../Styling/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="../Styling/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="../Styling/js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="../Styling/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="../Styling/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="../Styling/js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="../Styling/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="../Styling/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="../Styling/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="../Styling/js/easing.js"></script>
	<!-- Active JS -->
	<script src="../Styling/js/active.js"></script>
</body>
					</html>