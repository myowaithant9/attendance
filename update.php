<html>
<head>
<title>Student Registration System</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="main">
<nav>
		<ul class="menu" id="nav">
	<li><a href="home.html"><img alt="home" src="images/mf9.jpg" width="30px" height="30px">Home</a></li>
	<li class="current"><a href="update.php"><img alt="home" src="images/update5.jpg" width="30px" height="30px">Update</a></li>
	<li><a href=""><img alt="home" src="images/co1.jpg" width="30px" height="30px">Courses</a>
	<ul class="dropdown">
		<li><a href="#">First</a></li>
		<li><a href="#">Second</a></li>
		<li><a href="#">Third</a></li>
	</ul>
	</li>
	<li><a><img alt="home" src="images/news5.jpg" width="30px" height="30px">View</a>
	<ul class="dropdown">
		<li><a href="timetable.php">TimeTable</a></li>
		<li><a href="viewmark.php">Mark</a></li>
		<li><a href="academicYear.php">Attendence</a></li>
		<li><a href="#">News</a></li>
	</ul>
	</li>
	<li><a href="about.html"><img alt="home" src="images/bout1.jpg" width="30px" height="30px">History</a></li>
	<li><a href=""><img alt="home" src="images/set1.jpg" width="30px" height="30px">Setting</a>
	<ul class="dropdown">
		<li><a href="index.html">Logout</a></li>
		<li><a href="about.html">About</a></li>
		<li><a href="developers.html">Developers</a></li>
	</ul>
	</li>
	<li>
				<form action="#" method="get">
				<input type="text" onfocus="if(this.value=='search'){ this.value='';}" value="search"  onblur="this.value=!this.value?'search':this.value;" value="search" style=" color:gray; margin-top: 25px; margin-left: 100px; back" >
				<input type="submit" value="" style="border-style: none; background: url('searchbutton1.gif') no-repeat; width: 24px; height: 22px;">
				</form></li>
</ul>
</nav>

</div>
<p>This is update page.</p>

</body>
</html>