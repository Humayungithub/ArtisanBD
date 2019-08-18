<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Humayun Ahmed,Rifat Ahsan">
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

    <title>Sign Up - ArtisanBD</title>
    <link rel="icon" href="img/AB-logo.png">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main-style.css">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!-- Add custom CSS here -->
    <link href="css/landing-page.css" rel="stylesheet">

</head>
    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand"><span style="font-weight: 500; color: darkcyan; font-family:fantasy">Artisan</span> <span style="font-weight: 600; color: red">BD</span></a>
            </div>
            <div class="collapse navbar-collapse navbar-left navbar-ex1-collapse" >
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="showAllAddTitle.php">Show all adds</a></li>
                </ul>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="addEntry.php">Post your add</a>
                    </li>
                    <li><a href="registerForm.php">Sign Up</a>
                    </li>
                    <li><a href="LoginForm.php">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
            <?php
            session_start();
            if(isset($_SESSION["success"])){
                echo ('<p style="color: green">'.$_SESSION["success"]."</p>\n");
                unset($_SESSION["success"]);
            }
            if(isset($_SESSION["error"])){
                echo ('<p style="color: blue">'.$_SESSION["error"]."</p>\n");
                unset($_SESSION["error"]);
                
            }
            
            ?>
 <div class="content-section-a">
    <center>
            <div class="container">

                <h1>Sign up on ArtisanBD</h1>
               
            <form action="registerVerify.php" class="register" enctype="multipart/form-data" method="POST">
            
            
            <input type="text" name="firstName" placeholder="Enter First Name"required>*<br>
            
            <input type="text" name="lastName" placeholder="Enter Last Name"> <br>
            
            <input type="radio" name="gender" value="male" checked> Male 
            
            <input type="radio" name="gender" value="female"> Female
            
            
            <input type="radio" name="gender" value="other"> Other<br>
            
            <input type="email" name="email" placeholder="Ener your email address"required>*<br>
                       
            <input type="password" name="password" placeholder="Create a password"required>*<br>
            
            <input type="password" name="confirmPassword" placeholder="confirm password"required>*<br>
            
            <input type="text" name="description" placeholder="Describe yourself (Resume)" required><br>
            
            <input type="file" name="avatar"   placeholder="upload your profile picture" accept="image/*"><br>
                        
            <input id="register-button" type="submit" value="Create Account" name="upload" /><br>
            
        </form>
                
        </div>

            
    </center>
</div>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="help-support.html">About Us</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="help-support.html">FAQ</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="help-support.html">Contact Us</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Team Geeky Vive-Top Up IT. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    </body>
</html>