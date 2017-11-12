<form method="post" action="" enctype="multipart/form-data">
	<input type="file" name="datafile" value="500" required>
	<input type="submit" name="username" value="submit">
</form>

<?php 
print_r($_FILES);

if($_POST["username"])
{
	copy($_FILES["datafile"]["tmp_name"], "nganu/{$_FILES["datafile"]["name"]}");
}

 ?>