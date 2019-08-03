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
	//form was submitted
	$username =$_POST['username'];
	$password =$_POST['password'];



	//Read data from users table for comparision
		$query = "SELECT * FROM users";
		$result = mysqli_query($con, $query);

		while($row = mysqli_fetch_assoc($result)) {
			//check if the username exists

			 if(($row["username"]==$username) && ($row["password"]==$password))
			 {
			 	//successful login

			 	//session data
			 	$data= array (
			 			'name' => $row["name"],
			 			'username' => $username,
			 			'password' => $password,
			 			'email' => $row["email"],
			 		);

			 	$_SESSION["name"]=$row["name"];
			 	$_SESSION["username"]=$username;
			 	$_SESSION["password"]=$password;
			 	$_SESSION["email"]=$row["email"];
				$_SESSION["count"]=$count;
			 	redirect_to("profile.php?username=$username");
			 }
			 else
			 {
			 	$message = "There were some errors";
			 }



	}



}else {
	$username = "";
	$message="Please Login!";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login | Sarahah.com </title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Annonymous Feedback</title>
    <link rel="stylesheet" type="text/css" href="src/bootstrap.css">
    <style>
    @font-face{
        font-family: Beautiful People Personal Use;
        src: url(src/font/cus-font.ttf)
    }
    .cus-font{
        font-family: Beautiful People Personal Use;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
        <a class="cus-font navbar-brand" href="index.html"><h2>AnnFe.com</h2></a>
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Disclaimer</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="About.html">About</a>
                </li>
              </ul>
   </nav>

   <div class="text-left jumbotron">
		 <div class="alert alert-danger mt-0"> <strong><?php echo $message ?>
		 </div><br>
            <div class="container-fluid">
                    <form method="POST" action="login.php" class="form-group">
                        <h2 class="form-title">Log in to your account</h2>

                        <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Your Username"/>
                            </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                            <br>
                            <div class="form-group">
                            <button name="submit" value="submit" type="submit" class="btn btn-success ">Log In</button>
                        </div>
                    </form>
                    <p>
                        Don't have an account ? <a href="register.php">Sign Up here</a>.
                    </p>
             </div>

    </div>


<div class="fixed-bottom row mt-0 ml-0 container-fluid" style="background:  #999999;">
            <div class="col-sm-5">Annonymous Feedback © 2019 - All Rights Reserved.</div>
            <div class="col-sm-3 ">For Source code, <a href="https://www.github.com/harshit741/annfe">Click Here!</a></div>
            <div class="col-sm-3">Designed by <a href="https://www.linkedin.com/in/harshitsingh-/">Harshit Singh</a></div>
    </div>
</body>
</html>
