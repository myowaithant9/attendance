<html>
	<head>
		<title>Student Registration System</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
	<script type="text/javascript">
		function confirmDelete(){
		var x=confirm("Are you sure you want to logout?");
		if(x)return  true;
		else return false;
		}
		</script>
		<div id="main">
		<nav>
		<ul class="menu" id="nav">
		<li><img alt="systemlogo" src="images/b.png" width="50px"
		height="50px"></li>
	<li>
	<h1
		style="font-size: 25px; padding-top: 25px; padding-left: 5px; color: white;">Student Management Information System</h1>
	<li><a href="home.php"><img alt="home" src="images/mf9.jpg" width="30px" height="30px"></a></li>
	<li><a href="update_students.php"><img alt="home" src="images/update5.jpg" width="30px" height="30px">Update</a></li>
	<li><a><img alt="home" src="images/co1.jpg" width="30px" height="30px">Courses</a>
	<ul class="dropdown">
		<li><a href="firstYear.php">FirstYear</a></li>
		<li><a href="secondYear.php">SecondYear</a></li>
		<li class="current"><a href="thirdYear.php">ThridYear</a></li>	
	</ul>
	</li>
	<li><a><img alt="home" src="images/news5.jpg" width="30px" height="30px">View</a>
	<ul class="dropdown">
		<li><a href="timetable.php">TimeTable</a></li>
		<li><a href="viewmark.php">Mark</a></li>
		<li><a href="academicYear.php">Attendence</a></li>
		<li><a href="latestNews.php">LatestNews</a></li>
	</ul>
	</li>
	<li><a><img alt="home" src="images/set1.jpg" width="30px" height="30px">Setting</a>
	<ul class="dropdown">
		<li><a href="accountSetting.php">Account Setting</a></li>
		<li><a href="developers.php">Developers</a></li>
		<li><a href="index.php" onclick="return confirmDelete();"
			type="submit" name="actiondelete" value="1">Logout</a></li>
	</ul>
	</li>

</ul>
</nav>
		
		<div id="body">
		<h1 style="color:#09BCE8;">Third Year Courses</h1><br/><br/>
		<h2 style="text-align: center; color: #09BCE8; ">First Semester(Computer Software)</h2><br/><br/>
		
		<img align="middle" alt="" src="images/thirdYearFirstTerm.png" style="margin-left: 150px;"><br/><br/>
		
		<h2 style="text-align: center; color: #09BCE8; ">Second Semester(Computer Software)</h2><br/><br/>
		<img align="middle" alt="" src="images/thirdYearSecondTerm.png" style="margin-left: 150px;">
		</div>	
		</div>
		<?php //require_once 'footer.php';?>
	</body>
</html>