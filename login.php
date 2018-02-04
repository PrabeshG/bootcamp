 <?php 
require_once("dbconn.php"); 
if(!empty($_POST["username"]) && !empty($_POST["password"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $password = md5($password);

  $query = "SELECT * FROM users WHERE username ='".$username."' AND password ='".$password."'";
  $res = $conn->query($query);
  $userData = false;
  if($res){
    $userData = mysqli_fetch_array($res);
  }
  if(!empty($userData)){
    
    $_SESSION['loggedin'] = true;
    $_SESSION["userid"] = $userData["userid"];
    $_SESSION["username"] = $userData["username"];
    $_SESSION["useremail"] = $userData["email"];
    $_SESSION["userfirstname"] = $userData["firstname"];
    $_SESSION["userlastname"] = $userData["lastname"];
  } else {
    header("Location:?error=true");
    die();
  }
}
?>
<!DOCTYPE html>
<html>
<?php  include("head.php"); ?>
<body>
  <?php 
  if(isset($_SESSION['loggedin'])){
  if($_SESSION['loggedin'] == true){
    header("Location:/bootcamp/index.php?loggedin=success");
  }
  }else{
  ?>
    <header style="background-color:#e9ecef;">
      <div class="container">
        <div class="row">
          <div class="col-sm-10">
          <h2 style="color:#bbb; padding-top:5px;">Login To<small> BootCamp on Web Technologies...</small></h2>
        </div>
        <div class="col-sm-2" style="padding-top:10px;">
        </div>
      </div>
      </div>
    </header>

    <div class="container">
      <div class="row">
        <div class="col-sm-4 text-left"></div>
        <div class="col-sm-4">
          <form action="" name="loginForm" method="POST">
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" placeholder="username">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="password">
            </div>
            <div class="form-check"> 
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input"> Remember me
              </label>
              <br/><br/>
            </div>
            <button type="submit" class="btn btn-outline-secondary" name="submit" value="login">Login</button>
            <a href="/bootcamp/register.php" class="btn btn-outline-secondary">Register</a>
            <br/>
              <a href="/bootcamp/forgetpassword.php" class="btn btn-outline-light text-dark">Forget password?</a>
          </form>
        </div>
      </div>
    </div>
    <?php 
    } 
    include("footer.php");
    ?>
</body>
</html>