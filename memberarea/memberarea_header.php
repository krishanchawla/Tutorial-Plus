<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
  	<img src="./img/tplus_logo.png" style="position:absolute;margin-left:7px;margin-top:5px"/>
    <div class="container"> 
	<a class="brand" href="index.php">Tutorial Plus</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
		    <li class="dropdown">
            <a href="" class="dropdown-toggle" >
			Welcome <?php echo $_SESSION['username']; ?>!
			</a>
			</li>
			<li class="dropdown">
			<a href="logout.php" class="dropdown-toggle" ><i
                            class="icon-user"></i> Log Out</a>
          </li>
        </ul>

      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->