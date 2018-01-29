<?php
  require_once("dbconn.php");
  // Storing the values from post method

  $name = $_POST["name"];
  $email = $_POST["email"];
  $contact = $_POST["contact"];
  $address = $_POST["address"];
  $comments = $_POST["comments"];

  $query = "INSERT INTO `participantsDetails`(
            `name`,
            `email`,
            `contact`,
            `address`,
            `comments`
          ) VALUES (
            '".$name."',
            '".$email."',
            '".$contact."',
            '".$address."',
            '".$comments."'
          )";
  $result = $conn->query($query);
  if($result){
    header("Location:/home.php?saved=true");
  }else{
    echo "Data not inserted.";
  }
 ?>
