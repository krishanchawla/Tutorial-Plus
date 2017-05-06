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
<center><h1>HTML Elements</h1></center><br>
<h3>HTML Elements</h3><br>
HTML elements are written with a start tag, with an end tag, with the content in between:<br>

<h4>&lt;tagname&gt;content&lt;/tagname&gt;</h4><br>
The HTML element is everything from the start tag to the end tag:<br><br>
<div style="width:50%;">
<table class="table table-striped table-bordered">
<tr>
<th>Start Tag</th>
<th>Element</th>
<th>End Tag</th>
</tr>
<tr>
<td>&lt;h1&gt;</td>
<td>My First Heading</td>
<td>&lt;br&gt;</td>
</tr>
<tr>
<td>&lt;p&gt;</td>
<td>My first paragraph.</td>
<td>&lt;/p&gt;</td>
</tr>
<tr>
<td>&lt;br&gt;</td>
<td></td>
<td></td>
</tr>
</table><hr>
<h3>Empty HTML Elements</h3><br>
HTML elements with no content are called empty elements.<br>

&lt;br&gt; is an empty element without a closing tag (the &lt;br&gt; tag defines a line break).<br>

Empty elements can be "closed" in the opening tag like this: &lt;br /&gt;.<br>

HTML5 does not require empty elements to be closed. But if you want stricter validation, or you need to make your document readable by XML parsers, you should close all HTML elements.<hr>

<h3>HTML Tip: Use Lowercase Tags</h3><br>
HTML tags are not case sensitive: &lt;P&gt; means the same as &lt;p&gt;.<br>

The HTML5 standard does not require lowercase tags, but W3C recommends lowercase in HTML4, and demands lowercase for stricter document types like XHTML.

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
    header('Location: htmlfive.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
	}
}