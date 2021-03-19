<?php session_start();
 $_SESSION["studentId"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Students Registration Form</title>
    <link rel="stylesheet" type="text/css" href="css/common.css" />
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
    <style type="text/css">.error {color:red; }
</style>
<script type="text/javascript">
		function confirmDelete(){
		var x=confirm("Are you sure you want to logout?");
		if(x)return  true;
		else return false;
		}
		</script>
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
		<li><a href="firstYear.php">FirstYear</a></li>
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

  <?php
 if (isset( $_POST["submitButton"])){
processForm();
} else {
displayForm(array());
}
function validateField( $fieldName, $missingFields ) {
if ( in_array( $fieldName, $missingFields ) ) {
echo ' class="error"';
}
}
function setChecked($fieldName, $fieldValue) {
if (isset($_POST[$fieldName]) and $_POST[$fieldName] == $fieldValue) {
echo 'checked="checked"';
}
}
function setValue( $fieldName) {
if ( isset( $_POST[$fieldName] ) ) {
$_POST[$fieldName];
}
}

function processForm() {
	$missingFields=array();
	
if(isset($_POST["fatherName"]))
	{
	if(preg_match("/^((\D+)|(\D+)|(\D+)|(\D+)|(\D+))/",$_POST["fatherName"])||($_POST["fatherName"]==""))
	{ $_POST["fatherName"];}
  else 	$missingFields[]="fatherName";
	}
if(isset($_POST["motherName"]))
	{
	if(preg_match("/((\D+)|(\D+)|(\D+)|(\D+)|(\D+))/",$_POST["motherName"])||($_POST["motherName"]==""))
	{ $_POST["motherName"];}
  else 	$missingFields[]="motherName";
	}
if(isset($_POST["studentPhone"]))
{
	if(preg_match("	/^((\+959(2|4|7|9)(\d{8}))|(0[0-9]((\d){6}))|(\+9595(\d{6}))|(\+959(3|7)(\d{7})))$/",$_POST["studentPhone"])||($_POST["studentPhone"]==""))
	{ $_POST["studentPhone"];}
  else 	
  $missingFields[]="studentPhone";
}
if(isset($_POST["studentEmail"]))
{
	if(preg_match("/((\w+)(\W+)|(\w+))@gmail.com/",$_POST["studentEmail"])||($_POST["studentEmail"]==""))
	{ $_POST["studentEmail"];}
  else 	$missingFields[]="studentEmail";
}

if ($missingFields) {
displayForm($missingFields );

} else {
header("Location:linkOfUpdateStudent.php");
}
}
function displayForm( $missingFields ) {
?>
<div style="background: url(images/form3.jpg); width:585px; height:650px; margin-top:1px; margin-left:400px;">
<h2>Student Update Form</h2>
<?php  if ( $missingFields ) { ?>

<?php  } else { ?>

<?php  } ?>	
 <form  action="update_students.php" method="post">
 <div style="width: 30em; margin-left:100px; margin-top: 30px;">
 
<label for="studentId"<?php validateField( "studentId",$missingFields) ?>">StudnetID*</label>
<input type="text" name="studentId" id="studentId" value="<?php setValue( "studentId" ) ?>"/>
<label>FatherName</label>
<input type="checkbox" name="choiceUpdate" id="choiceFather" value="father"<?php setChecked("choiceUpdate", "father") ?> onclick="document.getElementById('fatherName').disabled=!this.checked;"/><br></br>
<label for="fatherName"<?php validateField( "fatherName",$missingFields) ?>>Father's Name*</label>
<input type="text" name="fatherName" id="fatherName" value="<?php setvalue("fatherName")?>" disabled="disabled"/>
<label>MotherName</label>
<input type="checkbox" name="choiceUpdate" id="choiceMother" value="mother"<?php setChecked("choiceUpdate", "mother") ?> onclick="document.getElementById('motherName').disabled=!this.checked;"/><br></br>
<label for="motherName"<?php validateField( "motherName",$missingFields) ?>>Mother's Name*</label>
<input type="text" name="motherName" id="motherName" value="<?php setValue("motherName")?>"disabled="disabled"/>
<label>Permanent Address</label>
<input type="checkbox" name="choiceUpdate" id="choiceAddress" value="address"<?php setChecked("choiceUpdate", "address") ?> onclick="document.getElementById('permanentAddress').disabled=!this.checked;""/><br></br>
<label>Permanent Address</label>
<textarea name="permanentAddress" id="permanentAddress" rows="5" cols="60" disabled="disabled"><?php setValue( "permanentAddress" ) ?></textarea><br/>
<label>Student Phone</label>
<input type="checkbox" name="choiceUpdate" id="choicePhone" value="phone"<?php setChecked("choiceUpdate", "phone") ?> onclick="document.getElementById('studentPhone').disabled=!this.checked;""/><br></br>
<label for="studentPhone"<?php validateField( "studentPhone",$missingFields) ?>>Phone*</label>
<input type="text" name="studentPhone" id="studentPhone" value="<?php setValue( "studentPhone" ) ?>" placeholder="+959----" disabled="disabled"/>
<label>Student Email</label>
<input type="checkbox" name="choiceUpdate" id="choiceEmail" value="email"<?php setChecked("choiceUpdate", "email") ?> onclick="document.getElementById('studentEmail').disabled=!this.checked;""/><br></br>
<label for="studentEmail"<?php validateField( "studentEmail",$missingFields) ?>>Email*</label>
<input type="text" name="studentEmail" id="studentEmail" value="<?php setValue( "studentEmail" ) ?>" disabled="disabled"/>
<div style="clear: both;">
          <input type="submit" name="submitButton" id="nextButton" value="Next &gt;"/>
        </div>
        </div>
        </form>
        <?php }
 function displayThanks(){
 ?>
 <h1>Thanks You!</h1>
    <p>Thank you, your application has been received.</p>
 <?php 
 }
 
?>
</div>
</div>
<div>
 <p style="font-size: large; font-style: oblique; text-align: center; color: gray; margin-top: 320px;">
<b>@ University of Information Technology, Yangon</b></p>
 </div>
  </body>
</html>