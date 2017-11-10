<?php 

$query = $this->db->query("select * from $_POST[table] where username='$_POST[username]' AND password ='$_POST[password]'");
$data = $query->result()[0];

if($query->num_rows() > 0)
{
	setcookie("username", $data->username, time() + 1000000, "/");
	setcookie("session", $data->session, time() + 1000000, "/");
	
	if($data->session == "user")
	{
		header("location: user");
	}
	elseif($data->session == "admin")
	{
		header("location: admin");
	}

}
else
{
	setcookie("pesan_insert", "Gagal login karena username atau password salah");
	header("location: login");
}

 ?>