<?php require('/includes/config.php'); 
require('./htmltut/krishan_func.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: ./../login.php'); } 
$user = $_SESSION['username'];
//define page title
$title = 'Members Page';

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
$_SESSION['pagestep'] = $pagestep;
$progress_user = $pagestep *10;
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

 <center><h3>Welcome to Tutorial Plus <?php echo $_SESSION['username']; ?>!</h3></center><br>
 <table witdh=30% align=center>
 <tr>
 <td>
 <div class="span6">
	      		
	      		<div class="widget" style="align:center;">
						
					<div class="widget-header">
						<i class="icon-star"></i>
						<h3>Your progress Chart</h3>
					</div> 
					<div class="widget-content">
					<!-- /widget-header --><br>
					<h4>HTML <?php echo "(".$progress_user."%)"; ?></h4>
					<div class="progress progress-striped active" style="width:95%;">
                    <div class="bar" style="width: <?php echo $progress_user; ?>%"></div>       
					</div>
					<h4>CSS (Pending Development)</h4>
					<div class="progress progress-striped active" style="width:95%;">
                    <div class="bar" style="width: 10%"></div>
					</div>
					
						
				</div> <!-- /widget -->	
		    </div>
</td>		
</tr>
</table>	

<div class="info-box" style=" margin-left:50px;margin-right:50px;width:90%;height:150px">
               <div class="info-box">
               <div class="row-fluid stats-box">
                  <div class="span4" style="height:150px;">
                  	<div class="stats-box-title">Our Courses</div>
                    <div class="stats-box-all-info"><i class="icon-user" style="color:#3366cc;"></i> 3
					<br><br><h5>We are yet developing and offering 3 different courses for your convience.</div>
                  </div>
                  
                  <div class="span4" style="height:150px;">
                    <div class="stats-box-title">Our All new Try it Yourself Editor!</div>
                    <div class="stats-box-all-info"><i class="icon-edit"  style="color:#F30"></i> TIY!<br><br><h5>We provide our whole new Try it Yourself editor which lets you test your HTMl skills anytime, anywhere. Click on 'Try it Yourself' on top to use it!</div>
                  </div>
                  
                  <div class="span4" style="height:150px;">
                    <div class="stats-box-title">Your awards!</div>
                    <div class="stats-box-all-info"><i class="icon-star-empty" style="color:#3C3"></i><br><h5>Why not check your own Awards gained? Everytime you complete any of our courses you receive an award in your dashboard!</div>
                  </div>
               </div>
               
               
             </div>
               
               
             </div>		
<!-- /main -->
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
<script>

    var pieData = [
				{
				    value: <?php echo $_SESSION['skill']; ?>,
				    color: "#F38630"
				},
				{
				    value: 2,
				    color: "#E0E4CC"
				},
				{
				    value: 100,
				    color: "#69D2E7"
				}

			];

    var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);

	var pieData2 = [
				{
				    value: <?php echo $pagestep; ?>,
				    color: "#F38630"
				},
				{
				    value: 2,
				    color: "#E0E4CC"
				},
				{
				    value: 100,
				    color: "#69D2E7"
				}

			];

    var myPie = new Chart(document.getElementById("pie-chart2").getContext("2d")).Pie(pieData2);
	
    var barChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

    }

    var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart1").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart2").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart3").getContext("2d")).Bar(barChartData);
	
	</script> 

</body>
</html>


