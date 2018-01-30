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
          <div class="col-sm-9">
          <h2 style="color:#bbb; padding-top:5px;"><a href="/bootcamp/index.php"><img src="/bootcamp/phplogo.png" alt="php" style="width:50px;"></a>Details of Participants on<small> BootCamp on Web Technologies...</small></h2>
        </div>
        <div class="col-sm-3" style="padding-top:10px;">
          <a class="btn btn-link" href="/bootcamp/index.php" style="text-decoration: none;"> Back</a>
            <a class="btn btn-outline-secondary" href="/bootcamp/edit.php?id=<?php echo $id; ?>">Edit</a>
            <a class="btn btn-outline-danger" href="/bootcamp/delete.php?id=<?php echo $id; ?>">Delete</a>
        </div>
      </div>
      </div>
    </header>
<br/>
    <div class="container">
          <?php
          $res = $conn->query($query);
          if($res){
            while($r = mysqli_fetch_array($res)){
              ?>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>NAME</small> </h5>
                </div>
                <div class="col-sm-6">
                  <h5><?php echo $r["name"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>EMAIL</small> </h5>
                </div>
                <div class="col-sm-6">
                  <h5><?php echo $r["email"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>CONTACT</small> </h5>
                </div>
                <div class="col-sm-6">
                  <h5><?php echo $r["contact"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>ADDRESS</small> </h5>
                </div>
                <div class="col-sm-6">
                  <h5><?php echo $r["address"]; ?></h5>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-3">
                  <h5><small>AGE</small> </h5>
                </div>
                <div class="col-sm-6">
                  <h5><?php echo $r["age"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>GENDER</small> </h5>
                </div>
                <div class="col-sm-6">
                  <h5><?php echo $r["gender"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>EDUCATION</small> </h5>
                </div>
                <div class="col-sm-6">
                  <h5><?php echo $r["education"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>SEMESTER</small> </h5>
                </div>
                <div class="col-sm-6">
                  <h5><?php echo $r["semester"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>COLLEGE</small> </h5>
                </div>
                <div class="col-sm-6">
                  <h5><?php echo $r["college"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>COMMENTS</small> </h5>
                </div>
                <div class="col-sm-6" style="border:2px solid #ccc;border-radius:5px">
                  <p><?php echo $r["comments"]; ?></p>
                </div>
              </div>
              <?php
            }
          }
           ?>
    </div>
<?php include("footer.php"); ?>
  </body>
</html>
