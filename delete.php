<?php
require_once("dbconn.php");
$id = $_GET["id"];
$query = "DELETE FROM `participantsDetails` WHERE `participantsDetails`.`id` = '".$id."'";
$result = $conn->query($query);
if($result){
  header("Location:/home.php");
}else{
  echo "Not Deleted";
}
 ?>
