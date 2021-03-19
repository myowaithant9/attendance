<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
</head>
<body>
<?php
$dsn="mysql:dbname=mydatabase";
$username="root";
$password="";
try {
	$conn=new PDO($dsn, $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
	echo "Connection Failed :" .$e->getMessage();
}
if (!empty($_POST)){
	try {
		$username=$_POST["username"];
		$password=$_POST["password"];
		$sql="INSERT INTO test1 (username,password) VALUES (?,?);";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(1, $username);
		$stmt->bindValue(2, $password);
		$stmt->execute();
	}catch (PDOException $e){
		die(var_dump($e));

	}

}
$sql1="SELECT * FROM test1 ";
$stmt1=$conn->query($sql1);
$registrants1=$stmt1->fetchAll();

$sql2="SELECT * FROM test2 ";
$stmt2=$conn->query($sql2);
$registrants2=$stmt2->fetchAll();

$sql="SELECT * FROM test";
$stmt=$conn->query($sql);
$registrants=$stmt->fetchAll();

if($registrants['username']==$registrants1['username']){
	echo "Same user";
	header("Location:admin.php");
}
elseif($registrants2['username']==$registrants1['username']) {
	echo "Different User";
	//header("Location:home.html");
	
}

else{
	//echo "Same user";
	header("Location:index.html");
}

?>

</body>
</html>


