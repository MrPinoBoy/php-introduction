<?php 
$dbh = new PDO("mysql:host=mysql;dbname=hiking","root","root");
$ID = $_GET['ID'];
$query = "DELETE FROM hike WHERE ID = $ID";
$dbh->query($query);
header("Location: http://localhost/bonus/read.php");