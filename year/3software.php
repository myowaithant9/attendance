<html>
	<head>
		<style>
			table{
	               font-size:20px;		
				}
			body{
				background:url("images/bg.jpg");
			}		
		</style>
	</head>
	<title>Attendence for Third Year Students</title>
		<body>
			<h1>Attendence for Third Year Students</h1>
			<h2>3<sup>rd</sup> <i>Year Software</i> Student's Attendence </h2>
		<?php
			function setSelected( $fieldName, $fieldValue ) {
  			if ( isset( $_POST[$fieldName] ) and $_POST[$fieldName] == $fieldValue ) {
   			 echo ' selected="selected"';
 			 }
		}
		if(isset($_POST["countButton"])){
			displayTable();
		}
		else displayForm();
		
		function displayForm(){
	?>
		<form action="3software.php" method="post">
			<label for="count">How many rows do you want to create?</label>
			<select name="count">
			<?php
				for($n=1;$n<=300;$n++){
					?>
						<option><?php echo $n;?></option>
					<?php	
				}
			?>
			</select>
			<input type="submit" name="countButton" value="Okay">
			
		</form><?php }
		
		function displayTable(){
		?>
			<form action="3software.php" method="post">
			<label for="count">How many rows do you want to create?</label>
			<select name="count">
			<?php
				for($n=1;$n<=300;$n++){
					?>
						<option<?php setSelected("count", $n)?>><?php echo $n;?></option>
					<?php	
				}
			?>
			</select>
			<input type="submit" name="countButton" value="Okay">
			
		</form>
		<table border="1" id="mark">
		<tr><th>Name</th>
		<th>English</th>
		<th>301</th>
		<th>302</th>
		<th>303</th>
		<th>304</th>
		<th>305</th>
		<th>306</th>
		</tr>
			<?php
				$c= $_POST["count"];
				for($i=1;$i<=$c;$i++){
					?>
					<tr>
						<td><input type="text" name="attendence"> </td>
						<td><input type="text" name="attendence"></td>
						<td><input type="text" name="attendence"></td>
						<td><input type="text" name="attendence"></td>
						<td><input type="text" name="attendence"></td>
						<td><input type="text" name="attendence"></td>
						<td><input type="text" name="attendence"></td>
						<td><input type="text" name="attendence"></td>
					</tr>
					
				<?php	
				}
			?>	
		</table>
		<input type="submit" name="save" value="Save" id="save">
		<?php
		}
		?>
		
		</div>
			
		</body>
</html>
