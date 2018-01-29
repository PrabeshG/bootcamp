<!DOCTYPE html>
<html>
  <?php include("head.php") ?>
  <body>
    <header style="background-color:#e9ecef;">
      <div class="container">
          <h1 style="color:#bbb;"><a href="/bootcamp/home.php"><img src="/bootcamp/phplogo.png" alt="php" style="width:50px;"></a>Add New Participants To<small> BootCamp on Web Technologies...</small></h1>
      </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <form  action="/bootcamp/save.php" method="post">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email">
            </div>
            <div class="form-group">
              <label>Contact Number</label>
              <input type="text" class="form-control" name="contact" placeholder="contact number">
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" name="address" placeholder="address">
            </div>
            <div class="form-group">
              <label>Comments</label>
              <textarea class="form-control" rows="5" id="comments" name="comments" placeholder="comments"></textarea>
            </div>
            <div class="form-group">
              <label for="Age">Age</label>
              <select class="form-control" name="age">
                <?php for($age=15;$age<=35;$age++){
                  ?>
                  <option value="<?php echo $age; ?>"><?php echo $age; ?></option>
                  <?php
                } ?>
              </select>
            </div>
            <div class="form-group">
              <label>Gender</label>
              <br/>
              <label class="radio-inline"><input type="radio" name="gender" value="male" />Male</label>
              <label class="radio-inline"><input type="radio" name="gender" value="female" />Female</label>
              <label class="radio-inline"><input type="radio" name="gender" value="other" />Other</label>
            </div>
            <div class="form-group">
              <label>Education</label>
              <input type="text" class="form-control" name="education" placeholder="education">
            </div>
            <div class="form-group">
              <label>Semester</label>
              <input type="text" class="form-control" name="semester" placeholder="semester">
            </div>
            <div class="form-group">
              <label>College</label>
              <input type="text" class="form-control" name="college" placeholder="college">
            </div>
            <button type="submit" class="btn btn-outline-secondary" name="submit">Create</button>
            <button type="reset" class="btn btn-outline-danger" name="reset">Reset</button>
          </form>
        </div>
    <div class="col-sm-6">
      <img src="/bootcamp/phplogo.png" alt="php" class="img-fluid img-rounded img-responsive">
    </div>
  </div>
    </div>
  </body>
</html>
