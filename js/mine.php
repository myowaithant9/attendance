<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Students Registration Form</title>
    <link rel="stylesheet" type="text/css" href="css/common.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  <style type="text/css">.error { background  : #d33; color: white; padding: 0.2em; }
</style>
  </head>
  <body>
  <div id="main">
	<nav>
			<ul class="menu" id="nav">
				<li><img alt="logo" src="images/b.png" width="50px" height="50px"> </li>
				<li><h1 style="font-size:25px; padding-top: 15px; padding-left: 5px; color: white;">Student Management Information System</h1></li>
				<li><a href="index.html">Log In</a></li>
				<li class="current"><a href="activities.html">Activities</a></li>
				<li><a href="degrees.html">Degrees</a></li>
				<li><a href="aboutus.html">About Us</a></li>
			</ul>
		</nav>
	</div>
  <?php
if ( isset( $_POST["step"] ) and $_POST["step"] >= 1 and $_POST["step"] <= 5 ) {
  call_user_func( "processStep" . (int)$_POST["step"] );}
 else if ( isset( $_POST["submitButton1"] ) ) {
processForm1();
} else 
displayStep1(array());
function validateField( $fieldName,$missingFields) {
if ( in_array( $fieldName,$missingFields ) ) {
echo ' class="error"';
}
}
function setValue($fieldName ) {
  if ( isset( $_POST[$fieldName]) ) 
  	{
  		echo $_POST[$fieldName];
  	}
   
}

function setChecked( $fieldName, $fieldValue ) {
  if ( isset( $_POST[$fieldName] ) and $_POST[$fieldName] == $fieldValue ) {
    echo ' checked="checked"';
  }
}

function setSelected( $fieldName, $fieldValue ) {
  if ( isset( $_POST[$fieldName] ) and $_POST[$fieldName] == $fieldValue ) {
    echo ' selected="selected"';
  }
}
function processForm1() {
$requiredFields = array( "studentId", "nameEnglish", "nameMyanmar","nrc", "gender","yearName","rollNo","studentPhone","studentEmail");
$missingFields = array();
foreach ( $requiredFields as $requiredField  ) {if ( !isset( $_POST[$requiredField] ) or !$_POST[$requiredField] ) {$missingFields[] = $requiredField;
}
if(isset($_POST["studentId"]))
{
	if(preg_match("/YCPT(\W)BH(\W)(\W)(\d|(\d\d)|(\d\d\d))/", $_POST["studentId"]))
	{ $_POST["studentId"];}
	else {$missingFields[]="studentId";
	
	}
	}
if(isset($_POST["nameEnglish"]))
	{
	if(preg_match("/((\D+)|(\D+)|(\D+)|(\D+)|(\D+))/",$_POST["nameEnglish"]))
	{ $_POST["nameEnglish"];}
  else 	$missingFields[]="nameEnglish";
	}
if(isset($_POST["nameMyanmar"]))
	{
	if(preg_match("/((\D+)|(\D+)|(\D+)|(\D+)|(\D+))/",$_POST["nameEnglish"]))
	{ $_POST["nameMyanmar"];}
  else 	$missingFields[]="nameMyanmar";
	}
if(isset($_POST["nrc"]))
	{
	if(preg_match("/(\d|(\d\d))(\W)(\D\D\D)(\W)N(\W)((\d){6})/",$_POST["nrc"]))
	{ $_POST["nrc"];}
  	 else $missingFields[]="nrc";
	}
if(isset($_POST["rollNo"]))
	{
	if(preg_match("/((1|2)\D\D\D\W(\d|(\d\d)|(\d\d\d)))|((3|4|5)\D\D\W(\d|(\d\d)|(\d\d\d)))/",$_POST["rollNo"]))
	{ $_POST["rollNo"];}
  else 	$missingFields[]="rollNo";
	}
if(isset($_POST["studentPhone"]))
{
	if(preg_match("/((\+(\d){11}))|(0[0-9]((\d){6}))|(\+((\d){9}))|(\+((\d){10}))/",$_POST["studentPhone"]))
	{ $_POST["studentPhone"];}
  else 	$missingFields[]="studentPhone";
}
if(isset($_POST["studentEmail"]))
{
	if(preg_match("/((\w+)(\W+)|(\w+))@gmail.com/",$_POST["studentEmail"]))
	{ $_POST["studentEmail"];}
  else 	$missingFields[]="studentEmail";
}
}
if ( $missingFields) {
displayStep1( $missingFields );
} else if ( isset( $_POST["submitButton2"] ) ) {
processForm2();
} else 
displayStep2(array());
}

function processForm2() {
$requiredFields = array( "fatherName", "fatherNrc");
$missingFields = array();
foreach ( $requiredFields as $requiredField  ) {if ( !isset( $_POST[$requiredField] ) or !$_POST[$requiredField] ) {$missingFields[] = $requiredField;
}
if(isset($_POST["fatherName"]))
	{
	if(preg_match("/((\D+)|(\D+)|(\D+)|(\D+)|(\D+))/",$_POST["fatherName"]))
	{ $_POST["fatherName"];}
  else 	$missingFields[]="fatherName";
	}
if(isset($_POST["fatherNrc"]))
	{
	if(preg_match("/(\d|(\d\d))(\W)(\D\D\D)(\W)N(\W)((\d){6})/",$_POST["fatherNrc"]))
	{ $_POST["fatherNrc"];}
  	 else $missingFields[]="fatherNrc";
	}
}
if ( $missingFields) {
displayStep2( $missingFields );
} else if ( isset( $_POST["submitButton3"] ) ) {
processForm3();
} else 
displayStep3(array());
}

function processForm3() {
$requiredFields = array( "motherName", "motherNrc");
$missingFields = array();
foreach ( $requiredFields as $requiredField  ) {if ( !isset( $_POST[$requiredField] ) or !$_POST[$requiredField] ) {$missingFields[] = $requiredField;
}
if(isset($_POST["motherName"]))
	{
	if(preg_match("/((\D+)|(\D+)|(\D+)|(\D+)|(\D+))/",$_POST["motherName"]))
	{ $_POST["motherName"];}
  else 	$missingFields[]="motherName";
	}
if(isset($_POST["motherNrc"]))
	{
	if(preg_match("/(\d|(\d\d))(\W)(\D\D\D)(\W)N(\W)((\d){6})/",$_POST["motherNrc"]))
	{ $_POST["motherNrc"];}
  	 else $missingFields[]="motherNrc";
	}
}
if ( $missingFields) {
displayStep3( $missingFields );
} else if ( isset( $_POST["submitButton4"] ) ) {
processForm4();
} else 
displayStep4(array());
}

