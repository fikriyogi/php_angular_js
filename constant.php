<?php
session_start();
include_once "db_connect.php";
include_once "define.php";
include_once "function.php";


// Set Language variable
	if(isset($_GET['lang']) && !empty($_GET['lang'])){
		$_SESSION['lang'] = $_GET['lang'];

		if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
		echo "<script type='text/javascript'> location.reload(); </script>";
		}
	}

// Include Language file
	if(isset($_SESSION['lang'])) {
		include "language/lang_".$_SESSION['lang'].".php";
		} 
		else {
		include "language/lang_en.php";
	}
?>