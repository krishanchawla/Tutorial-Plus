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
<center><h1>HTML Comments</h1></center><br>
<h3>HTML Comment Tags</h3>
You can add comments to your HTML source by using the following syntax:<br>
<font color=green>&lt;!-- Write your comments here --&gt;</font><br>
Comments are not displayed by the browser, but they can help document your HTML.<br>

With comments you can place notifications and reminders in your HTML:<br>
<font color=green>&lt;!-- This is a comment --&gt;<br>

&lt;p&gt;This is a paragraph.&lt;/p&gt;<br>

&lt;!-- Remember to add more information here --&gt;<br></font>
Comments are also great for debugging HTML, because you can comment out HTML lines of code, one at a time, to search for errors:<br>
<font color=green>&lt;!-- Do not display this at the moment<br>
&lt;img border="0" src="pic_mountain.jpg" alt="Mountain"&gt;<br>
--&gt;</font><hr>

<h3>Software Program Tags</h3><br>
HTML comments tags can also be generated by various HTML software programs.<br>

For example &lt;!--webbot bot--&gt; tags wrapped inside HTML comments by FrontPage and Expression Web.<br>

As a rule, let these tags stay, to help support the software that created them.<br>


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
    header('Location: htmleight.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
	}
}