function processForm4() {
$requiredFields = array( "supporterName","supporterRelationship","supporterPhone","agreement");
$missingFields = array();
foreach ( $requiredFields as $requiredField  ) {if ( !isset( $_POST[$requiredField] ) or !$_POST[$requiredField] ) {$missingFields[] = $requiredField;
}
if(isset($_POST["supporterName"]))
	{
	if(preg_match("/((\D+)|(\D+)|(\D+)|(\D+)|(\D+))/",$_POST["supporterName"]))
	{ $_POST["supporterName"];}
  else 	$missingFields[]="supporterName";
	}
if(isset($_POST["supporterPhone"]))
{
	if(preg_match("/((\+(\d){11}))|(0[0-9]((\d){6}))|(\+((\d){9}))|(\+((\d){10}))/",$_POST["supporterPhone"]))
	{ $_POST["supporterPhone"];}
  else 	$missingFields[]="supporterPhone";
}
}
if ( $missingFields) {
displayStep4( $missingFields );
} else if ( isset( $_POST["submitButton5"] ) ) {
processForm5();
} else 
displayStep5(array());
}

function processForm5() {
$requiredFields = array( "specializationName","eduRollno","status");
$missingFields = array();
foreach ( $requiredFields as $requiredField  ) {if ( !isset( $_POST[$requiredField] ) or !$_POST[$requiredField] ) {$missingFields[] = $requiredField;
}
if(isset($_POST["specializationName"]))
	{
	if(preg_match("/((\D+)|(\D+)|(\D+)|(\D+)|(\D+))/",$_POST["specializationName"]))
	{ $_POST["specializationName"];}
  else 	$missingFields[]="specializationName";
	}
if(isset($_POST["eduRollno"]))
	{
	if(preg_match("/((1|2)\D\D\D\W(\d|(\d\d)|(\d\d\d)))|((3|4|5)\D\D\W(\d|(\d\d)|(\d\d\d)))/",$_POST["eduRollno"]))
	{ $_POST["eduRollno"];}
  	 else $missingFields[]="eduRollno";
	}
}
if ( $missingFields) {
displayStep5( $missingFields );
} else 
displayThanks();
}

function processStep1() {
	if (isset($_POST["submitButton1"] )) {
		processForm1();
		
		
}
}

function processStep2() {
if (isset($_POST["submitButton2"] ) and $_POST["submitButton2"]=="< Back" ) {
displayStep1();


}
 else if (isset($_POST["submitButton2"] ) ) {
processForm2();

} 
else {
	displayStep3();

}
}

function processStep3() {
if (isset($_POST["submitButton3"] ) and $_POST["submitButton3"]=="< Back" )
	{
		displayStep2($missingFields);
	}
	 else   if ( isset( $_POST["submitButton3"] ) ) {
    processForm3();
    
  } 
  
  else { displayStep4();
  
  }
}

function processStep4() {
if (isset($_POST["submitButton4"] ) and $_POST["submitButton4"]=="< Back" )
	{
		displayStep3($missingFields);
	}
	 else   if ( isset( $_POST["submitButton4"] ) ) {
    processForm4();
  } 
  
  else { displayStep5();
  }
}

