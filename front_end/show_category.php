
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
	
		
	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				
				<!-- <div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main"> -->
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
							<!-- </div> -->
							<!-- <div class="tab-content" id="myTabContent"> -->
								<!-- Start Single Tab -->
								<!-- <div class="tab-pane fade show active" id="man" role="tabpanel"> -->
									<!-- <div class="tab-single"> -->
									<div>
	  <?php
	  if(isset($_GET['edit_id']))
	  {
	  
		  $editid = $_GET['edit_id'];
	  
	  $query = "SELECT * FROM category where cat_id = '".$editid."'";
$result1 = $conn->query($query);
if ($result1->num_rows > 0) {
    // output data of each row
    while($pro = $result1->fetch_assoc()) {
      
      ?>
	  <div class="row">
		<div class="col-lg-6"></div>
		<div class="col-lg-2">
		<div style="text-align: center;"> <h1><?php echo $pro["cat_name"] ?></h1></div>
		</div>
		<div class="col-lg-6"></div>
	  </div>
	                                 

	  <?php
	}
	}
} 
	  ?>
	  </div>
									<!-- </div></div></div> -->
	  <div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
                                        <?php
if(isset($_GET['edit_id']))
{

    $editid = $_GET['edit_id'];

$sql = "SELECT * FROM product where cat_id = '".$editid."'";
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
}
            ?>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
							</div>
									</div>
								</div>


						<!--	</div>
						</div>
					</div>
				 </div>
            </div>
    </div> -->
	<!-- End Product Area -->
	
</br></br></br></br></br>	
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