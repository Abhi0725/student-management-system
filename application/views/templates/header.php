<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Student Management System (SMS)</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div style="max-width:800px; margin:auto">
	
	<h2>BTE Engineering College &nbsp; &nbsp;
		<small style="font-size:15px;"><a href="<?php echo site_url('students')?>/add">Add Student</a> | <a href="<?php echo base_url('index.php/students')?>">List All Students</a>
		</small>
	</h2>
	<h4 style="margin-top:35px;"><?php echo $title ?></h4>