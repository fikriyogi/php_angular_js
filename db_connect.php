<?php
	ob_start(); //ditambahkan untuk mengabaikan pengiriman header, berlaku juga untuk mengabaikan pesan error header
	$host 	= "localhost";
	$user 	= "root";
	$pass 	= "";
	$db 	= "member_pro";
	$connect=mysqli_connect($host,$user,$pass,$db);
?>

<!--  -->