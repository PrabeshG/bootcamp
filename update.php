<?php
  require_once("dbconn.php");
  // Storing the values from post method
  $id = $_POST["id"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $contact = $_POST["contact"];
  $address = $_POST["address"];
  $comments = $_POST["comments"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $education = $_POST["education"];
  $semester = $_POST["semester"];
  $college = $_POST["college"];

  $query = "UPDATE `participantsDetails`
          SET  `name` = '".$name."',
            `email` = '".$email."',
            `contact` = '".$contact."',
            `address` = '".$address."',
            `comments` = '".$comments."',
            `age` = '".$age."',
            `gender` = '".$gender."',
            `education` = '".$education."',
            `semester` = '".$semester."',
            `college` = '".$college."'

            WHERE `participantsDetails`.`id` = '".$id."'";
  $result = $conn->query($query);
  if($result){
    header("Location:/details.php?id='".$id."'?updated=true");
  }else{
    echo "Not Updated.";
  }
 ?>
