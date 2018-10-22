<?php
	include "db_connect.php";

	// Save
	// <button class="btn" type="submit" name="save" >Save</button>
	if (isset($_POST['save'])) {
			$name = $_POST['name'];
			$address = $_POST['address'];

			mysqli_query($connect, "INSERT INTO info (name, address) VALUES ('$name', '$address')"); 
			$_SESSION['message'] = "Address saved"; 
			header('location: index.php');
		}

	// Edit
	// index.php?edit=<?php echo $row['id']; 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($connect, "SELECT * FROM info WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
		}
	}

	// Update
	// <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($connect, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
		$_SESSION['message'] = "Address updated!"; 
		header('location: index.php');
	}

	// Delete
	// server.php?del=<?php echo $row['id']; 
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($connect, "DELETE FROM info WHERE id=$id");
		$_SESSION['message'] = "Address deleted!"; 
		header('location: index.php');
	}
