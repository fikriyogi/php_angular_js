<?php 
	require '../constant.php';
?>
<div class=" text-center">
	<h1><?= APP_NAME ?></h1>

	<input type="checkbox" name="F_NAVIGATION" id="F_NAVIGATION" value="1" <?php if(F_NAVIGATION == "1"){ echo "checked='checked'"; } else {  echo ""; } ?>>

	<!-- Form -->
	<h1><?= _REGISTER ?></h1>
		<form method='post' action=''>
			<label class="input"> <i class="icon-append fa fa-question-circle"></i>
				<input type="text" placeholder="Focus to view the tooltip">
				<b class="tooltip tooltip-top-right">
					<i class="fa fa-warning txt-color-teal"></i> 
					Some helpful information</b> 
			</label>
		<?= _NAME ?> : <input type='text' name='name' /><br>
		<?= _USERNAME ?> : <input type='text' name='username' /><br>
		<?= _EMAIL ?> : <input type='text' name='email' /><br>
		<?= _ADDRESS ?> : <input type='text' name='address' /><br>
		<input type='submit' value='<?= _SUBMIT ?>'>
	</form>    

	<p>{{ message }}</p>
</div>