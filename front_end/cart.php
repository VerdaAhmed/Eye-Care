
<?php
    session_start();
	include "Database_Connection.php";


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
	
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.php">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.php">Cart</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
			
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
							<th>S.NO</th>
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<!-- <tbody>
						<?php  
					// $cart = $_SESSION['addcart'];
					// $sn = 0;
                    // $t_amount = 0;
					// foreach($cart as $c)
					// {
					// $sn++;
                    // $select =  "select * from product where pro_id = '".$c["id"]."' ";
                    // $query = mysqli_query($conn,$select);
                    // foreach($query as $pro)
					//  {

                    // ?>
							<tr>
								<td class="image" data-title="No"><img src="../Styling/images/<?php echo $pro["pro_img"]; ?>"></td>
								<td class="product-name" data-title="product-name"><span><?php echo $pro["pro_name"]; ?></td></span></td>
								<td class="price" data-title="Price"><span><?php echo $pro["pro_price"]; ?></td></span></td>
						
								<form action="mod_qty.php?m_id=<?php echo $c["id"]?>" method="POST">
                        <input type="number" min="1" onchange='this.form.submit();' name="mod_qty" class="form-control iqty" value="<?php echo $c["qty"] ?>" />
                        </form>    
                        </td>
                         <td class="itotal"></td>
                        <td style="text-align: center;">
                        <input type="hidden" name="remove_item"/>
                        <a href="RemoveCart.php?r_id=<?php echo $c["id"]?>" class="btnRemoveAction">
                       Delete</a>
                        </td>
								<td class="total-amount" data-title="Total"><span>$220.88</span></td>
								<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
							</tr>
							<?php
                    //  }
                    ?>
                     <?php
            // }         
                 ?> 
						
						</tbody>
					</table>
					 
				</div>
				<div class="col-lg-8 table-responsive mb-5">
                
   
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                        <th>s.no</th>
                            <th>Image</th>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                            
                        </tr>
                        
                    </thead> -->
                     
                   
	                <tbody class="align-middle">
                    <?php  
					$cart = $_SESSION['addcart'];
					$sn = 0;
                    $t_amount = 0;
					// $total_amount = 0;
					foreach($cart as $c)
					{
					$sn++;
                    $select =  "select * from product where pro_id = '".$c["id"]."' ";
                    $query = mysqli_query($conn,$select);
                    foreach($query as $pro)
					 {
						//  $tp = $pro["pro_price"] * $c["qty"];
						//  $total_amount += $tp;
						//  $_SESSION["amount"] = $total_amount;
                    ?>
                            <tr>
                            <td><?php echo $sn ?></td>
                        <td><img src="../Styling/images/<?php echo $pro["pro_img"]; ?>"class="cart-item-image" width="50" height="50" />
                            
                            <td><?php echo $pro["pro_name"]; ?></td>
                        <td style="text-align: right;"><input type="hidden" class="iprice" value="<?php echo $pro["pro_price"]; ?>" /><?php echo $pro["pro_price"]; ?></td>
                        <td style="text-align: right;">



                        <form action="mod_qty.php?m_id=<?php echo $c["id"]?>" method="POST">
                        <input type="number" min="1" onchange='this.form.submit();' name="mod_qty" class="form-control iqty" value="<?php echo $c["qty"] ?>" />
                        <!-- <input type="hidden" name="pro_name" value="<?php echo $pro["pro_name"]; ?>"/> -->
                        </form>    
                        </td>
                         <td class="itotal"></td>
                    
                        <td style="text-align: center;">
                        <input type="hidden" name="remove_item"/>
                        <a href="RemoveCart.php?r_id=<?php echo $c["id"]?>" class="btnRemoveAction">
                       Delete</a>
                        </td>

                                
                    </tr>
                    <?php
                     }
                    ?>
                     <?php
            }         
                 ?> 
                    </tbody>
                </table>
            
    
             
  
                
            </div>
          
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
										<form action="#" target="_blank">
										<input class="form-control" type="text" name="coupon" id="coupon" placeholder="Apply Coupon"/>
            <?php  
					$cart = $_SESSION['addcart'];
					foreach($cart as $c)
					{
                    $select =  "select * from product where pro_id = '".$c["id"]."' ";
                    $query = mysqli_query($conn,$select);
                    foreach($query as $pro)
					 {
                        $tp = $pro["pro_price"] * $c["qty"];
                        $t_amount += $tp;
                        $_SESSION["t_amount"] = $t_amount;
                    ?>


           <div>
            <input type="hidden" class="txt1" id="ctotal"/>
            <input type="hidden" <?php echo $pro["pro_id"]?> id="pid"/>

            </div>
            <?php
             }
            }
            ?>
				<div id="result"></div>
				<br style="clear:both;"/>
				<button class="btn btn-primary" name="activate" id="activate">Activate Code</button>
                   
										</form>
									</div>
									
									<div class="checkbox">
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Cart Subtotal<span id="stotal"><input type="hidden" name="stotal"/></span></li>
										<li>Shipping<span>Free</span></li>
										<li class="last">You Pay<span id="gtotal"><input type="hidden" name="gtotal"/></span></li>
									</ul>
									<div class="button5">
									<?php 
				 if(isset($_SESSION["un"]))
				 {
				  ?>
                 <a href="checkout.php"><input type="submit" value="Proceed To Checkout" class="btn btn-block btn-primary my-3 py-3" /></a>
                 <?php
				 }
				 ?>
                 <?php 
				 if(!isset($_SESSION["un"]))
				 {
				  ?>
                 <a href="login.php"><input type="submit"  name="check_out" value="Proceed To Checkout" class="btn btn-block btn-primary my-3 py-3"/></a>
                 <?php
				 }
				 ?>
										<a href="index.php" class="btn">Continue shopping</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
			
	<!-- Start Shop Services Area  -->
	<section class="shop-services section">
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
	<!-- End Shop Newsletter -->
	
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
												<img src="../Styling/images/modal1.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="../Styling/images/modal2.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="../Styling/images/modal3.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="../Styling/images/modal4.jpg" alt="#">
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
	<!-- Fancybox JS -->
	<script src="../Styling/js/facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="../Styling/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="Styling/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="../Styling/js/nicesellect.js"></script>
	<!-- Ytplayer JS -->
	<script src="../Styling/js/ytplayer.min.js"></script>
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


    <script>

