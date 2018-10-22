<?php


$res=mysqli_query($connect, "SELECT * FROM setting" );
$row=mysqli_fetch_assoc($res);

// setting
$setting1 		=  $row['app_name'];
$setting2 		=  $row['app_name'];
$setting3 		=  $row['f_navigation'];
$setting4 		=  $row['description'];
$setting5 		=  $row['description'];
$setting6 		=  $row['description'];
$setting7 		=  $row['description'];
$setting8 		=  $row['description'];
$setting9 		=  $row['description'];
$setting10 		=  $row['description'];
$setting11		=  $row['description'];
$setting12 		=  $row['description'];
$setting13 		=  $row['description'];
$setting14 		=  $row['description'];
$setting15 		=  $row['description'];
$setting16 		=  $row['description'];
$setting17 		=  $row['description'];
$setting18 		=  $row['description'];
$setting19 		=  $row['description'];


$a1  		=  $_SERVER['HTTP_HOST'];
$a2  		=  $_SERVER['PHP_SELF'];
$a3  		=  $_SERVER['SERVER_NAME'];
$a6  		=  $_SERVER['HTTP_USER_AGENT'];
$a7  		=  $_SERVER['SCRIPT_NAME'];
$a8 		=  $_SERVER['REQUEST_TIME'];
$a9  		=  $_SERVER['REQUEST_METHOD'];
$a10 		=  $_SERVER['SERVER_PROTOCOL'];
$a11 		=  $_SERVER['GATEWAY_INTERFACE'];
