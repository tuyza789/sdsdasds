<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>               

                    <form action="" method="post" name="login">
                    <span class="login100-form-title">
						Member Login
					</span>
                           <div class="form-group">
						 <label for="exampleInput">Username</label>
						   <input type="text" name="user"  class="form-control" placeholder="Enter Username"required>                         
                           </div>
                           <div class="form-group">
						   <label for="exampleInput">Password</label>
						   <input type="password" name="pwd" class="form-control" placeholder="Enter Password" required>
                           </div>
                           <div class="col-md-12 text-center ">
                              <input type="Submit" class=" btn btn-block mybtn btn-primary tx-tfm"name="Submit" value="LOGIN">
                           </div>
                           <center><div class="col-md-12 ">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or">or</span>
                              </div>
                           </div>
                        <br></center>
                           
                           <div class="form-group">
                           <p class="text-center"><h6>Don't have account? </h6><a href="register.php"  id="signup" class="success"><h6>Sign up here</h6></a></p>
                           </div>
                        </form>
				<?php
							if(isset($_POST['Submit'])){
								include("../connect.php");
								$sql="select * from costomer where cus_user='{$_POST['user']}' and cus_pwd='{$_POST['pwd']}.' LIMIT 1";
								$rs = mysqli_query($conn,$sql);
							    $num = mysqli_num_rows($rs);
	
							if ($num > 0){
								$data = mysqli_fetch_array($rs);
								$_SESSION['ses_id']= $data['cus_user'];
								$_SESSION['ses_name']= $data['cus_pwd'];
								echo "<script>";
								echo "window.location='go.html';";
								echo "</script>";
							}else{
								echo "<script>";
								echo "alert('เข้าไม่ได้');";
								echo "</script>";	
							}
							}
				?>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>