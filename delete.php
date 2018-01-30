<?php
require_once("dbconn.php");
$id = $_GET["id"];
$query = "DELETE FROM `participantsDetails` WHERE `participantsDetails`.`id` = '".$id."'";
$res = $conn->query($query);
if($res){
  header("Location:/bootcamp/index.php");
}else{
  echo "Not Deleted";
}
 ?>
