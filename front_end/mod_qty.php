<?php
session_start();
$mod = $_GET["m_id"];

foreach($_SESSION["addcart"] as $key=>$value)
{
	if($value["id"] == $mod)
	{
		$_SESSION["addcart"][$key]['qty']=$_POST['mod_qty'];
	}
	
}
echo "<script>window.location.assign('cart.php');</script>";
header("Location:cart.php");

?>