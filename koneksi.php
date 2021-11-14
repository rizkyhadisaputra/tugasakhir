<?php
	error_reporting(0);
	$connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'oximeter' )
?>