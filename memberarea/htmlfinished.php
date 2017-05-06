<?php require('htmltut/krishan_func.php');
require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: ./../login.php'); } 

//define page title
$title = 'Members Page';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Tutorial Plus</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<link href="css/pages/reports.css" rel="stylesheet">

</head>
<body>

<?php 
include("memberarea_header.php"); 
include("top_nav.php");
$user= $_SESSION['username'];
?>
<div class="content" style="margin-left:20px;">
<center><h1>HTML Course Completed!</h1><br>
<img src="./img/award.png"></center>
</div> <br>
<center><h1>Congratulations! You have completed the course</h1></center> <br>    		

		<right><form method="post" action="" autocomplete="off">
		<center><input type="submit" name="next" value="Go back to Dashboard" class="button btn btn-success btn-large" tabindex="5"></center>	
		</form></right>


<?php 
if (isset($_POST['next'])) {
    header('Location: index.php');

}
?>