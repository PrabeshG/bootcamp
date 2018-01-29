<?php
require_once("dbconn.php");
 ?>
<!DOCTYPE html>
<html>
  <?php include("head.php") ?>
  <body>
    <?php
    $query = "SELECT * FROM participantsDetails";
     ?>
    <header class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col-sm-10">
      <h1 class="text-center" id="head_title"><a href="/bootcamp/home.php"><img src="/bootcamp/phplogo.png" alt="php" style="width:60px;"></a>BootCamp on Web Technologies...</h1>
        </div>
        <div class="col-sm-2">
            <a href="/bootcamp/createnew.php" class="btn btn-outline-secondary">Add New</a>
        </div>
      </div>
      </div>
    </header>
    <div class="container">
      <div class="row">
          <?php
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
  </body>
</html>
