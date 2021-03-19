<html>
<head>
<title>Student Registration System</title>
<link rel="stylesheet" type="text/css" href="css/style1.css" />

<script type="text/javascript">
		function confirmDelete(){
		var x=confirm("Are you sure you want to logout?");
		if(x)return  true;
		else return false;
		}
</script>
</head>
<body background="images/logo.jpg">
<div id="main">
<nav>
	<ul class="menu" id="nav">
	<li><img alt="systemlogo" src="images/b.png" width="50px"
		height="50px"></li>
	<li>
	<h1
		style="font-size: 25px; padding-top: 25px; padding-left: 5px; color: white;">Student
	Management Information System</h1>
	</li>
	<li><a href="admin.php"><img alt="home" src="images/mf9.jpg" width="30px" height="30px">Home</a></li>
	<li><a><img alt="home" src="images/update5.jpg" width="30px" height="30px">Edit</a>
	<ul class="dropdown">
		<li><a href="new_student.php">New Student</a></li>
		<li><a href="updatestudents_admin.php">Update Student</a></li>
		<li><a href="delete.php">Delect Student</a></li>
		<li><a href="registration_admin.php">New Admin</a></li>
	</ul></li>
	<li><a><img alt="home" src="images/co1.jpg" width="30px" height="30px">Upload</a>
	<ul class="dropdown">
		<li  class="current"><a href="uploadTimetable.php">TimeTable</a></li>
		<li><a href="uploadAttendance.php">Attendence</a></li>
		<li><a href="uploadMark.php">Mark</a></li>
	</ul>
	</li>
	<li><a><img alt="home" src="images/news5.jpg" width="30px" height="30px">View</a>
	<ul class="dropdown">
		<li><a href="newStudentList_admin.php">New StudentList</a></li>
		<li><a href="registeredStudentList_admin.php">Registered StudentList</a></li>
		<li><a href="adminlatestNews.php">LatestNews</a></li>
	</ul>
	</li>
	<li><a><img alt="home" src="images/set1.jpg" width="30px" height="30px">Setting</a>
	<ul class="dropdown">
		<li><a href="adminAccountSetting.php">Account Setting</a></li>
		<li><a href="adminDevelopers.php">Developers</a></li>
		<li><a href="index.php" onclick="return confirmDelete();"
			type="submit" name="actiondelete" value="1">Logout</a></li>
	</ul>
	</li>
	
</ul>
</nav>
<img alt="logo" src="images/logo.jpg" width="100px" height="50px;">
<?php require_once 'tbThirdC.php';?>
</div>
<?php 
	
	require_once 'footer.php';
?>
</body>
</html>