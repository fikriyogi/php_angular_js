<!-- MENAMPILKAN DATA MYSQL KE COMBOBOX -->
<select>
<?php
$con = mysqli_connect("localhost","root","","sample");

//display values in combobox/dropdown
$result = mysqli_query($con,"SELECT * FROM category ORDER BY category_name");
  while($row = mysqli_fetch_assoc($result))
   {
     echo "<option>$row[category_name]</option>";
    } 
?>
</select>