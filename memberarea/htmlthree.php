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
<center><h1>HTML Basic</h1></center><br>
<h3>HTML Documents</h3>
All HTML documents must start with a type declaration: <b>&lt;!DOCTYPE html&gt;</b>.<br>

The HTML document itself begins with <b>&lt;html&gt;</b> and ends with <b>&lt;/html&gt</b>.<br>

The visible part of the HTML document is between <b>&lt;body&gt;</b> and <b>&lt;/body&gt</b>.<hr>

<h3>HTML Headings</h3><br>
HTML headings are defined with the <b>&lt;h1&gt;</b> to <b>&lt;h6&gt;</b> tags.<hr>

<h3>HTML Paragraphs</h3><br>
HTML paragraphs are defined with the <b>&lt;p&gt;</b> tag<hr>
<h3>HTML Links.</h3><br>
HTML links are defined with the <b>&lt;a&gt;</b> tag.<hr>
<h3>HTML Images</h3><br>
HTML images are defined with the <b>&lt;img&gt;</b. tag.<br>

<center><h3>You can use our Try it yourself Editor to test it!</h3></center>

</div>      		
 <br>
		<right><form method="post" action="" autocomplete="off">
		<center><input type="submit" name="next" value="Next Page" class="button btn btn-success btn-large" tabindex="5"></center>	
		</form></right>


<?php 
if (isset($_POST['next'])) {
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE members set `html_pageStep` = `html_pageStep` + 1 WHERE `Username` = '$user'";
if (mysqli_query($conn, $sql)) {
    header('Location: htmlfour.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
	}
}