var st=0;
     var gt=0;
     var ct=0;
     var iprice=document.getElementsByClassName('iprice');
     var iqty=document.getElementsByClassName('iqty');
     var itotal=document.getElementsByClassName('itotal');
     var stotal=document.getElementById('stotal');
     var gtotal=document.getElementById('gtotal');
     var ctotal=document.getElementById('ctotal');
     var txt=document.getElementsByClassName('txt1');
     
     function subtotal()
     {
         gt=0;
         st=0;
         ct=0;
         for(i=0;i<iprice.length;i++)
         {
            itotal[i].innerText = (iprice[i].value)*(iqty[i].value);
            txt[i].value = (iprice[i].value)*(iqty[i].value);

             gt=gt+(iprice[i].value)*(iqty[i].value);
            st=st+(iprice[i].value)*(iqty[i].value);
            ct=ct+(iprice[i].value)*(iqty[i].value);
          }
        gtotal.innerText=gt;
        stotal.innerText=st;
        ctotal.innerText=ct;
     }
subtotal();
 </script>

<script>
	$(document).ready(function(){
		$('#activate').on('click', function(){
			var coupon = $('#coupon').val();
			var price = $('#price').val();
            var txt1 = $('#txt1').val();
            var ctotal = $('#ctotal').val();
            var pid = $('#pid').val();
			var gtotal = $('#gtotal').val();
			if(coupon == ""){
				alert("Please enter a coupon code!");
			}
            <?php
            // $cart = $_SESSION['addcart'];
            // foreach($cart as $c)
            // {
        
            // $select =  "select * from product where pro_id = '".$c["id"]."' ";
            // $sql = mysqli_query($connection,$select);
            // if($sql["coupon_status"] = "Valid")
            //  {
                 ?>
                $.post('get_discount.php', {coupon: coupon, ctotal: ctotal, pid: pid}, function(data){
					if(data == "error"){
						alert("Invalid Coupon Code!");
						$('#total').val(ctotal);
						$('#result').html('');
					}
                    // if(data == "error1"){
					// 	alert("Coupon can not apply on this product!!");
					// 	$('#total').val(ctotal);
					// 	$('#result').html('');
					// }
                    else{
						var json = JSON.parse(data);
						$('#result').html("<h4 class='pull-right text-danger'>"+json.discount+"% Off</h4>");
						$('#total').val(json.ctotal);
					}
				});
            <?php 
    //         }
    //         if($query["coupon"] = "InValid")
	//  {
	// 	echo "Coupon can not apply on this product!!";
	//  }
    //         }
            ?>
           
		});
	});
</script>

</body>
</html>