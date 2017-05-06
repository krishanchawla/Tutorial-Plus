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
<center><h1>HTML Images</h1></center><br>
<h3>HTML Images Syntax</h3><br>
In HTML, images are defined with the &lt;img&gt; tag.<br>

The &lt;img&gt; tag is empty, it contains attributes only, and does not have a closing tag.<br>

The src attribute specifies the URL (web address) of the image:<br>
<font color=green>&lt;img src="url" alt="some_text"&gt;</font>
<hr>

<h3>The alt Attribute</h3><br>
The alt attribute specifies an alternate text for an image, if the image cannot be displayed.<br>

The alt attribute provides alternative information for an image if a user for some reason cannot view it (because of slow connection, an error in the src attribute, or if the user uses a screen reader).<br>

If a browser cannot find an image, it will display the alt text:<br>
<font color=green>&lt;img src="wrongname.gif" alt="HTML5 Icon" style="width:128px;height:128px;"&gt;</font>
<h3>

<h3>Image Size - Width and Height</h3><br>
You can use the style attribute to specify the width and height of an image.<br>

The values are specified in pixels (use px after the value):<br>
<font color=green>&lt;img src="html5.gif" alt="HTML5 Icon" style="width:128px;height:128px;"&gt;</font><br>

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
    header('Location: htmlnine.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
	}
}