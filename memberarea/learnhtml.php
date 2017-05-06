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

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT `html_pageStep` FROM `members` WHERE `Username` = '$user'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
$pagestep= $row['html_pageStep'];
}
}
$progress_chart = $pagestep * 36;
$progress_chart_reduce  = 360 - $progress_chart;
$progress_user = $pagestep *10;
?>
<table align="center">
<tr>
<td>
<div class="span6">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-star"></i>
						<h3>Your HTML Skill Chart</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
					<center><h1>HTML</h1>
					<h3>Hyper Text Markup Language</h3><br></center>
						<canvas id="pie-chart" class="chart-holder" height="250" width="410"></canvas>
					<center><h3>Your Current Progress : <?php echo $progress_user; ?>%</h3><br></center>
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->	 
		<form role="form" method="post" action="" autocomplete="off">
		<center><input type="submit" name="submit" value="<?php if ($pagestep > 0) print "Continue Tutorial"; else print "Begin the Tutorial"; ?>" class="button btn btn-success btn-large" tabindex="5"></center>	
		</form> 
 </div>
</td>
</tr>
</table>

<?php
if (isset($_POST['submit']))
{
switch($pagestep) {
case '0': header('Location: htmlone.php');
break;
case '1': header('Location: htmltwo.php');
break;
case '2': header('Location: htmlthree.php');
break;
case '3': header('Location: htmlfour.php');
break;
case '4': header('Location: htmlfive.php');
break;
case '5': header('Location: htmlsix.php');
break;
case '6': header('Location: htmlseven.php');
break;
case '7': header('Location: htmleight.php');
break;
case '8': header('Location: htmlnine.php');
break;
case '9': header('Location: htmlten.php');
break;
case '10': header('Location: htmlfinished.php');
break;
}
}

mysqli_close($conn);
?>

<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
<script>

    var pieData = [
				{
				    value: <?php echo $progress_chart; ?>,
				    color: "#F38630"
				},
				{
				    value: <?php echo $progress_chart_reduce; ?>,
				    color: "#69D2E7"
				}

			];

    var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);
	
	</script> 