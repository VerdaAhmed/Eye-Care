<?php 

include 'Database_Connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<?php 
 		if (isset($_GET["del_id"])) {
       $del_pro_id=$_GET["del_id"];
       $query=mysqli_query($conn,"DELETE FROM product WHERE pro_id='".$del_pro_id."'");
     }
		
		?>
<body class="hold-transition sidebar-mini">
 
<div class="wrapper">
  <?php 
  include 'navigation.php';
  ?> 
  <?php 
  include 'sidebar.php';
  ?>
<div class="content-wrapper">
   

<table class="table table-bordered">
  <thead>
    <tr>
      <th style="text-align:center;" scope="col">Id</th>
      <th style="text-align:center;"scope="col">Name</th>
      <th style="text-align:center;"scope="col">Description</th>
      <th style="text-align:center;"scope="col">Category</th>
      <th style="text-align:center;"scope="col">Price</th>
      <th style="text-align:center;"scope="col">Image</th>
      <th style="text-align:center;"scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
	$sql = mysqli_query($conn,"SELECT product.pro_id,product.pro_name,product.pro_detail, 
  category.cat_id,category.cat_name,product.pro_price,product.pro_img
   FROM product 
   INNER JOIN category ON product.cat_id = category.cat_id
      ");
      
   
	$count =mysqli_num_rows($sql);
	if($count > 0)
	{
	while($row = mysqli_fetch_array($sql))
	{
	?>
            
         <tbody>
        <tr>
        <td style="text-align:center;background-color:#FFF;color:#000;"><?php  echo $row["pro_id"]?></td>
         <td style="text-align:center;background-color:#FFF;color:#000;"><?php  echo $row["pro_name"]?></td>
        <td style="text-align:center;background-color:#FFF;color:#000;"><?php  echo $row["pro_detail"]?></td>
        <td style="text-align:center;background-color:#FFF;color:#000;"><?php  echo $row["cat_name"]?></td>
        <td style="text-align:center;background-color:#FFF;color:#000;"><?php  echo $row["pro_price"]?></td>
        <td style="text-align:center;background-color:#FFF;color:#000;"><img width="50" height="50" src="../product_images/<?php  echo $row["pro_img"]?>"/></td>
         <td style="text-align:center;background-color:#FFF;color:#000;"><a href="show_product_data.php?del_id=<?php echo $row["pro_id"] ?>"><span style="color:#FFF;"><img src="../images/delete.png" width="35" height="35" /></span></a></td>   
         <td style="text-align:center;background-color:#FFF;color:#000;"><a href="product_profile.php?edit_id=<?php echo $row["pro_id"] ?>"><span style="color:#FFF;"><img src="../images/edite.png" width="35" height="35" /></a></span></td>                                     
                                        </tr>                                   
                                    </tbody>
                                    <?php
									
										}
									}
									?>    
    

  
		
  </tbody>
</table>
</div></div>




<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>