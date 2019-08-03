<?php 
	session_start(); 
	require_once("included_functions.php");

	//Create a database connection
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "sarahah";
		$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

		//Test if connection occured.
		if(mysqli_connect_errno()) {
			die("Database connection failed : " . mysqli_connect_error() . " ( " .mysqli_connect_errno() . ")");
		}

	if(isset($_POST['submit']))
	{
		//Message was submitted
		$receiver =$_POST['receiver'];
		$msg =$_POST['msg'];


		// Perform insert query ) 
		$query = "INSERT INTO messages (msg, username)
				 VALUES ('$msg' , '$receiver')";

		if(!mysqli_query($con, $query))
		{
			die('Error : '.mysqli_error($con));
		}
		else {
			redirect_to("profile.php");
			exit();
		}
	}

	else
	{
		echo "error sending message";
		exit();
	}


 ?>


