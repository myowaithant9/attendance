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
		style="font-size: 25px; padding-top: 25px; padding-left: 5px; color: white;">SMIS</h1>
	</li>
	<li><a href="home.php"><img alt="home" src="images/mf9.jpg" width="30px" height="30px">Home</a></li>
	<li><a href="update_students.php"><img alt="home" src="images/update5.jpg" width="30px" height="30px">Update</a></li>
	<li><a><img alt="home" src="images/co1.jpg" width="30px" height="30px">Courses</a>
	<ul class="dropdown">
		<li><a href="firstYear.php">FirstYear</a></li>
		<li><a href="secondYear.php">SecondYear</a></li>
		<li><a href="thirdYear.php">ThridYear</a></li>	
	</ul>
	</li>
	<li><a><img alt="home" src="images/news5.jpg" width="30px" height="30px">View</a>
	<ul class="dropdown">
		<li class="current"><a href="timetable.php">TimeTable</a></li>
		<li><a href="viewmark.php">Mark</a></li>
		<li><a href="academicYear.php">Attendence</a></li>
		<li><a href="latestNews.php">LatestNews</a></li>
	</ul>
	</li>
	<li><a href="about.php"><img alt="home" src="images/bout1.jpg" width="30px" height="30px">History</a></li>
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

</div>
<div style="float:left;">
	<a href="timetable.php" id="change"><input id="back" type="submit" name="back" value="&lt; Back"></a>
</div>
		<div id="body">
		
		
	<!-- 	<img align="middle" alt="" src="images/timetable/thirdYearCT.png" style="margin-left: 150px;"><br/><br>
		
		<h1 style="color:#09BCE8;">Third Year TimeTable(Computer Science)</h1><br/><br/>
		
		<h2 style="text-align: center; color: #09BCE8; ">Section A</h2><br/><br/>
		
		<img align="middle" alt="" src="images/timetable/thirdYearA.png" style="margin-left: 150px;"><br/><br/>
		
		<h2 style="text-align: center; color: #09BCE8; ">Section B</h2><br/><br/>
		<img align="middle" alt="" src="images/timetable/thirdYearB.png" style="margin-left: 150px;"><br/><br>
		
		<h2 style="text-align: center; color: #09BCE8; ">Section C</h2><br/><br/>
		<img align="middle" alt="" src="images/timetable/thirdYearC.png" style="margin-left: 150px;"><br/><br>
		
		<h2 style="text-align: center; color: #09BCE8; ">Section D</h2><br/><br/>
		<img align="middle" alt="" src="images/timetable/thirdYearD.png" style="margin-left: 150px;"><br/><br>
		</div>	

-->
<h1 style="color:#09BCE8;">Third Year TimeTable(Computer Software)</h1><br/><br/>
<h2 style="text-align: center; color: #09BCE8; ">Section A</h2><br/><br/>
<?php
include 'dbConnection.php';
$sql="SELECT * from thirdCSA";
$stmt=$conn->query($sql);
$output=$stmt->fetchAll();
?>
<table border="1" width="1200px"  height="500px">
<tr>
<th>Period 1</th>
<th>Period 2</th>
<th>Period 3</th>
<th>Period 4</th>
<th>Period 5</th>
<th>Period 6</th>
</tr>
<?php
foreach ($output as $o) {
	?>
	<tr>
	<td><?php echo $o['p1'];?></td>
	<td><?php echo $o['p2'];?></td>
	<td><?php echo $o['p3'];?></td>
	<td><?php echo $o['p4'];?></td>
	<td><?php echo $o['p5'];?></td>
	<td><?php echo $o['p6'];?></td>
	</tr>
	<?php
}
?>
</table>

<h2 style="text-align: center; color: #09BCE8; ">Section B</h2><br/><br/>
<?php
include 'dbConnection.php';
$sql="SELECT * from thirdCSB";
$stmt=$conn->query($sql);
$output=$stmt->fetchAll();
?>
<table border="1" width="1200px" height="500px">
<tr>
<th>Period 1</th>
<th>Period 2</th>
<th>Period 3</th>
<th>Period 4</th>
<th>Period 5</th>
<th>Period 6</th>
</tr>
<?php
foreach ($output as $o) {
	?>
	<tr>
	<td><?php echo $o['p1'];?></td>
	<td><?php echo $o['p2'];?></td>
	<td><?php echo $o['p3'];?></td>
	<td><?php echo $o['p4'];?></td>
	<td><?php echo $o['p5'];?></td>
	<td><?php echo $o['p6'];?></td>
	</tr>
	<?php
}
?>
</table>

<h2 style="text-align: center; color: #09BCE8; ">Section C</h2><br/><br/>
<?php
include 'dbConnection.php';
$sql="SELECT * from thirdCSC";
$stmt=$conn->query($sql);
$output=$stmt->fetchAll();
?>
<table border="1" width="1200px" height="500px">
<tr>
<th>Period 1</th>
<th>Period 2</th>
<th>Period 3</th>
<th>Period 4</th>
<th>Period 5</th>
<th>Period 6</th>
</tr>
<?php
foreach ($output as $o) {
	?>
	<tr>
	<td><?php echo $o['p1'];?></td>
	<td><?php echo $o['p2'];?></td>
	<td><?php echo $o['p3'];?></td>
	<td><?php echo $o['p4'];?></td>
	<td><?php echo $o['p5'];?></td>
	<td><?php echo $o['p6'];?></td>
	</tr>
	<?php
}
?>
</table>

<h2 style="text-align: center; color: #09BCE8; ">Section D</h2><br/><br/>
<?php
include 'dbConnection.php';
$sql="SELECT * from thirdCSD";
$stmt=$conn->query($sql);
$output=$stmt->fetchAll();
?>
<table border="1" width="1200px" height="500px">
<tr>
<th>Period 1</th>
<th>Period 2</th>
<th>Period 3</th>
<th>Period 4</th>
<th>Period 5</th>
<th>Period 6</th>
</tr>
<?php
foreach ($output as $o) {
	?>
	<tr>
	<td><?php echo $o['p1'];?></td>
	<td><?php echo $o['p2'];?></td>
	<td><?php echo $o['p3'];?></td>
	<td><?php echo $o['p4'];?></td>
	<td><?php echo $o['p5'];?></td>
	<td><?php echo $o['p6'];?></td>
	</tr>
	<?php
}
?>
</table><br><br>
<h1 style="color:#09BCE8;">Third Year TimeTable(Computer Software)</h1><br/><br/>
<h2 style="text-align: center; color: #09BCE8; ">Section A</h2><br/><br/>
<?php
include 'dbConnection.php';
$sql="SELECT * from thirdCTA";
$stmt=$conn->query($sql);
$output=$stmt->fetchAll();
?>
<table border="1" width="1200px" height="500px">
<tr>
<th>Period 1</th>
<th>Period 2</th>
<th>Period 3</th>
<th>Period 4</th>
<th>Period 5</th>
<th>Period 6</th>
</tr>
<?php
foreach ($output as $o) {
	?>
	<tr>
	<td><?php echo $o['p1'];?></td>
	<td><?php echo $o['p2'];?></td>
	<td><?php echo $o['p3'];?></td>
	<td><?php echo $o['p4'];?></td>
	<td><?php echo $o['p5'];?></td>
	<td><?php echo $o['p6'];?></td>
	</tr>
	<?php
}
?>
</table>
		<?php require_once 'footer.php';?>
	</body>
</html>