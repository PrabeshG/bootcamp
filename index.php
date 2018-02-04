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
    <header>
      <nav class="navbar navbar-expand-sm fixed-top" style="background-color: #e9ecef;">
      <div class="container">
        <ul class="navbar-nav">
           <a class='btn btn-outline-secondary disabled text-primary' style="margin:5px;"><?php
            echo $_SESSION["username"] ?></a>
            <h4 class="navbar-brand"><a href="/bootcamp/index.php"><i class="fas fa-home"></i></a>BootCamp on Web Technologies... </h4>

            <form class="form-inline" action="/bootcamp/search.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
          </form>

          <li class="nav-item">
             <a href='/bootcamp/createnew.php' class='btn btn-outline-secondary' style="margin:5px;">Add New Kid</a>
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


    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <?php
          $query = "SELECT * FROM participantsDetails";
          $res = $conn->query($query);
          $count = 1;
          if($res){
            while($r = mysqli_fetch_array($res)){
              $id = $r["id"];
            ?>
                <div style="border:1px solid #ccc;border-radius:5px;padding:5px;">
                <div class="row">
                  <div class="col-sm-4">
                    <a href="/bootcamp/details.php?id=<?php echo $id; ?>"><img src="/bootcamp/home.jpg" class="img-fluid img-rounded" ></a>
                  </div>
                  <div class="col-sm-8">
                <h5><a href="/bootcamp/details.php?id=<?php echo $id; ?>" style="text-decoration:none;color:#333333;"> <?php echo $r["name"]; ?> </a></h5>
                <h5><small><?php echo $r["email"]; ?></small></h5>
                <hr/>
                <h5><?php echo $r["comments"]; ?></h5>
              </div>
            </div>
          </div>
          <br/>
            <?php
            $count++;
            }
        }
           ?>
     </div>
     <div class="col-sm-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
