<?php 
     
    session_start();
    include 'dbConnect.php';
    $id = $_REQUEST["id"];
    
    $deleteQuery = "delete  from advertisement where ID='".$id."'";
    //$userinfo=mysqli_query($mysqli,$deleteQuery) or die($mysqli->error);
    
    if(mysqli_query($mysqli, $deleteQuery)){
        $_SESSION['success']="Add Deleted Successfully";
        header("Location: profilePage.php");
    }
    else{
        $_SESSION['error']="could not delete the add";
        header("Location: profilePage.php");
    }
	
?>