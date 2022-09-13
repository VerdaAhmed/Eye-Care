
<?php
    session_start();

    include("Database_Connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../style/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../style/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../style/css/style.css" rel="stylesheet">
    <link href="../style/css/checkout.scss" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

<body>

    <!-- Topbar Start -->
  <?php
include('nav.php');
?>  
    <!-- Topbar End -->

     
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            
        
        
        <div class="col-lg-11 table-responsive mb-5">
                
   
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                        <th>s.no</th>
                            <th>Image</th>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Details</th>
                            <!--<th>Remove</th>
                             <th>Update</th> -->
                        </tr>
                        
                    </thead>
                     
                   
	                <tbody class="align-middle">
                    <?php  
					// $cart = $_SESSION['addcart'];
					 $sn = 0;
                     $p = 0;
                     $q = 0;
                     $t = 0;
                    // // $t_amount = 0;
					// // $total_amount = 0;
					// // foreach($cart as $c)
					// // {

                   
                    $un = $_SESSION["un"]; 
                    $pass = $_SESSION["pas"];
                    $select = "select sale.sale_id,sale.first_name,product.pro_name,product.pro_img,product.pro_price,sale.checkout_time,sale.qty,sale.total from sale
                    INNER JOIN product on sale.pro_id = product.pro_id 
                    INNER JOIN user_table on sale.first_name = user_table.user_name 
                    where sale.first_name = '".$un."' and user_table.user_pass = '".$pass."'";
                    $query = mysqli_query($conn,$select);
                    foreach($query as $pro)
					 {
                         $sn++;
                         $p = $pro["pro_price"];
                         $q = $pro["qty"];
                         $t = $p * $q;
						// //  $tp = $pro["pro_price"] * $c["qty"];
						// //  $total_amount += $tp;
						// //  $_SESSION["amount"] = $total_amount;
                    ?>
                            <tr>
                            <td><?php echo $sn ?></td>
                        <td><img src="../style/img/<?php echo $pro["pro_image"]; ?>"class="cart-item-image" width="50" height="50" />
                            <td><?php echo $pro["pro_name"]; ?></td>
                            <td><?php echo $pro["pro_price"]; ?></td>
                            <td><?php echo $pro["qty"]; ?></td>
                            <!--<td><?php echo $pro["total"]; ?></td>-->
                             <td><?php echo $t ?></td>
                             <td><?php echo $pro["checkout_time"]; ?></td> 
                             <!-- <td><a href="view_detail.php?edit_id=<?php echo $pro["ID"] ?>"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a></td> -->

                             
                            </form> 
                    </tr>
                    <?php
                     }
                    ?>
                     
                    </tbody>
                </table>

            </div>
          
                <div class="col-lg-4 form-group">
            
                </div>
        </div> 
              
        </div>
    <!-- </form> -->

    <!-- Footer Start -->
    
    <?php
    include("footer.php");
    ?>
    <!-- Footer End -->

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
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

   

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../style/lib/easing/easing.min.js"></script>
    <script src="../style/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../style/mail/jqBootstrapValidation.min.js"></script>
    <script src="../style/mail/contact.js"></script>
    <!-- Template Javascript -->
    <script src="../style/js/main.js"></script>

    
</body>

</html>