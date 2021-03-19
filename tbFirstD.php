
<?php 
	require_once 'dbConnection.php';
	
	if(isset($_POST["tbsave"])){
		
		$m1=$_POST["monday1"];
		$m2=$_POST["monday2"];
		$m3=$_POST["monday3"];
		$m4=$_POST["monday4"];
		$m5=$_POST["monday5"];
		$m6=$_POST["monday6"];
		
		$t1=$_POST["tue1"];
		$t2=$_POST["tue2"];
		$t3=$_POST["tue3"];
		$t4=$_POST["tue4"];
		$t5=$_POST["tue5"];
		$t6=$_POST["tue6"];
		
		$w1=$_POST["wed1"];
		$w2=$_POST["wed2"];
		$w3=$_POST["wed3"];
		$w4=$_POST["wed4"];
		$w5=$_POST["wed5"];
		$w6=$_POST["wed6"];
		
		$tr1=$_POST["thur1"];
		$tr2=$_POST["thur2"];
		$tr3=$_POST["thur3"];
		$tr4=$_POST["thur4"];
		$tr5=$_POST["thur5"];
		$tr6=$_POST["thur6"];
		
		$f1=$_POST["fri1"];
		$f2=$_POST["fri1"];
		$f3=$_POST["fri1"];
		$f4=$_POST["fri1"];
		$f5=$_POST["fri1"];
		$f6=$_POST["fri1"];

$sql="INSERT INTO firstD (p1,p2,p3,p4,p5,p6,year) values('$m1','$m2','$m3','$m4','$m5','$m6','first')";
$stmt=$conn->query($sql);
		
$sql1="INSERT INTO firstD (p1,p2,p3,p4,p5,p6,year) values('$t1','$t2','$t3','$t4','$t5','$t6','first')";
$stmt1=$conn->query($sql1);

$sql2="INSERT INTO firstD (p1,p2,p3,p4,p5,p6,year) values('$w1','$w2','$w3','$w4','$w5','$w6','first')";
$stmt2=$conn->query($sql2);

$sql3="INSERT INTO firstD (p1,p2,p3,p4,p5,p6,year) values('$tr1','$tr2','$tr3','$tr4','$tr5','$tr6','first')";
$stmt3=$conn->query($sql3);

$sql4="INSERT INTO firstD (p1,p2,p3,p4,p5,p6,year) values('$f1','$f2','$f3','$f4','$f5','$f6','first')";
$stmt4=$conn->query($sql4);
	}
	?>
	<div style="background-image: url(images/timetable/tt1.jpg); width:1000px; height:300px; margin-top:100px;
	margin-left:150px;">
<form action="tbFirstD.php" method="post">
	<table height="300px" width="1000px">
		<tr style="background: orange;">
			<th>Day</th>
			<th>Period 1</th>
			<th>Period 2</th>
			<th>Period 3</th>
			<th>Period 4</th>
			<th>Period 5</th>
			<th>Period 6</th>
		</tr>
		<tr>
			<td>Monday</td>
			<td><input type="text" name="monday1"></td>
			<td><input type="text" name="monday2"></td>
			<td><input type="text" name="monday3"></td>
			<td><input type="text" name="monday4"></td>
			<td><input type="text" name="monday5"></td>
			<td><input type="text" name="monday6"></td>
		</tr>
		<tr>
			<td>Tuesday</td>
			<td><input type="text" name="tue1"></td>
			<td><input type="text" name="tue2"></td>
			<td><input type="text" name="tue3"></td>
			<td><input type="text" name="tue4"></td>
			<td><input type="text" name="tue5"></td>
			<td><input type="text" name="tue6"></td>
		</tr>
		<tr>
			<td>Wednesday</td>
			<td><input type="text" name="wed1"></td>
			<td><input type="text" name="wed2"></td>
			<td><input type="text" name="wed3"></td>
			<td><input type="text" name="wed4"></td>
			<td><input type="text" name="wed5"></td>
			<td><input type="text" name="wed6"></td>
		</tr>
		<tr>
			<td>Thursday</td>
			<td><input type="text" name="thur1"></td>
			<td><input type="text" name="thur2"></td>
			<td><input type="text" name="thur3"></td>
			<td><input type="text" name="thur4"></td>
			<td><input type="text" name="thur5"></td>
			<td><input type="text" name="thur6"></td>
		</tr>
		<tr>
			<td>Friday</td>
			<td><input type="text" name="fri1"></td>
			<td><input type="text" name="fri2"></td>
			<td><input type="text" name="fri3"></td>
			<td><input type="text" name="fri4"></td>
			<td><input type="text" name="fri5"></td>
			<td><input type="text" name="fri6"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><input type="submit" name="tbsave" value="Save" style="margin-left:50px;"></td>
		</tr>
	</table>
</form>
	
	</div>