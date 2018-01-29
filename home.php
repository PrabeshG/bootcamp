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
      <h1 class="text-center" id="head_title"><a href="/home.php"><img src="/phplogo.png" alt="php" style="width:60px;"></a>BootCamp on Web Technologies...</h1>
        </div>
        <div class="col-sm-2">
            <a href="/bootcamp/createnew.php" class="btn btn-outline-secondary">Add New</a>
        </div>
      </div>
      </div>
    </header>
    <div class="container">

       <!-- table required to show the user info -->
       <div class="table-responsive">
       <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Address</th>
            <th>Comments</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $res = $conn->query($query);
          $count = 1;
          if($res){
            while($r = mysqli_fetch_array($res)){
              $id = $r["id"];
            ?>
              <tr>
                <td><a href="/bootcamp/details.php?id=<?php echo $id; ?>"><?php echo $count; ?></a></td>
                <td><?php echo $r["name"]; ?></td>
                <td><?php echo $r["email"]; ?></td>
                <td><?php echo $r["contact"]; ?></td>
                <td><?php echo $r["address"]; ?></td>
                <td><?php echo $r["comments"]; ?></td>
              </tr>
            <?php
            $count++;
            }
        }
           ?>
        </tbody>
       </table>
     </div>
  </div>
  </body>
</html>
