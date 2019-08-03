
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Annonymous Feedback</title>
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
                  <a class="nav-link active" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
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
            <div class="container-fluid">
                    <form method="POST" action="reg_proc.php" class="form-group">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name"  placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" name="email"  placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Your Username"/>
                            </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" required name="agree-term" id="agree-term" />
                            <label for="agree-term" class="form-check-label" ><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-success">Sign Up</button>
                        </div>
                    </form>
                    <p>
                        Already have an account ? <a href="login.php">Log In here</a>.
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