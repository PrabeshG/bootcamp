<?php require_once("dbconn.php") ?>
<!DOCTYPE html>
<html>
  <?php include("head.php") ?>
  <body>
    <?php
    $id = $_GET["id"];
    if($id){
      $query = "SELECT * FROM participantsDetails WHERE id = '".$id."'";
    }?>
    <header style="background-color:#e9ecef;">
      <div class="container">
        <div class="row">
          <div class="col-sm-10">
          <h2 style="color:#bbb; padding-top:5px;"><a href="/home.php"><img src="/phplogo.png" alt="php" style="width:50px;"></a>Details of Participants on<small> BootCamp on Web Technologies...</small></h2>
        </div>
        <div class="col-sm-2" style="padding-top:10px;">
            <a class="btn btn-outline-secondary" href="/edit.php?id=<?php echo $id; ?>">Edit</a>
        </div>
      </div>
      </div>
    </header>
<br/>
    <div class="container">
          <?php
          $re = $conn->query($query);
          if($re){
            while($r = mysqli_fetch_array($re)){
              ?>
              <div class="row">
                <div class="col-sm-3">
                  <h3><small>NAME</small> </h3>
                </div>
                <div class="col-sm-6">
                  <h4><?php echo $r["name"]; ?></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h3><small>EMAIL</small> </h3>
                </div>
                <div class="col-sm-6">
                  <h4><?php echo $r["email"]; ?></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h3><small>CONTACT</small> </h3>
                </div>
                <div class="col-sm-6">
                  <h4><?php echo $r["contact"]; ?></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h3><small>ADDRESS</small> </h3>
                </div>
                <div class="col-sm-6">
                  <h4><?php echo $r["address"]; ?></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h3><small>COMMENTS</small> </h3>
                </div>
                <div class="col-sm-6" style="border:2px solid #ccc;border-radius:5px">
                  <h4><?php echo $r["comments"]; ?></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h3><small>AGE</small> </h3>
                </div>
                <div class="col-sm-6">
                  <h4><?php echo $r["age"]; ?></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h3><small>GENDER</small> </h3>
                </div>
                <div class="col-sm-6">
                  <h4><?php echo $r["gender"]; ?></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h3><small>EDUCATION</small> </h3>
                </div>
                <div class="col-sm-6">
                  <h4><?php echo $r["education"]; ?></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h3><small>SEMESTER</small> </h3>
                </div>
                <div class="col-sm-6">
                  <h4><?php echo $r["semester"]; ?></h4>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h3><small>COLLEGE</small> </h3>
                </div>
                <div class="col-sm-6">
                  <h4><?php echo $r["college"]; ?></h4>
                </div>
              </div>
              <?php
            }
          }
           ?>
    </div>

  </body>
</html>
