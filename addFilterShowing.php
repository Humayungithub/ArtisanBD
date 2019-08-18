<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Humayun Ahmed,Rifat Ahsan">
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

    <title>Filtered add - ArtisanBD</title>
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
                    
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="content-section-a">
 <center>
            <div class="container">
            
        <?php
        
            session_start();
            
            if(isset($_SESSION["success"])){
                
                echo ('<p style="color: green">'.$_SESSION["success"]."</p>\n");
                
                unset($_SESSION["success"]);
                
            }
            if(isset($_SESSION["error"])){
                
                echo ('<p style="color: green">'.$_SESSION["error"]."</p>\n");
                
                unset($_SESSION["error"]);
                
            }
        ?>
      
        
        
            <?php
            
             if($_SERVER['REQUEST_METHOD']=='POST'){
            
             include 'dbConnect.php';
            
                     $city=$mysqli->real_escape_string($_POST['slct1']);
        
            //echo $city.'<br>';
        
            $area=$mysqli->real_escape_string($_POST['slct2']);
        
            //echo $area.'<br>';
        
            $serviceSector=$mysqli->real_escape_string($_POST['slct3']);
        
            //echo $serviceSector.'<br>';
        
            $serviceField=$mysqli->real_escape_string($_POST['slct4']);
        
            //echo $serviceField;
             
             
              $getAllAddTitle="select * from advertisement where district='$city' and area='$area' and serviceCatagory='$serviceSector' and serviceField='$serviceField' order by postingTime";
              
              
              $resultTitles=mysqli_query($mysqli,$getAllAddTitle)or die($mysqli->error);
   
              $numRows= mysqli_num_rows($resultTitles);
              
             if($numRows!=0){ 
                 
             while($numRows>0){
                 
                 
                 while($row=mysqli_fetch_assoc($resultTitles)){
                     
                     echo "<div class='qrs'>";
                     
                     echo "Title : ".$row['addTitle']." (".$row['postingTime'].")".'<br>';
                     
                      echo "</div>";
                      
                     { ?>
                      <div class="pqr">
                      <a type="button" class="line" href="addShowing.php?id=<?php echo $row["Id"];?>"> show Details </a>
                      </div>
                      <br>
                      <?php }
                       
                }
                 
                 $numRows=$numRows-1;
              }
              
             }
             
             else{
                 
                 echo 'No Adds Currently to Show'.'</br>';
                 
             }
             } 
            ?>
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