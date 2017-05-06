<?php require('/includes/config.php'); 

if(!$user->is_logged_in()){ header('Location: ./../login.php'); } 
$user = $_SESSION['username'];
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
 ?>

<center><h3>Welcome to Tutorial Plus!</h3></center><br><br>
<div style="margin-left:20px;">
<b>Q1. What is this website about</b><br>
This website id development for College project.
<hr>
<b>Q2. Who is working on this project?</b><br>
This project is under development by BCA - Vth year students.
<hr>
<b>Q3. Who is guiding for the project?</b><br>
The project is being developed under the guidence of Mister Neeraj Mishra.<hr>
<b>Reference?</b><br>
www.w3schools.com<br>
www.codeacademy.com
</div>
<!-- /main -->
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>

</body>
</html>


