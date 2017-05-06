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
<center><h1>HTML Headings</h1></center><br>
<h3>HTML Headings</h3><br>
Headings are defined with the &lt;h1&gt; to &lt;h6&gt; tags.<br>

&lt;h1&gt; defines the most important heading. &lt;h6&gt; defines the least important heading.<hr>
<h3>Headings Are Important</h3><br>
Use HTML headings for headings only. Don't use headings to make text BIG or bold.<br>

Search engines use your headings to index the structure and content of your web pages.<br>

Users skim your pages by its headings. It is important to use headings to show the document structure.<br>

h1 headings should be main headings, followed by h2 headings, then the less important h3, and so on.<hr>

<h3>HTML Tip - How to View HTML Source</h3><br>
Have you ever seen a Web page and wondered "Hey! How did they do that?"<br>

To find out, right-click in the page and select "View Page Source" (in Chrome) or "View Source" (in IE), or similar in another browser. This will open a window containing the HTML code of the page.<br>
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
    header('Location: htmlsix.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
	}
}