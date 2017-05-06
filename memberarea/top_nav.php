<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="index.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
		<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Available Courses</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="learnhtml.php">HTML</a></li>
			<li><a href="learncss.php">Cascading Style Sheet</a></li>
            <li><a href="learnc.php">C Language</a></li>
          </ul>
        </li>
		<li><a href="tryityourself.php"><i class="icon-edit"></i><span>Try It Yourself</span> </a> </li>
		<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-star"></i><span>My awards</span> <b class="caret"></b></a>
		<ul class="dropdown-menu">
		<li style="width:500px;"><?php if ($_SESSION['pagestep'] > 9) 
			{
			print "<img src='./img/award_icon.png'> You have received an award for completing HTML Course"; 
			}
			else print "<h4>You have received no awards</h4>";
			?> </li>
       </ul>
	   <li><a href="faq.php"><i class="icon-list-alt"></i><span>FAQ</span> </a> </li>
	 </li>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->