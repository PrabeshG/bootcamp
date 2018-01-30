<?php require_once("dbconn.php"); ?>
<!DOCTYPE html>
<html>
<?php include("head.php"); ?>
<body>
	<header style="background-color:#e9ecef;">
      <div class="container">
        <div class="row">
          <div class="col-sm-10">
          <h2 style="color:#bbb;"><a href="/bootcamp/index.php" class="btn btn-outline-secondary " style="text-decoration: none;">
            Home
          </a> Register To<small> BootCamp on Web Technologies...</small></h2>
        </div>
        <div class="col-sm-2">
        </div>
      </div>
      </div>
    </header>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-4 text-left"></div>
    		<div class="col-sm-4">
    	<form action="/bootcamp/saveregister.php" method="post">
    		<div class="form-group">
    			<label>FIRST NAME</label>
    			<input type="text" name="firstname" placeholder="firstname" class="form-control">
    		</div>
    		<div class="form-group">
    			<label>LAST NAME</label>
    			<input type="text" name="lastname" placeholder="lastname" class="form-control">
    		</div>
    		<div class="form-group">
    			<label>USERNAME</label>
    			<input type="username" name="username" placeholder="username" class="form-control">
    		</div>
    		<div class="form-group">
    			<label>EMAIL</label>
    			<input type="email" name="email" placeholder="email" class="form-control">
    		</div>
    		<div class="form-group">
    			<label>PASSWORD</label>
    			<input type="password" name="password" placeholder="password" class="form-control">
    		</div>
    		<button class="btn btn-outline-secondary" type="submit" name="submit">Submit</button>
            <button class="btn btn-outline-secondary" type="reset" name="reset">Reset</button>
    	</form>
    </div>
</div>
    </div>
    <?php
    include("footer.php");?>
</body>
</html>