<?php
session_start();
$user = 'root';
$password = '';
$db = 'bootcampweb';
$conn = new mysqli('localhost',$user,$password,$db) or die("DATABASE CONNECTION FAILED TO START");

 ?>
