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
    <header>
      <nav class="navbar navbar-expand-sm fixed-top" style="background-color: #e9ecef;">
      <div class="container">
        <ul class="navbar-nav">
           <a class='btn btn-outline-secondary disabled text-primary' style="margin:5px;"><?php
            echo $_SESSION["username"] ?></a>
             <h4 class="navbar-brand"><a href="/bootcamp/index.php"><i class="fas fa-home"></i></a> Details of Participants </h4>
            <li class="nav-item">
            <a href='/bootcamp/index.php' class='btn btn-link' style="margin:5px;text-decoration: none;">Back</a>
          </li>
          
          <li class="nav-item">
            <a href='/bootcamp/blog.php' class='btn btn-outline-secondary' style="margin:5px;">Blog</a>
          </li>
          <li class="nav-item">
             <a href='/bootcamp/logout.php' class='btn btn-outline-secondary' style="margin:5px;">Logout</a>
          </li>
        </ul>
    </nav>
    <br/><br/><br/><br/>
    </header>
<br/>
    <div class="container">
      <div style="border:1px solid #ddd;border-radius: 5px;padding:10px;">
          <?php
          $res = $conn->query($query);
          if($res){
            while($r = mysqli_fetch_array($res)){
              ?>
              <div class="row">
                <div class="col-sm-8">

              <div class="row">
                <div class="col-sm-3">
                  <h5><small>NAME</small> </h5>
                </div>
                <div class="col-sm-9">
                  <h5><?php echo $r["name"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>EMAIL</small> </h5>
                </div>
                <div class="col-sm-9">
                  <h5><?php echo $r["email"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>CONTACT</small> </h5>
                </div>
                <div class="col-sm-9">
                  <h5><?php echo $r["contact"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>ADDRESS</small> </h5>
                </div>
                <div class="col-sm-9">
                  <h5><?php echo $r["address"]; ?></h5>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-3">
                  <h5><small>AGE</small> </h5>
                </div>
                <div class="col-sm-9">
                  <h5><?php echo $r["age"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>GENDER</small> </h5>
                </div>
                <div class="col-sm-9">
                  <h5><?php echo $r["gender"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>EDUCATION</small> </h5>
                </div>
                <div class="col-sm-9">
                  <h5><?php echo $r["education"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>SEMESTER</small> </h5>
                </div>
                <div class="col-sm-9">
                  <h5><?php echo $r["semester"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>COLLEGE</small> </h5>
                </div>
                <div class="col-sm-9">
                  <h5><?php echo $r["college"]; ?></h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5><small>COMMENTS</small> </h5>
                </div>
                <div class="col-sm-9">
                  <p><?php echo $r["comments"]; ?></p>
                </div>
              </div>
            </div>
             <div class="col-sm-4">
                <img src="/bootcamp/home.jpg" class="rounded img-fluid ">
                <br/><br/>
                
                <a href="/bootcamp/edit.php?id=<?php echo $id; ?>" class="btn btn-outline-secondary">Edit</a>
                <a href="/bootcamp/delete.php?id=<?php echo $id; ?>" class="btn btn-outline-secondary">Delete</a>
              
            </div>
      </div>
    </div>
  </div>
<?php 
      }
   }
include("footer.php"); 
?>
  </body>
</html>
