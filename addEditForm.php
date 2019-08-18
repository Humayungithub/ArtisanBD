
<?php 
     
    session_start();
    
    include 'dbConnect.php';
    
    $id = $_REQUEST["id"];
    
    $_SESSION['addToEdit']=$id;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Humayun Ahmed,Rifat Ahsan">
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

    <title>Edit your add - ArtisanBD</title>
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


        <nav class="navbar navbar-default navbar-fixed-top role="navigation">
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
                    <li><a href="Logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

        <div class="content-section-a">
 <center>
            <div class="container">
        
       <?php
       
            //session_start();
            if(!isset($_SESSION['isLogIn'])){
                
                $_SESSION["error"]= "you must log in to post an add.";
                
                header("Location: LoginForm.php");
                
                return;
            }
        ?>
        <h1 id="addPost">Edit Your Add</h1>
          <?php
            //session_start();
            if(isset($_SESSION["success"])){
                echo ('<p style="color: green">'.$_SESSION["success"]."</p>\n");
                unset($_SESSION["success"]);
            }
            if(isset($_SESSION["error"])){
                echo ('<p style="color: blue">'.$_SESSION["error"]."</p>\n");
                unset($_SESSION["error"]);
            }
        ?>
        <div class="addForm">
            
            <form action="addEdit.php" method="POST" enctype="multipart/form-data">
                
                Edit The Title:<br>
                
                <input type="text" name="addTitle" ><br>
                
                Edit your city:<br>
                
                <select id="slct1" name="slct1" onchange="populate(this.id,'slct2')" >
                    
                <option value=""></option>
                
                <option value="Dhaka">Dhaka</option>
                
                <option value="Chittagong">Chittagong</option>
                
                <option value="Sylhet">Sylhet</option>
                
                
                </select>*
                
                <br>
                
                Edit your Area:<br>
                
                <select id="slct2" name="slct2" value="slct2"></select>
                
                <br>
                
                Edit your address:<br>
                
                <input type="text" name="address">
                
                <br>
                
                Edit Service:<br>
                
                <select id="slct3" name="slct3" onchange="populate2(this.id,'slct4')" >
                    
                <option value=""></option>
                
                <option value="IT">IT</option>
                
                <option value="Tuition">Tuition</option>
                
                <option value="Health">Health</option>
                
                <option value="Repair">Repair</option>
                
                </select>*
                
                <br>
                
                Edit specific sector:<br>
                
                <select id="slct4" name="slct4" value="slct4"></select>
                
                <br>
                Edit Description of Your Service:<br>
                
                <input name="description" type="text" ><br>
                
                Edit Your Mobile Number:<br>
                
                <input name="mobile" type="text" ><br>
                
                <input name="mobile1" type="text" >
                
                <br>
                
                Enter Your Password to Confirm:<br>
                
                <input type="password" name="password" ><br><br>
                
                <input type="submit" value="Post Your Add" />
                
                
            </form> 
        </div>
        <script src="assets/js/script.js" type="text/javascript"></script>
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
</body>
</html>

