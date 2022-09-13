<?php
session_start();
$romove = $_GET["r_id"];

foreach($_SESSION["addcart"] as $key=>$value)
{
	if($value["id"] == $romove)
	{
		unset($_SESSION["addcart"][$key]);
	}
	
}
echo "<script>window.location.assign('cart.php');</script>";
header("Location:cart.php");

?>