<?php 
//Create a database connection
require_once("included_functions.php");

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "sarahah";
	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	//Test if connection done.
	if(mysqli_connect_errno()) {
		die("Database connection failed : " . mysqli_connect_error() . " ( " .mysqli_connect_errno() . ")");
	}


	//Check if form was submitted
	if(isset($_POST['submit'])) {
		$name=mysqli_real_escape_string($con, $_POST['name']);
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$email = mysqli_real_escape_string($con, $_POST['email']);


	//Read data from users table for comparision 
		$query = "SELECT * FROM users";
		$result = mysqli_query($con, $query);

		//Form Validation
		if(!isset($name) || $name=='' || !isset($username) || $username =='' || !isset($password) || $password =='' || !isset($email) || $email=='') {

			echo  "Please fill in the form completely and correctly";
			//header("Location : index.php?error=".urlencode($error));
			exit();

		}

			while($row = mysqli_fetch_assoc($result)) {
				//check if the username, email already exits or not
			
				 if($row["username"]==$username)
				 {
				 	echo "Username already exists. Please choose a different username";
				 	exit();
				 }
				 else if($row["email"]==$email)
				 {
				 	echo "Email already exists. Please provide a different Email address";
				 	exit();
				 }
				else {
					$query ="INSERT INTO users (name, username, password, email)
							VALUES ('$name', '$username', '$password', '$email')";

					if(!mysqli_query($con, $query))
					{
						die('Error : '.mysqli_error($con));
					}
					else {
						redirect_to("index.php");
						exit();
					}
				}


				}
			
		

		
	}

?>

