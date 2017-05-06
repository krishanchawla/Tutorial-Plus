<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "tut";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

# Krishan's new shit

/* function setNextPage($page, $user) {
	$sql = "UPDATE `users` SET `html_html_pageStep` = html_pageStep + 1 WHERE `Username` = '$user'";
	if(mysql_query($sql)) {
		# Query successfully processed
		return TRUE;
	} else {
		# Page was not able to be saved
		return FALSE;
	}
} */

function getCurrentPage($user) {
	$sql = "SELECT `html_pageStep` FROM `members` WHERE `Username` = '$user'";
	$result = mysqli_query($conn, $sql);
	return $result['pageStep'];
	
}

/* function isCompleted($user) {
	if(getCurrentPage($user) == 10) {
		return TRUE;
		# There are 10 steps, and he's reached step #10
	} else {
		return FALSE;
	}
} */

function hasStarted($user) {
	if(getCurrentPage($user) != 0) {
		# User has at least completed the first step.
		return TRUE;
	} else {
		# He hasn't even started
		return FALSE;
	}
}

# We assume html_pageStep is an INT table with a default of 0
?>