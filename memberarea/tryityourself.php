<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: ./../login.php'); } 

//define page title
$title = 'Members Page';
$_SESSION['skill']=10;
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
<script type="text/javascript">
function data_submit()
{
document.tiy.txt_data.value = document.tiy.txt_html.value;
 }
</script>

</head>
<body>
<?php 
include("memberarea_header.php"); 
include("top_nav.php");
 ?>

<?php
 if(isset($_POST['bt_submit']))
 {
 $file = "try_it.php";
 $fp = fopen($file, 'w');
 $content = $_POST['txt_data'];
 fwrite($fp, $content);
  fclose($fp);
  }
 ?>

 <body>
  
  <form name="tiy" id="tiy" method="post" action="" >
    <center>
	<table style="background-color:#CEE2FF !important" bordercolor width="98%" cellspacing="0" cellpadding="0" >
	<tr>
		<td colspan=2 style="height:40px"><center><h2>Welcome to Tutorial Plus Try it Yourself Editor!</h2></center></td>
	</tr>
     <tr>
        <td width="50%" >
		<input type="hidden" name="txt_data" value="" style="visibility:hidden;" />
         <center><textarea style="width: 97%; height: 97%;" rows="23"  height="400px" cols="200" name="txt_html"><?php
 if(isset($_POST['bt_submit']))
 {
 echo trim($content);
  }
  else
  {
  echo "<html>\n";
echo "<body>\n";

echo "<h3>Welcome to Tutorial Plus Try it yourself editor</h3>\n";

echo "</body>\n";
echo "</html>\n";
 } ?>
    </textarea></center>
          </td>
        <td width="100%" style="border-width:10px;border-style:none;">
         <center><iframe style="background-color:white" height="420px" width="97%" src="try_it.php" name="iframe_a"></iframe></center>
         </td>
		 </tr>
		<tr style="height:40px">
      <td align=center><input type="submit" name="bt_submit" value="Click to Execute " class="button btn btn-primary" onClick="data_submit();"/></td>
      <td align="center"><h3><b>Output</b></h3></td>
    </tr>
    </table>
  </form>
  </div>
  </div>
  </body>

  </html>
  
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>