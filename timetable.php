<?php session_start();?>
<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>

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
		<li class="current"><a href="firstYear.php">FirstYear</a></li>
		<li><a href="secondYear.php">SecondYear</a></li>
		<li><a href="thirdYear.php">ThridYear</a></li>	
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
<img alt="logo" src="images/logo.jpg" width="100px" height="50px;">

<table style="background: white;" bordercolor="blue" border="1">
<?php
include ("dbConnection.php");
$un=$_SESSION["userName"];
$sql1="SELECT nameEnglish FROM student_registration_tbl";
$stmt1=$conn->query($sql1);
$name=$stmt1->fetchAll();
foreach ($name as $na) {
	
	$userName=$na["nameEnglish"];
}

if($un==$userName){
	echo "hi";
}
if (isset($_SESSION)){
$sql="SELECT * FROM firstA";
$stmt=$conn->query($sql);
$registrants=$stmt->fetchAll();

?>
<div style="margin-left:50px; margin-top:80px;">
	<table style="background: url(images/timetable/tt1.jpg);" border="1">
	<tr><h1>
	First Year Section (A)</h1></tr>
	<tr style="background: orange";>
		<th style="width: 200px; height:40px; text-align:center;  ">Period 1</th>
		<th style="width: 200px; height:40px; text-align:center;  ">Period 2</th>
		<th style="width: 200px; height:40px; text-align:center;  ">Period 3</th>
		<th style="width: 200px; height:40px; text-align:center;  ">Period 4</th>
		<th style="width: 200px; height:40px; text-align:center;  ">Period 5</th>
		<th style="width: 200px; height:40px; text-align:center;  ">Period 6</th>
	</tr> 
	
<?php
foreach ($registrants as $i){?>
<tr>
	<td style="width: 200px; height:40px; text-align:center;  "><?php echo $a=$i["p1"];?></td>
	<td style="width: 200px; height:40px; text-align:center;  "><?php echo $b=$i["p2"]; ?></td>
	<td style="width: 200px; height:40px; text-align:center;  "><?php echo $c=$i["p3"];?></td>
	<td style="width: 200px; height:40px; text-align:center;  "><?php echo $d=$i["p4"];?></td>
	<td style="width: 200px; height:40px; text-align:center;  "><?php echo $e=$i["p5"];?></td>
	<td style="width: 200px; height:40px; text-align:center;  "><?php echo $e=$i["p6"];?></td>
</tr>
<?php }
}
?></table></div>
</div>

<?php

	require_once 'footer.php';
?>

</body>
</html>

