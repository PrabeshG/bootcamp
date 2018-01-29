<?php require_once("dbconn.php") ?>
<!DOCTYPE html>
<html>
  <?php include("head.php") ?>
  <body>
    <?php
    $id = $_GET["id"];
    if($id){
      $query = "SELECT * FROM participantsDetails WHERE id = '".$id."'";
    }
     ?>
    <header style="background-color:#e9ecef;">
      <div class="container">
          <h1 style="color:#bbb;"><a href="/home.php"><img src="/phplogo.png" alt="php" style="width:50px;"></a>Add New Participants To<small> BootCamp on Web Technologies...</small></h1>
      </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <?php
          $res = $conn->query($query);
          if($res){
            while($r = mysqli_fetch_array($res)){
              ?>
              <form  action="/update.php" method="post">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="<?php echo $r["name"]; ?>">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $r["email"]; ?>">
                </div>
                <div class="form-group">
                  <label>Contact Number</label>
                  <input type="text" class="form-control" name="contact" value="<?php echo $r["contact"]; ?>">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" name="address" value="<?php echo $r["address"]; ?>">
                </div>
                <div class="form-group">
                  <label>Comments</label>
                  <textarea class="form-control" rows="5" id="comments" name="comments" value="<?php $r["comments"]; ?>"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-secondary" name="submit">Save</button>
                <button type="reset" class="btn btn-outline-danger" name="reset">Reset</button>
              </form>
              <?php
            }
          }
          ?>
        </div>
    <div class="col-sm-6">
      <img src="/phplogo.png" alt="php" class="img-rounded">
    </div>
  </div>
    </div>
  </body>
</html>
