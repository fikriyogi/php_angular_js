<?php 
	require 'constant.php';
?>
<!DOCTYPE html>

<html ng-app="app">

<head>
  <!-- SCROLLS -->
  <title><?= APP_NAME ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/smartadmin-production-plugins.min.css" />
  <link rel="stylesheet" href="assets/css/smartadmin-production.min.css" />

  <script src="assets/js/angular.min.js"></script>
  <script src="assets/js/angular-route.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="assets/js/jquery.min.js"></script>
	<script>
		function changeLang(){
		document.getElementById('form_lang').submit();
		}
	</script>
	 <!-- Time -->
	<script type="text/javascript">
		var timestamp = '<?=time();?>';
		function updateTime(){
		  $('#time').html(Date(timestamp));
		  timestamp++;
		}
		$(function(){
		  setInterval(updateTime, 1000);
		});
	</script>
</head>

<body ng-controller="mainController">

	<ul class="">
	<li><a href="#/"><?= _DASHBOARD ?></a></li>
	<li>
	<a href="#/personal"><?= _PERSONAL ?></a>
	</li>

	<li>
	<a href="#/contacts"><?= _CONTACT ?></a>
	</li>
	<li>
	<form method='get' action='' id='form_lang' >
	<section>
	<label class="select">
	<select name='lang' onchange='changeLang();' >
	<option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
	<option value='in' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'in'){ echo "selected"; } ?> >Indonesia</option>
	</select> <i></i> </label>
	</section>

	</form>
	</li>
	</ul>


	<div id="main">

		<div ng-view></div>

	</div>

</body>

</html>
