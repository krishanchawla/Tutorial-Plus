<?php
//include config
require_once('includes/config.php');

//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: ./memberarea'); } 

//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($user->login($username,$password)){ 
		$_SESSION['username'] = $username;
		header('Location: ./memberarea');
		exit;
	
	} else {
		$error[] = 'Wrong username or password';
	}

}//end if submit

//define page title
$title = 'Login';

?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>Login - Tutorial Plus</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

</head>
<body>

<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<img src="./img/tplus_logo.png" style="position:fixed;margin-left:-35px;margin-top:5px"/>
    <div class="container"> 
	<a class="brand" href="index.php">Tutorial Plus</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="signup.php" class="">
							Don't have an account?
						</a>
						
					</li>
					
					<li class="">						
						<a href="index.php" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->	

	
	<div class="account-container">

	

	    <div class="content clearfix">
			<form role="form" method="post" action="" autocomplete="off">
			 <div class="login-fields">
				<h2>Please Provide your details</h2>
				<center><p><a href='./'>Back to home page</a></p></center>
				
				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo "<div class='alert'>".$error."</div>";
					}
				}

				if(isset($_GET['action'])){

					//check the action
					switch ($_GET['action']) {
						case 'reset':
							echo "<h2 class='bg-success'>Please check your inbox for a reset link.</h2>";
							break;
						case 'resetAccount':
							echo "<h2 class='bg-success'>Password changed, you may now login.</h2>";
							break;
					}

				}

				
				?>
				<div class="field">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" class="login username-field" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
				</div>

				<div class="field">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" class="login password-field" placeholder="Password" tabindex="3" >
				</div>
				
				</div>
				
				
				<div class="field">
					<input type="submit" name="submit" value="Login" class="button btn btn-success btn-large" tabindex="5">
				</div>
				<div class="login-extra">
						 <a href='reset.php'>Forgot your Password?</a>
					</div>
			</form>
		</div>
	</div>
  </div>
  </div>
</div>


<?php 
//include header template
require('layout/footer.php'); 
?>
