<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/css/style.css">
	
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<link rel="icon"   href="../assets/graphics/app-icon-transparent.png">
	<?php
	session_start();
	require 'class.user.php';
	
	$user = new User();

    if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
		if ( isset( $_REQUEST[ 'submit' ] ) ) {
			extract( $_REQUEST );
			$Email = $user->checkEmail( $uemail );
			if ( $Email ) {
				// Registration Success
				
					header( "location:OTP.php" );;
				
			
			} else {
				// Registration Failed
				$message = "Email incorrect.\\nTry again.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}

			
		}
	}
	

	?>

</head>

<body id="login">
	<script type="text/javascript" language="javascript">
		function submitlogin() {
			

			
	


			var form = document.login;
			if ( form.uemail.value == "" ) {
				alert( "Enter email " );
                
				return false;
			} 
		}
	
	
	</script>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="" method="post" action="sendmail.php" name="login">
					<span class="login100-form-title p-b-26">
						Checking Email
					</span>
				
					<img src="../assets/graphics/app-icon-transparent.png" alt="login-logo" class="app-logo">
					<div class="input-group input-group-icon">
						<input type="email" placeholder="Email" id="emailID" name="uemail"/>
						<div class="input-icon"><i class="fa fa-envelope"></i>
						</div>
					</div>
					

					<div class="input-group">
						<input type="submit" name="submit" value="Send" id="btn_submit" onclick="return(submitlogin());"/>
						<label for="btn_submit"></label>
					</div>


                   
                 <a href="login.php" >Back</a>
                

					<!-- <div class="text-center p-t-115">s
						<span class="txt1">
							Don’t have an account?
						</span>
					

						<a class="txt2" href="registration.php">
							Sign Up
						</a>
					
					</div> -->
					
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	

</body>
</html>