<?php


include "Database_Connection.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<!----------****Edite Action Start****------------->
<?php
					//  $value = "Record Add";
					//  $color = "btn btn-info";
					 if(isset($_GET["edit_id"]))
					 {
						 $visile="visible";  
						 $value = "Record Update";
						 $color = "btn btn-success";
						 $editproid = $_GET["edit_id"];
						 $query = mysqli_query($conn,"SELECT product.pro_id,product.pro_name,product.pro_detail, 
             category.cat_id,category.cat_name,product.pro_price,product.pro_img
            FROM product 
            INNER JOIN category ON product.cat_id = category.cat_id        
            where pro_id = '".$editproid."'");

						 $tbl_row = mysqli_fetch_array($query);	

             $pro_name=$tbl_row['pro_name'];
             $pro_detail=$tbl_row['pro_detail'];
             $cat_name=$tbl_row['cat_name'];
             $pro_price=$tbl_row['pro_price'];
              $pro_img=$tbl_row['pro_img'];

           
             
						 
					}
					//   if(!isset($_GET["edit_id"]))
					//   {
					// $visile="hidden"	;  
					// $value = "Record Insert";
					//  $color = "btn btn-info";
					 	  
					// 	 }
					  
					  
					 
					 ?>
<!----------****Edite Action End****------------->
<?php
					
						
					if(isset($_POST["btnproduct"]))
					{
            $pro_name=$_POST['pro_name'];
            $pro_detail=$_POST['pro_detail'];
            $pro_category=$_POST['pro_category'];
            $pro_price=$_POST['pro_price'];
            $pro_img=$_POST['pro_img'];
            $filename = $_FILES['fileupload']['name'];
            $temp_name = $_FILES['fileupload']['tmp_name'];    
            $folder = '../product_images/';
						
						
				if(!empty($_POST["hideid"]))
				{
					if (empty($_FILES["fileupload"]["name"]))
					{
						$mypath = $_POST["path"];
      
      $hide_id = $_POST["hideid"];
      $query = "update product set                 
                                              
      pro_name='".$pro_name."',
      pro_detail='".$pro_detail."',
      pro_category ='".$pro_category."',
      pro_price='".$pro_price."',
      pro_img='".$mypath."',
      where pro_id='".$hide_id."'";
      $query = mysqli_query($conn,$query);
						if ($query)
						{
							$result = "Item Updated";	
						} 
						else 
						{
							$result = "Item not Updated";	
						} 
					}
					
				

				if (!empty($_FILES["fileupload"]["name"]))
					{
						if (move_uploaded_file($temp_name,$folder.$filename))
					  {
						
              $hide_id = $_POST["hideid"];
              $query = "update product set                 
              pro_name='".$pro_name."',
              pro_detail='".$pro_detail."',
              pro_category ='".$pro_category."',
              pro_price='".$pro_price."',
              pro_img='".$filename."',
              where pro_id='".$hide_id."'";
              $query = mysqli_query($conn,$query);
						if ($query)
						{
							$result = "Item Updated";	
						} 
						else 
						{
							$result = "Item not Updated";	
						} 
					  }
					}
				}
						
						
						
						
					
									
				
				}
								
					?>
<body class="hold-transition sidebar-mini" >
<div class="wrapper">
  <!-- Navbar -->
  <?php 
  include 'navigation.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php 
  include 'sidebar.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Horizontal Form -->
    <div class="card card-info" style="width: 99% !important; margin: 0 auto;">
              <div class="card-header">
                <h3 class="card-title">Product Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                  <input class="form-control" type="hidden" name="hideid" value="<?php echo @$editproid?>"/>  
                    <label  class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pro_name" placeholder="Name" value="<?php echo @$pro_name?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pro_detail" placeholder="Description" value="<?php echo @$pro_detail?>">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pro_price" placeholder="Price" value="<?php echo @$pro_price?>">
                    </div>
                  </div>

                  
                  <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Category</label>
 
                    <select  class="col-sm-5 "   name="pro_category" value="<?php echo @$pro_category?>">
                   
                  
                      <option class="form-control" 
                      >Select Category</option>
                      
                      <?php
                        $sql = mysqli_query($conn, "SELECT * From category");
                        $row = mysqli_num_rows($sql);

                        while ($row = mysqli_fetch_array($sql)){
                          if (@$pro_category == $row['cat_id']) {
                            echo "<option  value='". $row['cat_id'] ."'selected>" .$row['cat_name'] ."</option>" ;
                          }
                          else {
                            echo "<option  value='". $row['cat_id'] ."'>" .$row['cat_name'] ."</option>" ;
                          }
                        
                        }
                        ?>   
                    
                </select>
                </div>

                 
                <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Product Image</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" name="img1" require value="<?php echo @$filename?>" placeholder="Product Image">
                                </div>
                           </div>
                   
                    </div>
                    <?php
                    	 if(isset($_GET["edit_id"]))
                    {
                    ?>
                    <div class="row" >
                        <div class="col-md-4" style="margin-top:20px; margin-left:180px;">
                     <img src="../product_images/<?php echo @$pro_img ?>" id="pro_img"  width="50" height="50"/>
                        </div>
                        </div>
                        <input type="hidden" name="path" value="<?php echo @$pro_img ?>"/>
                 <?php
                      }
                    ?>
                      
                  <?php
                   if (isset($_POST['btnproduct']))
                   {

                    ?>
                   
                  <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                  <h5><i class="icon fas fa-check"></i> <?php  echo $result; ?></h5>
                 
                </div> 
            <?php
              }
                ?>

                <!-- /.card-body -->
                <div class="card-footer">
              
                  
                  <input type="submit" class="btn btn-info float-right" name="btnproduct" value="<?php echo @$value?>"/>
                  
                </div>
                  </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
</div>
<!-- ./wrapper -->
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#pro_img')
                    .attr('src', e.target.result)
                    .width(300)
                    .height(300);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>       
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

<script>

// $(function() {
//     $("#pro_price,#pro_detail").on("keydown keyup",sum);
// 	function sum() {
	
// 	$("#pro_total").val(Number($("#pro_price").val()) - Number($("#pro_detail").val()));

// 	}
// });


</script>

</body>
</html>
