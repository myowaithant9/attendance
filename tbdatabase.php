<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
</head>
<body>
<?php
include ("dbConnection2.php") ;

$search=$_POST["timetable"];
$sql1="INSERT INTO tb (p1,p2,p3,p4,p5,p6) values(timetable,timetable,timetable,timetable,timetable,timetable)";
$stmt1=$conn->query($sql1);


?>
</body>
</html>


