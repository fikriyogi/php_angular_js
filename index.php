<?php 
	require 'constant.php';
// if(!isset($_SESSION['user']))
// {
//     header("Location: login");
// }

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
		}
	}
?>

<?php
session_start();

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
<!DOCTYPE html>
<html>
<head>
	<title><?= APP_NAME ?></title>
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
<body>
	<p>Sekarang Tanggal <?= TODAY ?>  <p id="time"></p>
	<?php if(F_RIBBON == "1"){ echo "fixed-ribbon"; } ?> <br>
	<input type="checkbox" name="F_NAVIGATION" id="F_NAVIGATION" value="1" <?php if(F_NAVIGATION == "1"){ echo "checked='checked'"; } else {  echo ""; } ?>> </p>


    <!-- Language -->
 <form method='get' action='' id='form_lang' >
   Select Language : <select name='lang' onchange='changeLang();' >
   <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
   <option value='pl' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'pl'){ echo "selected"; } ?> >Polish</option>
  </select>
 </form>

<!-- Form -->
 <h1><?= _REGISTER ?></h1>
 <form method='post' action=''>
  <?= _NAME ?> : <input type='text' name='name' /><br>
  <?= _USERNAME ?> : <input type='text' name='username' /><br>
  <?= _EMAIL ?> : <input type='text' name='email' /><br>
  <?= _ADDRESS ?> : <input type='text' name='address' /><br>
  <input type='submit' value='<?= _SUBMIT ?>'>
 </form>    






<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php 
		$results = mysqli_query($connect, "SELECT * FROM info");
		while ($row = mysqli_fetch_array($results)) { 
			?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="process.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

<form action="process.php" method="POST">

<input type="hidden" name="id" value="<?php echo $id; ?>">


<input type="text" name="name" value="<?php echo $name; ?>">
<input type="text" name="address" value="<?php echo $address; ?>">

<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
</form>

</body>
</html>