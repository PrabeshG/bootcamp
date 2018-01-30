<?php 
require_once("dbconn.php");
 
$firstname = $_POST["username"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$password = md5($password);

$query = "INSERT INTO `users`(
            `firstname`,
            `lastname`,
            `username`,
            `email`,
            `password`
            ) VALUES (
            '".$firstname."',
            '".$lastname."',
            '".$username."',
            '".$email."',
            '".$password."'
            )";
$res = $conn->query($query);
if($res){
    header("Location:/bootcamp/login.php");
}
?>