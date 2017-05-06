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
<center><h1>HTML Text Formatting Elements</h1></center><br>
<h3>HTML Formatting Elements</h3><br>
In the previous chapter, you learned about HTML styling, using the HTML style attribute.<br>

HTML also defines special elements, for defining text with a special meaning.<br>

HTML uses elements like &lt;b&gt; and &lt;i&gt; for formatting output, like bold or italic text.<br>

Formatting elements were designed to display special types of text:<br>
<ul>
<li>Bold text</li>
<li>Important text</li>
<li>Italic text</li>
<li>Emphasized text</li>
<li>Marked text</li>
<li>Small text</li>
<li>Deleted text</li>
<li>Inserted text</li>
<li>Subscripts</li>
<li>Superscripts</li>
</ul><br>
The HTML &lt;b&gt; element defines bold text, without any extra importance.<br>
The HTML &lt;strong&gt; element defines strong text, with added semantic "strong" importance.<br>
The HTML &lt;i&gt; element defines italic text, without any extra importance.<br>
The HTML &lt;em&gt; element defines emphasized text, with added semantic importance.<br>


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
    header('Location: htmlseven.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
	}
}