<?php
session_start();

$name=$_SESSION["name"];
$username=$_SESSION["username"];
$password=$_SESSION["password"];
$email=$_SESSION["email"];


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sarahah";
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$resu = mysqli_query($con,"SELECT * FROM messages WHERE username='$username'");
$count = mysqli_num_rows($resu);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | Annonymous Feedback</title>
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
                 <a class="nav-link active" href="profile.html">My Profile</a>
               </li>
                <li class="nav-item">
                  <a class="nav-link" href="disclaimer.html">Disclaimer</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="About.html">About</a>
                </li>
              </ul>
    </nav>
    <div style="padding-bottom:26%" class="jumbotron row">
       <div class="col-sm-6">
        <h2>Welcome back, <?php echo $name; ?></h2>
        <table>
          <tr>
            <td>Name : </td>
            <td><?php echo $name ?></td>
          </tr>
          <tr>
            <td>Username : </td>
            <td><?php echo $username ?></td>
          </tr>

          <tr>
            <td>Email : </td>
            <td><?php echo $email ?></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
        </table>
        </div>
        <div class="col-sm-3">
          <p>Total messages received:</p>
        <span class="form-inline">  <h1 style="color:green; font-size:3rem"><?php echo $count ?></h1>&nbsp;&nbsp;&nbsp;
          <a href="messages.php"><button type="button" class="btn btn-success">View Messages</button></a>
        </span>
        </div>
        <div class="col-sm-3">
          <h3>Send Annonymously to someone</h3>
          <a href="send.php"><button type="button" class="btn btn-primary">Send Message</button></a>
        </div>
      </div>
      <div class="fixed-bottom row mt-0 ml-0 container-fluid" style="background:  #999999;">
            <div class="col-sm-5">Annonymous Feedback © 2019 - All Rights Reserved.</div>
            <div class="col-sm-3 ">For Source code, <a href="https://www.github.com/harshit741/annfe">Click Here!</a></div>
            <div class="col-sm-3">Designed by <a href="https://www.linkedin.com/in/harshitsingh-/">Harshit Singh</a></div>
    </div>

</body>
</html>
