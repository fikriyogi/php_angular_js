<?php
include_once "controller.php";

// <!-- Call -->
// <!-- HTTP_USER_AGENT  -->

// Error Handling (E_ALL) for display all error
ini_set("display_errors", 1);
ini_set('log_errors', 1);
ini_set("error_reporting", NULL);

// Setting
define("ID", "$setting1");
define("APP_NAME", "$setting2");
define("COPYRIGHT", "$setting3");
define("AUTHOR", "$setting4");
define("LAUNCHING", "$setting5");
define("VERSION", "$setting6");
define("LOGO", "$setting7");
define("DESCRIPTION", "$setting8");
define("SKINS", "$setting9");
define("F_HEADER", "$setting10");
define("F_NAVIGATION", "$setting11");
define("F_RIBBON", "$setting12");
define("F_FOOTER", "$setting13");
define("HEADER_BG", "$setting14");


define("TIMEZONE", "Europe/London");
define("LANGUAGE", "$language");
define("TODAY", date('d-m-Y H:i:s'));
// SERVER

define("HTTP_HOST", "$a1");
define("PHP_SELF", "$a2");
define("SERVER_NAME", "$a3");
define("HTTP_USER_AGENT", "$a6");
define("SCRIPT_NAME", "$a7");
define("REQUEST_TIME", "$a8");
define("REQUEST_METHOD", "$a9");
define("SERVER_PROTOCOL", "$a10");
define("GATEWAY_INTERFACE", "$a11");