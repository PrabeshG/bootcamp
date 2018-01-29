<?php
  require_once("dbconn.php");
  // Storing the values from post method

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

  $query = "INSERT INTO `participantsDetails`(
            `name`,
            `email`,
            `contact`,
            `address`,
            `comments`,
            `age`,
            `gender`,
            `education`,
            `semester`,
            `college`
          ) VALUES (
            '".$name."',
            '".$email."',
            '".$contact."',
            '".$address."',
            '".$comments."',
            '".$age."',
            '".$gender."',
            '".$education."',
            '".$semester."',
            '".$college."'
          )";
  $result = $conn->query($query);
  if($result){
    header("Location:/bootcamp/home.php?saved=true");
  }else{
    echo "Data not inserted.";
  }
 ?>
