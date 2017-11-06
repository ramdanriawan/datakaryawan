<?php 

$query = $this->db->query("select * from $_POST[table] where username='$_POST[username]' AND password ='$_POST[password]'");

if($query->num_rows() > 0)
{
	header("location: ");
}
else
{
	setcookie("pesan_insert", "Gagal login karena username atau password salah");
	header("location: ");
}

 ?>