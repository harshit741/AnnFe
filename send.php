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
    <title>Send message | Annonymous Feedback</title>
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
        <a class="cus-font navbar-brand" href="index.php"><h2>AnnFe.com</h2></a>
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
           <li class="nav-item">
             <a class="nav-link active" href="profile.php">My Profile</a>
           </li>
            <li class="nav-item">
              <a class="nav-link" href="disclaimer.html">Disclaimer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.html">About</a>
            </li>
						<li class="btn btn-info"><a style="color:white;text-decoration:none;" href="logout.php">Logout</a></li>

          </ul>
   </nav>

   <div style="padding-bottom:26%" class="jumbotron" >
   <form method="post" action="process.php">
 			<table align="center">
 				<tr>
 					<td>To : </td>
 					<td><input type="text" name="receiver" placeholder="Receiver's username "></td>
 				</tr>
 				<tr>
 					<td>Annonymous Message</td>
 					<td><textarea name="msg"></textarea></td>
 				</tr>
 				<tr>
 					<td></td>
 					<td><input type="submit" name="submit"></td>
 				</tr>
 			</table>
 		</form>
   </div>
   <div class="fixed-bottom row mt-0 ml-0 container-fluid" style="background:  #999999;">
               <div class="col-sm-5">Annonymous Feedback © 2019 - All Rights Reserved.</div>
               <div class="col-sm-3 ">For Source code, <a href="https://www.github.com/harshit741/annfe">Click Here!</a></div>
               <div class="col-sm-3">Designed by <a href="https://www.linkedin.com/in/harshitsingh-/">Harshit Singh</a></div>
       </div>
 </body>
 </html>
