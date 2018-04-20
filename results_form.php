<html>

	<head>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	
	<body>
	
		<div id="main">
		<h1>Results info</h1>
		<div id="login">
		<form action="" method="post">
			
			<label>Index Number: </label> 
			<input type="text" name="index_number" id="i_number" required="required"><br/> <br/>
			
			<label>Mathematics: </label>
			<input type="int" name="mtc" id="math" required="required"> <br/> <br/>
			
			<label>English: </label>
			<input type="int" name="en" id = "en" required="required"> <br/> <br/>
			
			<label>Science: </label>
			<input type="int" name="sci" id = "sci" required="required"> <br/> <br/>
			
			<label>Social Studies: </label>
			<input type="int" name="sst" id = "sst" required="required"> <br/> <br/>
			<br/><br/>
			
			
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


	$r1 = $_POST['mtc'];
	$r2 = $_POST['en'];
	$r3 = $_POST['sci'];
	$r4 = $_POST['sst'];

	$total = $r1 + $r2 + $r3 + $r4;


	$sql = "INSERT INTO results (index_number, mathematics, english, science, social_studies, aggregate )
		VALUES ('".$_POST["index_number"]."' , '".$_POST["mtc"]."' , '".$_POST["en"]."' , '".$_POST["sci"]."' , '".$_POST["sst"]."' , '".$total."')";

	if ($conn->query($sql) === TRUE) 
	{
		echo "<script type= 'text/javascript'>alert('results successfully entered');</script>";
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