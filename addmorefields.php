<?php require_once("dbconn.php"); ?>
<!DOCTYPE html>
<html>
<?php include("head.php"); ?>
<body>
	<header style="background-color:#e9ecef;">
      <div class="container">
      	<div class="row">
      		<div class="col-sm-10">
          <h2 style="color:#bbb;"><a href="/bootcamp/index.php"><img src="/bootcamp/phplogo.png" alt="php" style="width:50px;"></a>Add More Fields To<small> BootCamp on Web Technologies...</small></h2>
      </div>
      <div class="col-sm-2">
          <a href="/bootcamp/index.php" class="btn btn-link">back</a>
      </div>
  </div>
      </div>
    </header>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<form action="" method="POST">
					<div class="form-group">
						<input type="text" name="fieldname" class="form-control" placeholder="fieldname">
					</div>
					<div class="form-group">
						<input type="text" name="characters" class="form-control" placeholder="characters">
					</div>
					<button type="submit" value="submit" class="btn btn-outline-secondary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>