<?php 

 class Halaman extends CI_Controller
 {
 	
 	function index()
 	{
 		header("location: halaman/login");
 	}

 	function login()
 	{
 		$this->load->view("login");
 	}

 	function logout()
 	{
 		$this->load->view("logout");
 	}

 	function insert()
 	{
 		$this->load->view("insert");
 	}

 	function update()
 	{
 		$this->load->view("update");
 	}

 	function delete()
 	{
 		$this->load->view("delete");
 	}

 	function select()
 	{
 		$this->load->view("select");
 	}

 	function admin()
 	{
 		$this->load->view("admin");
 	}

 	function test()
 	{
 		$this->load->view("test");
 	}

 }

 ?>