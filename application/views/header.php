<?php 

 if(!isset($_COOKIE["session"]) || $_COOKIE["session"] != "admin")
 {
     alert("Kamu Harus Login Sebagai Admin!");
     location("login");
 }
 

 ?>

<?php error_reporting(0) ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <script src="../jquery-ui/external/jquery/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="../jquery-ui/jquery-ui.css">
    <script src="../jquery-ui/jquery-ui.min.js"></script>
    <script src="../js/default.js"></script>
    <script src="../js/script.php"></script>
    <script src="../js/number.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="../css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="../css/colors/default.css" id="theme" rel="stylesheet">
    
    <style>
        select[class*='ui-datepicker-']
        {
            color: black;
        }
    </style>
</head>