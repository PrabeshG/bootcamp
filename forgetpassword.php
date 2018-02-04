<?php
require_once("dbconn.php");

if(!empty($_POST["email"])){

	$email = $_POST["email"];
	echo $email;
	$query = "SELECT * FROM users WHERE email = '".$email."'";

	$res = $conn->query($query);
	if($res){
		$r = mysqli_fetch_array($res);
	}
	if(!empty($r)){
		if($email == $r["email"]){
			$msg = "Dear ".$r["firstname"]." ".$r["lastname"].",<br/>";
			$msg = wordwrap($msg,70);
			$headers .= 'From: Your name <infotechrusher@gmail.com>' . "\r\n";
			mail("'".$email."'", "forget password",$msg,$headers);
		}else{
			header("Location:/bootcamp/emessage.php");
		}
	}else{
		header("Location:/bootcamp/message.php");
	}
}else{
?>
<!DOCTYPE html>
<html>
<?php include("head.php"); ?>
<body>
	<header style="background-color:#e9ecef;">
	  <div class="container">
	    <div class="row">
	      <div class="col-sm-10">
	      <h2 style="color:#bbb; padding-top:5px;"><a href="/bootcamp/index.php" class="btn btn-outline-secondary">
	        Home
	        <!-- <img src="/bootcamp/phplogo.png" alt="php" style="width:50px;"> -->
	      </a> Forget Password<small> BootCamp on Web Technologies...</small></h2>
	    </div>
	    <div class="col-sm-2" style="padding-top:10px;">
	    	<a href="/bootcamp/login.php" class="btn btn-link" style="text-decoration: none;">Back</a>
	    </div>
	  </div>
	  </div>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-sm-3 text-left">
			</div>
			<div class="col-sm-6">
				<form action="" method="post">
					<div class="form-group">
						<br/><br/>
						<label>Enter your Email</label>
						<input type="email" name="email" class="form-control" placeholder="put your email">
					</div>
					<button class="btn btn-outline-secondary" name="submit" value="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
}
?>