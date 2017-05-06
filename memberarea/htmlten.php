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
<center><h1>HTML Forms</h1></center><br>
<h3>The &lt;form&gt; Element</h3><br>
HTML forms are used to collect user input.<br>

The &lt;form&gt; element defines an HTML form:<br>
<font color=green>&lt;form&gt;<br>
...<br>
form elements<br>
...<br>
&lt;/form&gt;</font><br>
HTML forms contain form elements.<br>

Form elements are different types of input elements, checkboxes, radio buttons, submit buttons, and more.<hr>
<h3>The &l;tinput&gt; Element</h3><br>
The &lt;input&gt; element is the most important form element.<br>

The &lt;input&gt; element has many variations, depending on the type attribute.<br>

Here are the types:<br><br>

<table class="table table-striped table-bordered" style="width:50%">
<tr>
<th>Type</th>
<th>Description</th>
</tr>
<tr>
<td>text</td>
<td>Defines normal text input</td>
</tr>
<tr>
<td>radio</td>
<td>Defines radio button input (for selecting one of many choices)</td>
</tr>
<tr>
<td>submit</td>
<td>Defines a submit button (for submitting the form)</td>
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
    header('Location: htmlfinished.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
	}
}
?>