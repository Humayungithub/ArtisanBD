<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Humayun Ahmed,Rifat Ahsan">
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

    <title>Add Filtering - ArtisanBD</title>
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

    <div class="content-section-a">
 <center>
            <div class="container">
        
        <form action="addFilterShowing.php" method="POST" enctype="multipart/form-data"> 
        
        Choose City: <br>
        
                <select id="slct1" name="slct1" onchange="populate(this.id,'slct2')" >
                    
                <option value=""></option>
                
                <option value="Dhaka">Dhaka</option>
                
                <option value="Chittagong">Chittagong</option>
                
                <option value="Sylhet">Sylhet</option>
                
                
                </select>
                
                <br>
                
               Choose Area:<br>
                
                <select id="slct2" name="slct2" value="slct2"></select>
                
                <br>
                
                
                Choose Service Sector:<br>
                
                <select id="slct3" name="slct3" onchange="populate2(this.id,'slct4')" >
                    
                <option value=""></option>
                
                
                <option value="IT">IT</option>
                
                
                <option value="Tuition">Tuition</option>
                
                
                <option value="Health">Health</option>
                
                
                <option value="Repair">Repair</option>
                
                </select>*
                
                <br>
                
                Choose specific service:<br>
                
                <select id="slct4" name="slct4" value="slct4"></select>
                
                <br>
                
                <input type="submit" value="Search" />
       
          </form>      
                </div>
            </center>
        </div>
          <script src="assets/js/script.js" type="text/javascript"></script>
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



