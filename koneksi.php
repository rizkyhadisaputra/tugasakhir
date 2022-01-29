<?php
	error_reporting(0);
	$connection = mysqli_connect("localhost","root","");
	$conn = mysqli_connect("localhost","root","", "oximeter");
  $db = mysqli_select_db($connection, 'oximeter' )
?>