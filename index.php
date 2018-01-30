<?php
require_once("dbconn.php");
if(isset($_GET["loggedin"])){
if($_GET["loggedin"] == 'success'){
  // echo "<p>Successfully loggedin</p>";
  // echo "<a href='/bootcamp/logout.php' class='btn btn-outline-secondary'>Logout</a>";
?>


<!DOCTYPE html>
<html>
  <?php include("head.php") ?>
  <body>
    <?php

     ?>
    <header class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
      <h1 class="text-center" id="head_title"><a href="/bootcamp/index.php"><img src="/bootcamp/phplogo.png" alt="php" style="width:60px;"></a>BootCamp on Web Technologies...</h1>
        </div>
        <div class="col-sm-4">
            <a class='btn btn-outline-secondary disabled text-primary'><?php
            echo $_SESSION["username"] ?></a>
            <a href='/bootcamp/createnew.php' class='btn btn-outline-secondary'>Add new</a>
           <a href='/bootcamp/logout.php' class='btn btn-outline-secondary'>Logout</a>

        </div>
      </div>
      </div>
    </header>
    <div class="container">
      <div class="row">
          <?php
          $query = "SELECT * FROM participantsDetails";
          $res = $conn->query($query);
          $count = 1;
          if($res){
            while($r = mysqli_fetch_array($res)){
              $id = $r["id"];
            ?>
              <div class="col-sm-4">
                <div style="border:1px solid #ccc;border-radius:5px;padding:5px;">
                <h5><a href="/bootcamp/details.php?id=<?php echo $id; ?>" style="text-decoration:none;color:#333333;"> <?php echo $r["name"]; ?> </a></h5>
                <h5><small><?php echo $r["email"]; ?></small></h5>
                <h5><?php echo $r["comments"]; ?></h5>
              </div>
              <br/>
            </div>
            <?php
            $count++;
            }
        }
           ?>
     </div>
  </div>
  <?php
  }
  include("footer.php");
} else {
  header("Location:/bootcamp/login.php");
}
?>
  </body>
</html>
