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

    <header>
      <nav class="navbar navbar-expand-sm fixed-top" style="background-color: #e9ecef;">
      <div class="container">
        <ul class="navbar-nav">
           <a class='btn btn-outline-secondary disabled text-primary' style="margin:5px;"><?php
            echo $_SESSION["username"] ?></a>
            <h4 class="navbar-brand"><a href="/bootcamp/index.php"><i class="fas fa-home"></i></a> Edit Participants </h4>

         <li class="nav-item">
            <a href='/bootcamp/details.php?id=<?php echo $id; ?>' class='btn btn-link' style="margin:5px;text-decoration: none;">Back</a>
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
        <div class="col-sm-6">
          <?php
          $res = $conn->query($query);
          if($res){
            while($r = mysqli_fetch_array($res)){
              ?>
              <form  action="/bootcamp/update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
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
                  <label for="Age">Age</label>
                  <select class="form-control" name="age" placeholder="Select Age">
                    <?php for($age=15;$age<=35;$age++){
                        $selected = '';
                        if($r["age"] == $age){
                          $selected = 'selected="selected"';
                        }
                        ?>
                          <option value="<?php echo $age; ?>" <?php echo $selected; ?>><?php echo $age; ?></option>
                        <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <br/>
                  <label class="radio-inline">
                    <input type="radio" name="gender" <?php echo ($r["gender"]== "male") ? 'checked="checked"' : ""; ?> value="male" />
                    Male
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="gender" <?php echo ($r["gender"]== "female") ? 'checked="checked"' : ""; ?> value="female" />Female
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="gender" <?php echo ($r["gender"]== "other") ? 'checked="checked"' : ""; ?> value="other"/>Other
                  </label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Education</label>
                  <input type="text" class="form-control" name="education" placeholder="education" value="<?php echo $r["education"]; ?>">
                </div>
                <div class="form-group">
                  <label>Semester</label>
                  <input type="text" class="form-control" name="semester" placeholder="semester" value="<?php echo $r["semester"]; ?>">
                </div>
                <div class="form-group">
                  <label>College</label>
                  <input type="text" class="form-control" name="college" placeholder="college" value="<?php echo $r["college"]; ?>">
                </div>
                <div class="form-group">
                  <label>Comments</label>
                  <textarea class="form-control" rows="5" id="comments" name="comments" ><?php echo $r["comments"]; ?></textarea>
                </div>
                <button type="submit" class="btn btn-outline-secondary" name="submit">Save</button>
                <button type="reset" class="btn btn-outline-danger" name="reset">Reset</button>
              </form>
              <?php
            }
          }
          ?>
        </div>
  </div>
    </div>
    <?php include("footer.php"); ?>
  </body>
</html>
