<?php
require_once('mobile_device_detect.php');
$mobile = mobile_device_detect();
?>
<?php include('header.php'); ?>
<?php	
// show a desktop template for full browsers and a mobile template for mobiles
if($mobile==true){
	include('mobile-home.php');
}else{
	include('desktop-home.php');
}
?>
<?php include('index-body.php'); ?>
<?php include('footer.php'); ?>