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
<center><h1>HTML Editors</h1></center><br>
<h3>Write HTML Using Notepad or TextEdit</h3>
HTML can be edited by using professional HTML editors like:<br>
<ul>
<li>Microsoft WebMatrix</li>
<li>Sublime Text</li>
</ul>
However, for learning HTML we recommend a text editor like Notepad (PC) or TextEdit (Mac).<br>

We believe using a simple text editor is a good way to learn HTML.<br>

Follow the 4 steps below to create your first web page with Notepad.
<hr>
<h3><b>Step 1: Open Notepad<b></h3><br>
To open Notepad in Windows 7 or earlier:<br>

Click Start (bottom left on your screen). Click All Programs. Click Accessories. Click Notepad.<br>

To open Notepad in Windows 8 or later:<br>

Open the Start Screen (the window symbol at the bottom left on your screen). Type Notepad.
<hr>
<h3><b>Step 2: Write Some HTML</b></h3><br>

Write or copy some HTML into Notepad.<br>
<img src="./img/html_two_one.png"><br>
<img src="./img/html_two_two.png"><hr>
<h3>Step 3: Save the HTML Page</h3><br>
Save the file on your computer.<br>

Select File > Save as in the Notepad menu.<br>

Name the file "index.html" or any other name ending with html or htm.<br>

UTF-8 is the preferred encoding for HTML files.<br>

ANSI encoding covers US and Western European characters only.<br>

<h3>Step 4: View HTML Page in Your Browser</h3><br>
Open the saved HTML file in your favorite browser. The result will look much like this:<br>
<img src="./img/html_two_three.png"><br>

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
    header('Location: htmlthree.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
	}
}