function processStep5() {
if (isset($_POST["submitButton5"] ) and $_POST["submitButton5"]=="< Back" )
	{
		displayStep4($missingFields);
	}
	 else   if ( isset( $_POST["submitButton5"] ) ) {
    processForm5();
  } 
  
  else { displayThanks();
  }
}





 function displayStep1($missingFields) {
 ?>
 <h1>Students Registration Form:For Students</h1>
 <?php  if ($missingFields) { ?>
<p class="error">There were some problems with the form you submitted. 
Please complete the fields highlighted below and click Send Details to 
resend the form.</p>
<?php  } else { ?>
<p>Thanks for choosing to join Our System. To register, please 
fill in your details below and click Send Details. Fields marked with an 
asterisk (*) are required.</p>
<?php  } ?>
 <form  action="registration_students.php" method="post" >
 <div style="width: 30em;">
 <input type="hidden" name="step" value="1" />
 <label for="studentId"<?php validateField( "studentId",$missingFields) ?>>StudnetID*</label>
<input type="text" name="studentId" id="studentId" value="<?php setValue( "studentId" ) ?>"placeholder="YCPT(BH)-1"/>

<label for="nameEnglish"<?php validateField( "nameEnglish",$missingFields ) ?>>Name by English*</label>
<input type="text" name="nameEnglish" id="nameEnglish" value="<?php setValue( "nameEnglish" ) ?>"/>

<label for="nameMyanmar"<?php validateField( "nameMyanmar",$missingFields ) ?>>Name by Myanmar*</label>
<input type="text" name="nameMyanmar" id="nameMyanmar" value="<?php setValue( "nameMyanmar" ) ?>"/>

<label>Race</label>
<select name="race" size="1">
	<option value="Kachin"<?php setSelected( "race", "Kachin" ) ?>>Kachin</option>
	<option value="Kayar"<?php setSelected( "race", "Kayar" ) ?>>Kayar</option>
	<option value="Kayin"<?php setSelected( "race", "Kayin" ) ?>>Kayin</option>
	<option value="Chin"<?php setSelected( "race", "Chin" ) ?>>Chin</option>
	<option value="Barma"<?php setSelected( "race", "Barma" ) ?>>Barma</option>
	<option value="Mon"<?php setSelected( "race", "Mon" ) ?>>Mon</option>
    <option value="Rhakine"<?php setSelected( "race", "Rhakhine" ) ?>>Rhakhine</option>
	<option value="Shan"<?php setSelected( "race", "Shan" ) ?>>Shan</option>
</select>

<label>Religion</label>
<select name="religion" size="1">
	<option value="Buddish"<?php setSelected( "religion", "Buddish" ) ?>>Buddish</option>
	<option value="Khayinshan"<?php setSelected( "religion", "Khayinshan" ) ?>>Khayinshan</option>
	<option value="Hindo"<?php setSelected( "religion", "Hindo" ) ?>>Hindo</option>
	<option value="Asanlan"<?php setSelected( "religion", "Asanlan" ) ?>>Asanlan</option>
	<option value="Sick"<?php setSelected( "religion", "Sick" ) ?>>Sick</option>
	</select>
<label>Place of Birth</label>
<input type="text" name="placeOfBirth" id="placeOfBirth" value="<?php setValue( "placeOfBirth" ) ?>"/>

<label for="nrc"<?php validateField( "nrc",$missingFields ) ?>>NRC*</label>
<input type="text" name="nrc" id="nrc" value="<?php setValue( "nrc" ) ?>"placeholder="12/MGT(N)099476"/>

<label>Nationalilty</label>
<input type="text" name="nationality" id="nationality value="<?php setValue( "nationality" ) ?>"/>

<label>Date of Birth</label>
<label>day</label>
<select name="day" size="1">
	<option value="1"<?php setSelected( "day", "1" ) ?>>1</option>
	<option value="2"<?php setSelected( "day", "2" ) ?>>2</option>
	<option value="3"<?php setSelected( "day", "3" ) ?>>3</option>
	<option value="4"<?php setSelected( "day", "4" ) ?>>4</option>
	<option value="5"<?php setSelected( "day", "5" ) ?>>5</option>
	<option value="6"<?php setSelected( "day", "6" ) ?>>6</option>
	<option value="7"<?php setSelected( "day", "7" ) ?>>7</option>
	<option value="8"<?php setSelected( "day", "8" ) ?>>8</option>
	<option value="9"<?php setSelected( "day", "9" ) ?>>9</option>
	<option value="10"<?php setSelected( "day", "10" ) ?>>10</option>
	<option value="11"<?php setSelected( "day", "11" ) ?>>11</option>
	<option value="12"<?php setSelected( "day", "12" ) ?>>12</option>
	<option value="13"<?php setSelected( "day", "13" ) ?>>13</option>
	<option value="14"<?php setSelected( "day", "14" ) ?>>14</option>
	<option value="15"<?php setSelected( "day", "15" ) ?>>15</option>
	<option value="16"<?php setSelected( "day", "16" ) ?>>16</option>
	<option value="17"<?php setSelected( "day", "17" ) ?>>17</option>
	<option value="18"<?php setSelected( "day", "18" ) ?>>18</option>
	<option value="19"<?php setSelected( "day", "19" ) ?>>19</option>
	<option value="20"<?php setSelected( "day", "20" ) ?>>20</option>
	<option value="21"<?php setSelected( "day", "21" ) ?>>21</option>
	<option value="22"<?php setSelected( "day", "22" ) ?>>22</option>
	<option value="23"<?php setSelected( "day", "23" ) ?>>23</option>
	<option value="24"<?php setSelected( "day", "24" ) ?>>24</option>
	<option value="25"<?php setSelected( "day", "25" ) ?>>25</option>
	<option value="26"<?php setSelected( "day", "26" ) ?>>26</option>
	<option value="27"<?php setSelected( "day", "27" ) ?>>27</option>
	<option value="28"<?php setSelected( "day", "28" ) ?>>28</option>
	<option value="29"<?php setSelected( "day", "29" ) ?>>29</option>
	<option value="30"<?php setSelected( "day", "30" ) ?>>30</option>
	<option value="31"<?php setSelected( "day", "31" ) ?>>31</option>
</select>

<label>Month</label>
<select name="month" id="month" size="1">
	<option value="january"<?php setSelected( "month", "january" ) ?>>January</option>
	<option value="february"<?php setSelected( "month", "february" ) ?>>February</option>
	<option value="march"<?php setSelected( "month", "march" ) ?>>March</option>
	<option value="april"<?php setSelected( "month", "april" ) ?>>April</option>
	<option value="may"<?php setSelected( "month", "may" ) ?>>May</option>
	<option value="june"<?php setSelected( "month", "june" ) ?>>June</option>
	<option value="july"<?php setSelected( "month", "july" ) ?>>July</option>
	<option value="august"<?php setSelected( "month", "august" ) ?>>August</option>
	<option value="september"<?php setSelected( "month", "september" ) ?>>September</option>
	<option value="october"<?php setSelected( "month", "october" ) ?>>October</option>
	<option value="november"<?php setSelected( "month", "november" ) ?>>November</option>
	<option value="december"<?php setSelected( "month", "december" ) ?>>December</option>
</select>

<label>Year</label>
<select name="year" size="1">
	<option value="1993"<?php setSelected( "year", "1993" ) ?>>1993</option>
	<option value="1994"<?php setSelected( "year", "1994" ) ?>>1994</option>
	<option value="1995"<?php setSelected( "year", "1995" ) ?>>1995</option>
	<option value="1996"<?php setSelected( "year", "1996" ) ?>>1996</option>
	<option value="1997"<?php setSelected( "year", "1997" ) ?>>1997</option>
	<option value="1998"<?php setSelected( "year", "1998" ) ?>>1998</option>
	<option value="1999"<?php setSelected( "year", "1999" ) ?>>1999</option>
	<option value="2000"<?php setSelected( "year", "2000" ) ?>>2000</option>
	<option value="2001"<?php setSelected( "year", "2001" ) ?>>2001</option>
	<option value="2002"<?php setSelected( "year", "2002" ) ?>>2002</option>
	<option value="2003"<?php setSelected( "year", "2003" ) ?>>2003</option>
	<option value="2004"<?php setSelected( "year", "2004" ) ?>>2004</option>
	<option value="2005"<?php setSelected( "year", "2005" ) ?>>2005</option>
	<option value="2006"<?php setSelected( "year", "2006" ) ?>>2006</option>
	<option value="2007"<?php setSelected( "year", "2007" ) ?>>2007</option>
	<option value="2008"<?php setSelected( "year", "2008" ) ?>>2008</option>
	<option value="2009"<?php setSelected( "year", "2009" ) ?>>2009</option>
	<option value="2010"<?php setSelected( "year", "2010" ) ?>>2010</option>
	<option value="2011"<?php setSelected( "year", "2011" ) ?>>2011</option>
	<option value="2012"<?php setSelected( "year", "2012" ) ?>>2012</option>
	<option value="2013"<?php setSelected( "year", "2013" ) ?>>2013</option>
	<option value="2014"<?php setSelected( "year", "2014" ) ?>>2014</option>
	<option value="2015"<?php setSelected( "year", "2015" ) ?>>2015</option>
	<option value="2016"<?php setSelected( "year", "2016" ) ?>>2016</option>
	<option value="2017"<?php setSelected( "year", "2017" ) ?>>2017</option>
	<option value="2018"<?php setSelected( "year", "2018" ) ?>>2018</option>
	<option value="2019"<?php setSelected( "year", "2019" ) ?>>2019</option>
	<option value="2020"<?php setSelected( "year", "2020" ) ?>>2020</option>
</select>

<label for="gender"<?php validateField( "gender", $missingFields ) ?>>Gender*</label>
<label>Male</label>
<input type="radio" name="gender" id="gender" value="M"<?php setChecked( "gender", "M" )?>/>
<label>Female</label>
<input type="radio" name="gender" id="gender" value="F"<?php setChecked( "gender" ,"F") ?>/>

<label>Permanent Address</label>
<textarea name="permanentAddress" id="permanentAddress" rows="5" cols="60"><?php setValue( "permanentAddress" ) ?></textarea><br/>

<label for="yearName"<?php validateField( "yearName",$missingFields) ?>>Year Name*</label>
<select name="yearName" size="1">
	<option value="firstYear"<?php setSelected( "yearName", "firstYear" ) ?>>First Year</option>
	<option value="secondYear"<?php setSelected( "yearName", "secondYear" ) ?>>Second Year</option>
	<option value="thirdYear"<?php setSelected( "yearName", "thirdYear" ) ?>>Third Year</option>
	<option value="fourthYear"<?php setSelected( "yearName", "fourthYear" ) ?>>Fourth Year</option>
	<option value="fifthYear"<?php setSelected( "yearName", "fifthYear" ) ?>>Fifth Year</option>
</select> 

<label for="rollNo"<?php validateField( "rollNo",$missingFields) ?>>Roll No*</label>
<input type="text" name="rollNo" id="rollNo" value="<?php setValue( "rollNo" ) ?>"/>

<label>Academic Year</label>
<select name="academicYear" size="1">
	<option value="1993-1994"<?php setSelected( "academicYear", "1993-1994" ) ?>>1993-1994</option>
	<option value="1994-1995"<?php setSelected( "academicYear", "1994-1995" ) ?>>1994-1995</option>
	<option value="1995-1996"<?php setSelected( "academicYear", "1995-1996" ) ?>>1995-1996</option>
	<option value="1996-1997"<?php setSelected( "academicYear", "1996-1997" ) ?>>1996-1997</option>
	<option value="1997-1998"<?php setSelected( "academicYear", "1997-1998" ) ?>>1997-1998</option>
	<option value="1998-1999"<?php setSelected( "academicYear", "1998-1999" ) ?>>1998-1999</option>
	<option value="1999-2000"<?php setSelected( "academicYear", "1999-2000" ) ?>>1999-2000</option>
	<option value="2000-2001"<?php setSelected( "academicYear", "2000-2001" ) ?>>2000-2001</option>
	<option value="2001-2002"<?php setSelected( "academicYear", "2001-2002" ) ?>>2001-2002</option>
	<option value="2002-2003"<?php setSelected( "academicYear", "2002-2003" ) ?>>2002-2003</option>
	<option value="2003-2004"<?php setSelected( "academicYear", "2003-2004" ) ?>>2003-2004</option>
	<option value="2004-2005"<?php setSelected( "academicYear", "2004-2005" ) ?>>2004-2005</option>
	<option value="2005-2006"<?php setSelected( "academicYear", "2005-2006" ) ?>>2005-2006</option>
	<option value="2006-2007"<?php setSelected( "academicYear", "2006-2007" ) ?>>2006-2007</option>
	<option value="2007-2008"<?php setSelected( "academicYear", "2007-2008" ) ?>>2007-2008</option>
	<option value="2008-2009"<?php setSelected( "academicYear", "2008-2009" ) ?>>2008-2009</option>
	<option value="2009-2010"<?php setSelected( "academicYear", "2009-2010" ) ?>>2009-2010</option>
	<option value="2010-2011"<?php setSelected( "academicYear", "2010-2011" ) ?>>2010-2011</option>
	<option value="2011-2012"<?php setSelected( "academicYear", "2011-2012" ) ?>>2011-2012</option>
	<option value="2012-2013"<?php setSelected( "academicYear", "2012-2013" ) ?>>2012-2013</option>
	<option value="2013-1014"<?php setSelected( "academicYear", "2013-2014" ) ?>>2013-1014</option>
	<option value="2014-1015"<?php setSelected( "academicYear", "2014-2015") ?>>2014-2015</option>
	<option value="2015-2016"<?php setSelected( "academicYear", "2015-2016" ) ?>>2015-2016</option>
	<option value="2016-2017"<?php setSelected( "academicYear", "2016-2017" ) ?>>2016-2017</option>
	<option value="2017-2018"<?php setSelected( "academicYear", "2017-2018" ) ?>>2017-2018</option>
	<option value="2018-2019"<?php setSelected( "academicYear", "2018-2019" ) ?>>2018-2019</option>
	<option value="2019-2020"<?php setSelected( "academicYear", "2019-2020" ) ?>>2019-2020</option>
	<option value="2020-2021"<?php setSelected( "academicYear", "2020-2021" ) ?>>2020-2021</option>
	<option value="2021-2022"<?php setSelected( "academicYear", "2021-2022" ) ?>>2021-2022</option>
	<option value="2022-2023"<?php setSelected( "academicYear", "2022-2023" ) ?>>2022-2023</option>
	<option value="2023-2024"<?php setSelected( "academicYear", "2023-2024" ) ?>>2023-2024</option>
	<option value="2024-2025"<?php setSelected( "academicYear", "2024-2025" ) ?>>2024-2025</option>
</select>
<label for="studentPhone"<?php validateField( "studentPhone",$missingFields) ?>>Phone*</label>
<input type="text" name="studentPhone" id="studentPhone" value="<?php setValue( "studentPhone" ) ?>"/>

<label for="studentEmail"<?php validateField( "studentEmail",$missingFields) ?>>Email*</label>
<input type="text" name="studentEmail" id="studentEmail" value="<?php setValue( "studentEmail" ) ?>"/>
 <div style="clear: both;">
          <input type="submit" name="submitButton1" id="nextButton" value="Next &gt;" style="margin-right:20px;"/>
        </div>
 </div>
 <?php studentDetail();?>
 </form>
 <?php }
 function displayStep2($missingFields){
 ?>
 <h1>Student Registration Form:For Father</h1>
 <?php  if ($missingFields) { ?>
<p class="error">There were some problems with the form you submitted. 
Please complete the fields highlighted below and click Send Details to 
resend the form.</p>
<?php  } else { ?>
<p>Thanks for choosing to join Our System. To register, please 
fill in your details below and click Send Details. Fields marked with an 
asterisk (*) are required.</p>
<?php  } ?>
 <form action="registration_students.php" method="post">
  <div style="width: 30em;">
  <input type="hidden" name="step" value="2" />
  <input  type="hidden" name="studentId" id="studentId" value="<?php setValue( "studentId" ) ?>" />
  <input type="hidden" name="nameEnglish" id="nameEnglish" value="<?php setValue( "nameEnglish" ) ?>"/>
  <label for="fatherName"<?php validateField( "fatherName",$missingFields) ?>>Father's Name*</label>
<input type="text" name="fatherName" id="fatherName" value="<?php setvalue("fatherName")?>"/>

<label>Father's Race</label>
<select name="fatherRace" size="1">
	<option value="Kachin"<?php setSelected( "fatherRace", "Kachin" ) ?>>Kachin</option>
	<option value="Kayar"<?php setSelected( "fatherRace", "Kayar" ) ?>>Kayar</option>
	<option value="Kayin"<?php setSelected( "fatherRace", "Kayin" ) ?>>Kayin</option>
	<option value="Chin"<?php setSelected( "fatherRace", "Chin" ) ?>>Chin</option>
	<option value="Barma"<?php setSelected( "fatherRace", "Barma" ) ?>>Barma</option>
	<option value="Mon"<?php setSelected( "fatherRace", "Mon" ) ?>>Mon</option>
    <option value="Rhakine"<?php setSelected( "fatherRace", "Rhakhine" ) ?>>Rhakhine</option>
	<option value="Shan"<?php setSelected( "fatherRace", "Shan" ) ?>>Shan</option>
</select>
<label>Father's Religion</label>
<select name="fatherReligion" size="1">
	<option value="Buddish"<?php setSelected( "fatherReligion", "Buddish" ) ?>>Buddish</option>
	<option value="Khayinshan"<?php setSelected( "fatherReligion", "Khayinshan" ) ?>>Khayinshan</option>
	<option value="Hindo"<?php setSelected( "fatherReligion", "Hindo" ) ?>>Hindo</option>
	<option value="Asanlan"<?php setSelected( "fatherReligion", "Asanlan" ) ?>>Asanlan</option>
	<option value="Sick"<?php setSelected( "fatherReligion", "Sick" ) ?>>Sick</option>
	</select>
<label>Father's Place of Birth</label>
<input type="text" name="fatherPlaceOfBirth" id="fatherPlaceOfBirth" value="<?php setvalue("fatherPalceOfBirth")?>"/>

<label for="fatherNrc"<?php validateField( "fatherNrc",$missingFields) ?>>Father's  NRC*</label>
<input type="text" name="fatherNrc" id="fatherNrc" value="<?php setvalue("fatherNrc")?>" placeholder="12/MGT(N)099476"/>

<label>Father's Nationalilty</label>
<input type="text" name="fatherNationality" id="fatherNationality value="<?php setvalue("fatherNationality")?>"/>
<div style="clear: both;">
          <input type="submit" name="submitButton2" id="nextButton" value="Next &gt;"  />
          <input type="submit" name="submitButton2" id="backButton" value="&lt; Back" style="margin-right: 20px;" />
        </div>
  </div>
 </form>
 <?php 
 }
 function displayStep3($missingFields){
 ?>
 <h1>Studens Registration Form:For Mother</h1>
 <?php  if ($missingFields) { ?>
<p class="error">There were some problems with the form you submitted. 
Please complete the fields highlighted below and click Send Details to 
resend the form.</p>
<?php  } else { ?>
<p>Thanks for choosing to join Our System. To register, please 
fill in your details below and click Send Details. Fields marked with an 
asterisk (*) are required.</p>
<?php  } ?>
 <form action="registration_students.php" method="post">
 <div style="width: 30em;">
  <input type="hidden" name="step" value="3" />
  <input  type="hidden" name="studentId" id="studentId" value="<?php setValue( "studentId" ) ?>" />
  <input type="hidden" name="nameEnglish" id="nameEnglish" value="<?php setValue( "nameEnglish" ) ?>"/>
  <label for="motherName"<?php validateField( "motherName",$missingFields) ?>>Mother's Name*</label>
<input type="text" name="motherName" id="motherName" value="<?php setValue("motherName")?>"/>

<label>Mother's Race</label>
<select name="motherRace" size="1">
	<option value="Kachin"<?php setSelected( "motherRace", "Kachin" ) ?>>Kachin</option>
	<option value="Kayar"<?php setSelected( "motherRace", "Kayar" ) ?>>Kayar</option>
	<option value="Kayin"<?php setSelected( "motherRace", "Kayin" ) ?>>Kayin</option>
	<option value="Chin"<?php setSelected( "motherRace", "Chin" ) ?>>Chin</option>
	<option value="Barma"<?php setSelected( "motherRace", "Barma" ) ?>>Barma</option>
	<option value="Mon"<?php setSelected( "motherRace", "Mon" ) ?>>Mon</option>
    <option value="Rhakine"<?php setSelected( "motherRace", "Rhakhine" ) ?>>Rhakhine</option>
	<option value="Shan"<?php setSelected( "motherRace", "Shan" ) ?>>Shan</option>
</select>
<label>Mother's Religion</label>
<select name="motherReligion" size="1">
	<option value="Buddish"<?php setSelected( "motherReligion", "Buddish" ) ?>>Buddish</option>
	<option value="Khayinshan"<?php setSelected( "motherReligion", "Khayinshan" ) ?>>Khayinshan</option>
	<option value="Hindo"<?php setSelected( "motherReligion", "Hindo" ) ?>>Hindo</option>
	<option value="Asanlan"<?php setSelected( "motherReligion", "Asanlan" ) ?>>Asanlan</option>
	<option value="Sick"<?php setSelected( "motherReligion", "Sick" ) ?>>Sick</option>
	</select>
<label>Mother's Place of Birth</label>
<input type="text" name="motherPlaceOfBirth" id="motherPlaceOfBirth" value="<?php setValue("motherPlaceOfBirth")?>"/>

<label for="motherNrc"<?php validateField( "motherNrc",$missingFields) ?>>Mother'sNrc*</label>
<input type="text" name="motherNrc" id="motherNrc" value="<?php setValue("motherNrc")?>" placeholer="12/MGT(N)099476"/>

<label>Mother's Nationalilty</label>
<input type="text" name="motherNationality" id="motherNationality value="<?php setValue("motherNationality")?>"/>
<div style="clear: both;">
          <input type="submit" name="submitButton3" id="nextButton" value="Next &gt;"/>
          <input type="submit" name="submitButton3" id="backButton" value="&lt; Back" style="margin-right: 20px;" />
        </div>
  </div>
 </form>
<?php 
 }function displayStep4($missingFields){
 ?>
 <h1>Studens Registration Form:For Suppoter</h1>
 <?php  if ($missingFields) { ?>
<p class="error">There were some problems with the form you submitted. 
Please complete the fields highlighted below and click Send Details to 
resend the form.</p>
<?php  } else { ?>
<p>Thanks for choosing to join Our System. To register, please 
fill in your details below and click Send Details. Fields marked with an 
asterisk (*) are required.</p>
<?php  } ?>
 <form action="registration_students.php" method="post">
  <div style="width: 30em;">
  <input type="hidden" name="step" value="4" />
  <input  type="hidden" name="studentId" id="studentId" value="<?php setValue( "studentId" ) ?>" />
  <input type="hidden" name="nameEnglish" id="nameEnglish" value="<?php setValue( "nameEnglish" ) ?>"/>
  <label for="supporterName"<?php validateField( "supporterName",$missingFields) ?>>Suppporter's Name*</label>
<input type="text" name="supporterName" id="supporterName" value="<?php setValue( "supporterName" ) ?>"/>

<label for="supporterRelationship"<?php validateField( "supporterRelationship",$missingFields) ?>>Relationship*</label>
<select name="supporterRelationship" size="1">
	<option value="Father"<?php setSelected( "supporterRelationship", "Father" ) ?>>Father</option>
	<option value="Mother"<?php setSelected( "supporterRelationship", "Mother" ) ?>>Mother</option>
	<option value="GrandFther"<?php setSelected( "supporterRelationship", "GrandFather" ) ?>>GrandFather</option>
	<option value="GrandMother"<?php setSelected( "supporterRelationship", "GrandMother" ) ?>>GrandMother</option>
	<option value="Uncle"<?php setSelected( "supporterRelationship", "Uncle" ) ?>>Uncle</option>
	<option value="Aunt"<?php setSelected( "supporterRelationship", "Aunt" ) ?>>Aunt</option>
	<option value="Brother"<?php setSelected( "supporterRelationship", "Brother" ) ?>>Brother</option>
	<option value="Sister"<?php setSelected( "supporterRelationship", "Sister" ) ?>>Sister</option>
	</select>
<label>Occuption</label>
<input type="text" name="supporterOccuption" id="supporterOccuption" value="<?php setValue( "supporterOccuption" ) ?>"/>

<label>Address</label>
<textarea name="supporterAddress" id="supporterAddress"><?php setValue( "supporterAddress" ) ?></textarea>

<label for="supporterPhone"<?php validateField( "supporterPhone",$missingFields) ?>>Phone*</label>
<input type="text" name="supporterPhone" id="supporterPhone" value="<?php setValue( "supporterPhone" ) ?>"/>
 <label for="agreement"<?php validateField( "agreement", $missingFields ) ?>>Stipend Agreement*</label>
<label>Yes</label>
<input type="radio" name="agreement" id="agreement" value="Y"<?php setChecked( "agreement", "Y" )?>/>
<label>No</label>
<input type="radio" name="agreement" id="agreement" value="N"<?php setChecked( "agreement", "N" )?>/>
<div style="clear: both;">
          <input type="submit" name="submitButton4" id="nextButton" value="Next &gt;" onclick="onclick_button()" />
          <input type="submit" name="submitButton4" id="backButton" value="&lt; Back" style="margin-right: 20px;" />
        </div>
  </div>
  </form>
  <?php 
 }function displayStep5($missingFields){
 ?>
 <h1>Studens Registration Form:Education History</h1>
 <?php  if ($missingFields) { ?>
<p class="error">There were some problems with the form you submitted. 
Please complete the fields highlighted below and click Send Details to 
resend the form.</p>
<?php  } else { ?>
<p>Thanks for choosing to join Our System. To register, please 
fill in your details below and click Send Details. Fields marked with an 
asterisk (*) are required.</p>
<?php  } ?>
<form action="registration_students.php" method="post">
  <div style="width: 30em;">
  <input type="hidden" name="step" value="5" />
  <input  type="hidden" name="studentId" id="studentId" value="<?php setValue( "studentId" ) ?>" />
  <input type="hidden" name="nameEnglish" id="nameEnglish" value="<?php setValue( "nameEnglish" ) ?>"/>
  <label>Academic Year</label>
  <select name="academicYear" size="1">
	<option value="1993-1994" <?php setSelected( "academicYear", "1993-1994" ) ?>>1993-1994</option>
	<option value="1994-1995" <?php setSelected( "academicYear", "1994-1995" ) ?>>1994-1995</option>
	<option value="1995-1996" <?php setSelected( "academicYear", "1995-1996" ) ?>>1995-1996</option>
	<option value="1996-1997" <?php setSelected( "academicYear", "1996-1997" ) ?>>1996-1997</option>
	<option value="1997-1998" <?php setSelected( "academicYear", "1997-1998" ) ?>>1997-1998</option>
	<option value="1998-1999" <?php setSelected( "academicYear", "1998-1999" ) ?>>1998-1999</option>
	<option value="1999-2000" <?php setSelected( "academicYear", "1999-2000" ) ?>>1999-2000</option>
	<option value="2000-2001" <?php setSelected( "academicYear", "2000-2001" ) ?>>2000-2001</option>
	<option value="2001-2002" <?php setSelected( "academicYear", "2001-2002" ) ?>>2001-2002</option>
	<option value="2002-2003" <?php setSelected( "academicYear", "2002-2003" ) ?>>2002-2003</option>
	<option value="2003-2004" <?php setSelected( "academicYear", "2003-2004" ) ?>>2003-2004</option>
	<option value="2004-2005" <?php setSelected( "academicYear", "2004-2005" ) ?>>2004-2005</option>
	<option value="2005-2006" <?php setSelected( "academicYear", "2005-2006" ) ?>>2005-2006</option>
	<option value="2006-2007" <?php setSelected( "academicYear", "2006-2007" ) ?>>2006-2007</option>
	<option value="2007-2008" <?php setSelected( "academicYear", "2007-2008" ) ?>>2007-2008</option>
	<option value="2008-2009" <?php setSelected( "academicYear", "2008-2009" ) ?>>2008-2009</option>
	<option value="2009-2010" <?php setSelected( "academicYear", "2009-2010" ) ?>>2009-2010</option>
	<option value="2010-2011" <?php setSelected( "academicYear", "2010-2011" ) ?>>2010-2011</option>
	<option value="2011-2012" <?php setSelected( "academicYear", "2011-2012" ) ?>>2011-2012</option>
	<option value="2012-2013" <?php setSelected( "academicYear", "2012-2013" ) ?>>2012-2013</option>
	<option value="2013-1014" <?php setSelected( "academicYear", "2013-2014" ) ?>>2013-1014</option>
	<option value="2014-1015" <?php setSelected( "academicYear", "2014-2015" ) ?>>2014-2015</option>
	<option value="2015-2016" <?php setSelected( "academicYear", "2015-2016" ) ?>>2015-2016</option>
	<option value="2016-2017" <?php setSelected( "academicYear", "2016-2017" ) ?>>2016-2017</option>
	<option value="2017-2018" <?php setSelected( "academicYear", "2017-2018" ) ?>>2017-2018</option>
	<option value="2018-2019" <?php setSelected( "academicYear", "2018-2019" ) ?>>2018-2019</option>
	<option value="2019-2020" <?php setSelected( "academicYear", "2019-2020" ) ?>>2019-2020</option>
	<option value="2020-2021" <?php setSelected( "academicYear", "2020-2021" ) ?>>2020-2021</option>
	<option value="2021-2022" <?php setSelected( "academicYear", "2021-2022" ) ?>>2021-2022</option>
	<option value="2022-2023" <?php setSelected( "academicYear", "2022-2023" ) ?>>2022-2023</option>
	<option value="2023-2024" <?php setSelected( "academicYear", "2023-2024" ) ?>>2023-2024</option>
	<option value="2024-2025" <?php setSelected( "academicYear", "2024-2025" ) ?>>2024-2025</option>
</select>

<label>Year Name</label>
<select name="yearName" size="1">
	<option value="firstYear" <?php setSelected( "yearName","firstYear" ) ?>>First Year</option>
	<option value="secondYear" <?php setSelected( "yearName","secondYear" ) ?>>Second Year</option>
	<option value="thirdYear" <?php setSelected( "yearName","thirdYear") ?>>Third Year</option>
	<option value="fourthYear" <?php setSelected( "yearName","fourthYear" ) ?>>Fourth Year</option>
	<option value="fifthYear" <?php setSelected( "yearName","fifthYear" ) ?>>Fifth Year</option>
</select> 

<label for="specializationName"<?php validateField( "specializationName",$missingFields) ?>>Specialization Name*</label>
<input type="text" name="specializationName" id="specializationName" value="<?php setValue( "specializationName" ) ?>"/>

<label for="eduRollno"<?php validateField( "eduRollno",$missingFields) ?>>Roll No*</label>
<input type="text" name="eduRollno" id="eduRollno" value="<?php setValue( "eduRollno" ) ?>"/>
<label for="status"<?php validateField( "status", $missingFields ) ?>>Status*</label>
<label>Pass</label>
<input type="radio" name="status" id="status" value="Pass"<?php setChecked( "status", "Pass" )?>/>
<label>Fail</label>
<input type="radio" name="status" id="status" value="Fail"<?php setChecked( "status", "Fail" )?>/>
<div style="clear: both;">
          <input type="submit" name="submitButton5" id="nextButton" value="Next &gt;" />
          <input type="submit" name="submitButton5" id="backButton" value="&lt; Back" style="margin-right: 20px;" />
        </div>
</div>
</form><?php }
 function displayThanks(){
 ?>
 <h1>Thanks You!</h1>
 <h2><?php echo $_POST["studentId"]. " <br>". $_POST["nameEnglish"] ?></h2>
    <p>Thank you, your application has been received.</p>
 <?php 
 }
 
 include("footer.php");
 ?>
 
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

