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
<?php


if (isset($_POST['btnproduct'])) {

  $pro_name=$_POST['pro_name'];
  $pro_detail=$_POST['pro_detail'];
  $pro_category=$_POST['pro_category'];
  $pro_price=$_POST['pro_price'];

  $file1=$_FILES['img1']['name'];
  $file_tmp1=$_FILES['img1']['tmp_name'];

  $folder = '../product_images/'.$file1;



  $sql = mysqli_query($conn,$insert = "INSERT INTO product (pro_name,pro_detail,cat_id,pro_price,pro_img)
  VALUES('".$pro_name."','".$pro_detail."','".$pro_category."','".$pro_price."','".$file1."')");

  if (move_uploaded_file($file_tmp1, $folder))  {
    $msg = "Data Inserted successfully";
  }

}




?>
<body class="hold-transition sidebar-mini">
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
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Product Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pro_name" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pro_detail" placeholder="Description">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pro_price" placeholder="Price">
                    </div>
                  </div>

                  <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Category</label>

                    <select  class="col-sm-5 " name="pro_category">
                  
                      <option class="form-control" required="true" >Select Category</option>
                      
                      <?php
                        $sql = mysqli_query($conn, "SELECT * From category");
                        $row = mysqli_num_rows($sql);
                        while ($row = mysqli_fetch_array($sql)){
                        echo "<option  value='". $row['cat_id'] ."'>" .$row['cat_name'] ."</option>" ;
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
                   

            
                
                  
                  
                
                  <label><?php if (isset($_POST['btnproduct'])) {
                   echo $msg;
                  }?></label>        
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  
                  <button type="submit" class="btn btn-info float-right" name="btnproduct">Add Product</button>
               
                </div>
                
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
</div>



<!-- ./wrapper -->

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
$(document).ready(function() 
{ 
 $('form').ajaxForm(function() 
 {
  alert("Uploaded SuccessFully");
 }); 
});

function preview_image() 
{
 var total_file=document.getElementById("upload_file").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
 }
}
</script>
</body>
</html>
