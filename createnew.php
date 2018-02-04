<?php require_once("dbconn.php"); 

?>
<!DOCTYPE html>
<html>
  <?php include("head.php") ?>
  <body>
    <header>
      <nav class="navbar navbar-expand-sm fixed-top" style="background-color: #e9ecef;">
      <div class="container">
        <ul class="navbar-nav">
           <a class='btn btn-outline-secondary disabled text-primary' style="margin:5px;"><?php
            echo $_SESSION["username"] ?></a>
            <h4 class="navbar-brand"><a href="/bootcamp/index.php"><i class="fas fa-home"></i></a>Add new Participants</h4>
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
        <div class="col-sm-6">
          <form  action="/bootcamp/save.php" method="post">
            <div class="form-group">
              <label>NAME</label>
              <input type="text" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group">
              <label>EMAIL</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email">
            </div>
            <div class="form-group">
              <label>CONTACT NUMBER</label>
              <input type="text" class="form-control" name="contact" placeholder="contact number">
            </div>
            <div class="form-group">
              <label>ADDRESS</label>
              <input type="text" class="form-control" name="address" placeholder="address">
            </div>
            <div class="form-group">
              <label for="Age">AGE</label>
              <select class="form-control" name="age">
                <?php for($age=15;$age<=35;$age++){
                  ?>
                  <option value="<?php echo $age; ?>"><?php echo $age; ?></option>
                  <?php
                } ?>
              </select>
            </div>
            <div class="form-group">
              <label>GENDER</label>
              <br/>
              <label class="radio-inline"><input type="radio" name="gender" value="male" />Male</label>
              <label class="radio-inline"><input type="radio" name="gender" value="female" />Female</label>
              <label class="radio-inline"><input type="radio" name="gender" value="other" />Other</label>
            </div>
            </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>EDUCATION</label>
              <input type="text" class="form-control" name="education" placeholder="education">
            </div>
            <div class="form-group">
              <label>SEMESTER</label>
              <input type="text" class="form-control" name="semester" placeholder="semester">
            </div>
            <div class="form-group">
              <label>COLLEGE</label>
              <input type="text" class="form-control" name="college" placeholder="college">
            </div>
            <div class="form-group">
              <label>COMMENTS</label>
              <textarea class="form-control" rows="5" id="comments" name="comments" placeholder="comments"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-secondary" name="submit">Create</button>
            <button type="reset" class="btn btn-outline-danger" name="reset">Reset</button>
            <!-- <a href="/bootcamp/addmorefields.php" class="btn btn-outline-secondary">Add more fields</a> -->
          </form>
        </div>
  </div>
    </div>
    <?php include("footer.php"); ?>
  </body>
</html>
