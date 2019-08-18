<?php
                session_start();
                
                include 'dbConnect.php';
                
                if($_SERVER['REQUEST_METHOD']=='POST')
                    
                {
                    
                    $email=$mysqli->real_escape_string($_POST['email']);
                    
                    $getUserInfo="select * from userinfo where emailId='$email'";
                    
                    $userinfo=mysqli_query($mysqli,$getUserInfo) or die($mysqli->error);
                    
                    if($userinfo->num_rows==0){
                        
                        $_SESSION["error"]="The User does not exist";
                        
                         header("Location: LoginForm.php");
                         
                    }
                    else{
                        
                        $user=$userinfo->fetch_assoc();
                        
                        echo $user['uerPassword'].'<br>';
                        
                        $pass=md5 ($_POST['password']);
                        
                        echo $pass.'<br>';
                        
                        if($pass== $user['uerPassword']){
                            
                            $_SESSION["success"]="Login Successful";
                            
                            $_SESSION['firstName']=$user['firstName'];
                            
                            $_SESSION['lastName']=$user['lastName'];
                            
                            $_SESSION['avatar']=$user['proPic'];
                            
                            $_SESSION['email']=$user['emailId'];
                            
                            $_SESSION['password']= $user['uerPassword'];
                            
                            $_SESSION['isLogIn']='yes';
                            
                            $_SESSION['success']= 'welcome '.$_SESSION['firstName']." ".$_SESSION['lastName'].' you are logged in successfully'."<br>";
                            header("Location: profilePage.php");
                            
                            return;
                        }
                        
                        else{
                            
                            echo 'Wrong Password';
                            
                            $_SESSION["error"]="Wrog password";
                            
                            header("Location: LoginForm.php");
                        }
                        
                    }
                }
                
                else{
                    
                   $_SESSION["error"]= 'Login Error';
                   
                   header("Location: LoginForm.php");
                   
                }
                
                
            ?>

