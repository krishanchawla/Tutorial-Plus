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
<center><h1>HTML Lists</h1></center><br>
<h3>HTML Lists</h3><br>
Unordered lists and ordered lists are commonly used in HTML:<br><br>
<table width=50%>
<tr>
<td><b>Unordered List</b></td>
<td><b>Ordered List</b></td>
</tr>
<tr>
<td>
<ul><li>The First Item</li></ul>
</td>
<td>
<ol><li>The First Item</li></ol>
</td>
<tr>
<tr>
<td>
<ul><li>The Second Item</li></ul>
</td>
<td>
<ol start="2"><li>The Second Item</li></ol>
</td>
<tr>
<tr>
<td>
<ul><li>The Third Item</li></ul>
</td>
<td>
<ol start="3"><li>The Third Item</li></ol>
</td>
<tr>
</table>
<hr>

<h3>Ordered HTML Lists - The Type Attribute</h3><br>
A type attribute can be added to an ordered list, to define the type of the marker:<br><br>
<table class="table table-striped table-bordered" style="width:50%">
<tr>
<th>Type</th>
<th>Description</th>
</tr>
<tr>
<td>type="1"</td>
<td>The list items will be numbered with numbers (default)</td>
</tr>
<tr>
<td>type="A"</td>
<td>The list items will be numbered with uppercase letters</td>
</tr>
<tr>
<td>type="a"</td>
<td>The list items will be numbered with lowercase letters</td>
</tr>
<tr>
<td>type="I"</td>
<td>The list items will be numbered with uppercase roman numbers</td>
</tr>
<tr>
<td>type="i"</td>
<td>The list items will be numbered with lowercase roman numbers</td>
</tr>
</table>
</div> <br>     		

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
    header('Location: htmlten.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
	}
}