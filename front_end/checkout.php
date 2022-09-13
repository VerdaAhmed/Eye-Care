<?php
session_start();
include("Database_Connection.php");
?>
<!DOCTYPE html>
<html lang="zxx">
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
    

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5" style="margin-top: -50px;">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="active"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="active">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
    <?php
					if(isset($_POST["btn_insert"]))
					{
						$cart = $_SESSION["addcart"];
						foreach($cart as $c)
						{
							$id = $c["id"];
							$qt = $c["qty"];
							$d = date('y/m/d');
					$first_name = $_POST["first_name"];
                    // $coupon = $_POST["coupon"];
                    $userid = $_POST["userid"];
                    $email = $_POST["email"];
					$phone = $_POST["phone"];
					$address = $_POST["address"];
					$city = $_POST["city"];
					$total_amount = $_POST["total_amount"];
					$query = mysqli_query($conn,"insert into sale(address,city,email,phone,first_name,pro_id,user_id,total,qty,checkout_time) values('".$address."','".$city."','".$email."','".$phone."','".$first_name."','".$id."','".$userid."','".$total_amount."','".$qt."','".$d."')");
					if($query)
					{
						$result = "Order Successfully";
					}
					else
					{
							$result = mysqli_error($conn);
						
					}
					}
					}
					?>
        <div class="row px-xl-5">
        <form method="post" action="checkout.php">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                    <div class="row">
                        
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" name="first_name" id="first_name" type="text" readonly Required value="<?php echo $_SESSION["un"]?>" >
                        </div>
               
                            <!-- <input class="form-control" name="coupon" id="coupon" type="" value=" <?php echo $_SESSION["coupo"] ?>" > -->
                         
                        <?php  
					
                    $select =  "select * from user_table where user_name  = '".$_SESSION["un"]."' ";
                    $query = mysqli_query($conn,$select);
                    foreach($query as $pro)
					 {
                    ?>
                        
                            <input class="form-control" name="userid" id="userid" type="hidden" value=" <?php echo $pro["user_id"] ?>" >
                        
                        <?php
                      }
                     
                        ?>
                        
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" name="email" type="text" Required placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" name="phone" type="text" Required placeholder="+123 456 789">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" name="address" Required type="text" placeholder="123 Street">
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" name="city" Required type="text" placeholder="Karachi">
                        </div>
                   
                    </div>
                </div>
                
            </div>

   

            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <h5 class="font-weight-medium mb-3">Quantity</h5>
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        <h5 class="font-weight-medium mb-3">Price</h5>
                        </div>
                        <?php  
					$cart = $_SESSION['addcart'];
					// $total_amount = 0;
					foreach($cart as $c)
					{
                    $select =  "select * from product where pro_id = '".$c["id"]."' ";
                    $query = mysqli_query($conn,$select);
                    foreach($query as $pro)
					 {
						//  $tp = $pro["pro_price"] * $c["qty"];
						//  $total_amount += $tp;
						//  $_SESSION["amount"] = $total_amount;
                    ?>
                        <div class="d-flex justify-content-between">
                        <p><?php echo $c["qty"]?></p>
                        <p><?php echo $c["pro_name"]?></p>
                            <p>$<?php echo $pro["pro_price"]?></p>
                        </div>
                        <?php
                      }
                     }
                        ?>




                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium"><span><input  type="text" class="textbox" value="<?php  echo @$_SESSION["t_amount"] ?>" disabled/></span>
    <input name="sub_amount" type="hidden" class="textbox" value="<?php  echo @$_SESSION["t_amount"] ?>" /></h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
	<span><input  type="text" class="textbox" value="<?php  echo @$_SESSION["t_amount"] ?>" disabled/></span>
    <input name="total_amount" type="hidden" class="textbox" value="<?php  echo @$_SESSION["t_amount"] ?>" />
                        </div>
                    </div>
                    <?php
                   //  }
                    //}
                        ?>
                </div>
                <div class="card border-secondary mb-5">
                    <!--<div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Payment</h4>
                    </div>
                     <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>
                        <div class="">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                            </div>
                        </div>
                    </div>-->
                    <div class="card-footer border-secondary bg-transparent">
                        <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" name="btn_insert">Place Order</button>
                    </div> 
                    <div>
						<span><label style="color:#090;"><?php  if(isset($_POST["btn_insert"])) echo $result ?></label></span>    
					</div>
                </div>
            </div>
            </form>
            <?php
   // }
//}

            ?>
        </div>
    </div>
    <!-- Checkout End -->


     <!-- Footer Start -->
    
     <?php
    include("footer.php");
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


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