function studentDetail(){
	if (!empty($_POST)){
		try {
			$studentId=$_POST["studentId"];
			$nameEnglish=$_POST["nameEnglish"];
			$nameMyanmar=$_POST["nameMyanmar"];
			$race=$_POST["race"];
			$religion=$_POST["religion"];
			$placeOfBirth=$_POST["placeOfBirth"];
			$nrc=$_POST["nrc"];
			$nationality=$_POST["nationality"];
			//$dataOfBirth=$_POST["day"].$_POST["month"].$_POST["year"];
			$dayOfBirth=$_POST["day"];
			$monthOfBirth=$_POST["month"];
			$yearOfBirth=$_POST["year"];
			$gender=$_POST["gender"];
			$permanentAddress=$_POST["permanentAddress"];
			$yearName=$_POST["yearName"];
			$rollNo=$_POST["rollNo"];
			$academicYear=$_POST["academicYear"];
			$studentPhone=$_POST["studentPhone"];
			$studentEmail=$_POST["studentEmail"];
			$sql="INSERT INTO student_registration_tbl(studentId,
		                                          nameEnglish,
		                                          nameMyanmar,
		                                          race,
		                                          religion,
		                                          placeOfBirth,
		                                          nrc,
		                                          nationality,
		                                          dayOfBirth,
		                                          monthOfBirth,
		                                          yearOfBirth,
		                                          gender,
		                                          permanentAddress,
		                                          yearName,
		                                          rollNo,
		                                          academicYear,
		                                          studentPhone,
		                                          studentEmail) VALUES
		 (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
			$stmt=$conn->prepare($sql);
			$stmt->bindValue(1, $studentId);
			$stmt->bindValue(2, $nameEnglish);
			$stmt->bindValue(3, $nameMyanmar);
			$stmt->bindValue(4, $race);
			$stmt->bindValue(5, $religion);
			$stmt->bindValue(6, $placeOfBirth);
			$stmt->bindValue(7, $nrc);
			$stmt->bindValue(8, $nationality);
			$stmt->bindValue(9, $dayOfBirth);
			$stmt->bindValue(10, $monthOfBirth);
			$stmt->bindValue(11, $yearOfBirth);
			$stmt->bindValue(12, $gender);
			$stmt->bindValue(13, $permanentAddress);
			$stmt->bindValue(14, $yearName);
			$stmt->bindValue(15, $rollNo);
			$stmt->bindValue(16, $academicYear);
			$stmt->bindValue(17, $studentPhone);
			$stmt->bindValue(18, $studentEmail);

			$stmt->execute();
		}catch (PDOException $e){
			die(var_dump($e));

		}

	}
}
function studentFatherDetail(){
	if (!empty($_POST)){
		try {
			$fatherName=$_POST["fatherName"];
			$fatherRace=$_POST["fatherRace"];
			$fatherReligion=$_POST["fatherReligion"];
			$fatherPlaceOfBirth=$_POST["fatherPlaceOfBirth"];
			$fatherNationality=$_POST["fatherNationality"];
			$sql="INSERT INTO student_father_tbl(
		          fatherName,
		          fatherRace,
		          fatherReligion,
		          fatherPlaceOfBirth,
		          fatherNationality) VALUES
		 (?,?,?,?,?);";
			$stmt=$conn->prepare($sql);
			$stmt->bindValue(1, $fatherName);
			$stmt->bindValue(2, $fatherRace);
			$stmt->bindValue(3, $fatherReligion);
			$stmt->bindValue(4, $fatherPlaceOfBirth);
			$stmt->bindValue(5, $fatherNationality);

			$stmt->execute();
		}catch (PDOException $e){
			die(var_dump($e));

		}


	}
}

