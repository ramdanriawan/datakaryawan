<?php 

$table = $_POST["table"];
unset($_POST["table"]);

$query = $this->db->insert($table, $_POST);

if($query)
{
	setcookie("pesan_insert", "Berhasil menambah data", time() + 1000000, "/");
	header("location: ");
}

 ?>