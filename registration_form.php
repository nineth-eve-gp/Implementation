<html>

	<head>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	
	<body>
	
		<div id="main">
		<h1>Registration info</h1>
		<div id="login">
		<form action="" method="post">
			
			<label>Index Number: </label> 
			<input type="text" name="index_number" id="i_number" required="required"><br/> <br/>
			
			<label>Sur Name: </label>
			<input type="text" name="sur_name" id="s_name" required="required"> <br/> <br/>
			
			<label>Last Name: </label>
			<input type="text" name="given_name" id = "g_name" required="required"> <br/> <br/>
			
			<label>School 1: </label>
			<input type="text" name="sch_one" id = "s_one" required="required"> <br/> <br/>
			
			<label>School 2: </label>
			<input type="text" name="sch_two" id = "s_two" required="required"> <br/> <br/>
			
			<label>School 3: </label>
			<input type="text" name="sch_three" id = "s_three" required="required"> <br/> <br/>
			
			<label>School 4: </label>
			<input type="text" name="sch_four" id = "s_four" required="required"> <br/>
			
			
			<input type="submit" name ="submit" value ="submit" > <br/>
			
		</form>
		</div>
		
		</div>
		
		
<?php
if(isset($_POST["submit"]))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "student_info";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	//echo "Success";

	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}


	$sql = "INSERT INTO registration (index_number, sur_name, given_name, school_1, school_2, school_3, school_4)
		VALUES ('".$_POST["index_number"]."' , '".$_POST["sur_name"]."' , '".$_POST["given_name"]."' , '".$_POST["sch_one"]."' , '".$_POST["sch_two"]."' , '".$_POST["sch_three"]."' , '".$_POST["sch_four"]."')";

	if ($conn->query($sql) === TRUE) 
	{
		echo "<script type= 'text/javascript'>alert('Welcome on board :)');</script>";
	} 
	
	else 
	{
		echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
	}

	$conn->close();
	}
?>
</body>
</html>