function studentMotherDetail(){
	if (!empty($_POST)){
		try {
			$motherName=$_POST["motherName"];
			$motherRace=$_POST["motherRace"];
			$motherReligion=$_POST["motherReligion"];
			$motherPlaceOfBirth=$_POST["motherPlaceOfBirth"];
			$motherNationality=$_POST["motherNationality"];
			$sql="INSERT INTO student_mother_tbl(
		          motherName,
		          motherRace,
		          motherReligion,
		          motherPlaceOfBirth,
		          motherNationality) VALUES
		 (?,?,?,?,?);";
			$stmt=$conn->prepare($sql);
			$stmt->bindValue(1, $motherName);
			$stmt->bindValue(2, $motherRace);
			$stmt->bindValue(3, $motherReligion);
			$stmt->bindValue(4, $motherPlaceOfBirth);
			$stmt->bindValue(5, $motherNationality);

			$stmt->execute();
		}catch (PDOException $e){
			die(var_dump($e));
		}

	}		}
	function studentSupporterDetail(){
		if (!empty($_POST)){
			try {
				$supporterName=$_POST["supporterName"];
				$supporterRelationship=$_POST["supporterReltionship"];
				$supporterOccupation=$_POST["supporterOccupation"];
				$supporterAddress=$_POST["supporterAddress"];
				$supporterPhone=$_POST["supporterPhone"];
				$agreement=$_POST["agreement"];
					
				$sql="INSERT INTO student_supporter_tbl (
			suporterName ,
			supporterRelationship,
			supporterReligion,
			supporterOccupation,
			supporterAddress,
			supporterPhone,
			agreement
			)VALUES 
			(?,?,?,?,?,?)
			
			;";
					
			}catch (PDOException $e){
				die(var_dump($e));
			}
		}

			
	}

	//echo "<h3>You're registered!</h3>";
	//}
	/*
	 $sql="SELECT * FROM student_registration_tbl ";
	 $stmt=$conn->query($sql);
	 $registrants=$stmt->fetchAll();

	 if(count($registrants)>0){
	 echo "<h1>Thank you for your registration! ";
	 /*echo "<h2>People who are registered:<h2>";
	 echo "<table>";
	 echo "<tr><th>FirstName</th>";
	 echo "<th>LastName</th>";
	 echo "<th>Gneder</th>";
	 echo "<th>FavoriteWidget</th>";
	 */
	//	foreach ($registrants as $registrant){
	/*	echo "<tr><td>".$registrant['firstname']."</td>";
	 echo "<td>".$registrant["lastname"]."</td>";
	 echo "<td>".$registrant["gender"]."</td>";
	 echo "<td>".$registrant["widget"]."</td></tr>";
	 *//*
	 echo "StudentId :".$registrant['studentId']."<br>";
	 echo "Name By English :".$registrant['nameEnglish']."<br>";
	 echo "Name By Myanmar :".$registrant['nameMyanmar']."<br>";
	 echo "Race :".$registrant['race']."<br>";
	 echo "Religion :".$registrant['religion']."<br>";
	 echo "Place Of Birth :".$registrant['placeOfBirth']."<br>";
	 echo "NRC :".$registrant['nrc']."<br>";
	 echo "Nationality :".$registrant['nationality']."<br>";
	 echo "Date of Birth :".$registrant['dayOfBirth'].$registrant['monthOfBirth'].$registrant['yearOfBirth']."<br>";
	 echo "Gender :".$registrant['gender']."<br>";
	 echo "Permanant Address :".$registrant['permanentAddress']."<br>";
	 echo "YearName :".$registrant['yearName']."<br>";
	 echo "Roll No :".$registrant['rollNo']."<br>";
	 echo "Academic Year :".$registrant['academicYear']."<br>";
	 echo "Phone :".$registrant['studentPhone']."<br>";
	 echo "Email :".$registrant['studentEmail']."<br>";
	 }
	 //echo "<table>";
	 }else {
	 echo "<h3>No one is currently registered!";
	 }

	 if($conn->query($sql)==true){
	 echo  "Select query is successful";
	 }
	 else {
	 echo "Not successful";
	 }
	 */
	?>
<?php 
if($_POST['submitButton1']=="Next &gt"){
	studentDetail();
}
?>
 
 
 

</body>
</html>

 
 
 
 
