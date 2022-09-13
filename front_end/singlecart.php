<?php

session_start();
$eye_id = $_GET["id"];
$quantity = $_GET["qty"];
$name = $_GET["pro_name"];
$gtotal = $_GET["gtotal"];
$stotal = $_GET["stotal"];
if(isset($_SESSION["addcart"][$eye_id]))
{
	$_SESSION["addcart"][$eye_id]["qty"] += $quantity;
	
}

if(!isset($_SESSION["addcart"][$eye_id]))
{
	$_SESSION["addcart"][$eye_id] = array("id"=>$eye_id,"qty"=>$quantity,"pro_name"=>$name,"gtotal"=>$gtotal,"stotal"=>$stotal);
}

echo "<script>window.location.assign('cart.php');</script>";
header("Location:cart.php");



?>