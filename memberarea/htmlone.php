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
<center><h1>HTML Introduction</h1></center><br>
<h3><b>What is HTML?<b></h3>
HTML is a markup language for describing web documents (web pages).
<ul>
<li>HTML stands for Hyper Text Markup Language</li>
<li>A markup language is a set of markup tags</li>
<li>HTML documents are described by HTML tags</li>
<li>Each HTML tag describes different document content</li>
</ul>
<hr>
<h3><b>Example Explained</b></h3>
<ul>
<li>The DOCTYPE declaration defines the document type to be HTML</li>
<li>The text between &lt;html&gt; and &lt;/html&gt; describes an HTML document</li>
<li>The text between <head&gt; and &lt;/head&gt; provides information about the document</li>
<li>The text between &lt;title&gt; and &lt;/title&gt; provides a title for the document</li>
<li>The text between &lt;body&gt; and &lt;/body&gt; describes the visible page content</li>
<li>The text between &lt;h1&gt; and &lt;/h1&gt; describes a heading</li>
<li>The text between &lt;p&gt; and &lt;/p&gt; describes a paragraph</li>
<li>Using this description, a web browser can display a document with a heading and a paragraph.</li>
</ul>
<hr>
<center>
<h3><b>HTML Tags</b></h3>
HTML tags are keywords (tag names) surrounded by angle brackets:
<br>
<h3><font color=red>&lt;tagname&gt;content&lt;/tagname&gt;</font></h3>
HTML tags normally come in pairs like &lt;p&gt; and &lt;/p&gt;<br>
The first tag in a pair is the start tag, the second tag is the end tag<br>
The end tag is written like the start tag, but with a slash before the tag name
</center>
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
    header('Location: htmltwo.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
	}
}