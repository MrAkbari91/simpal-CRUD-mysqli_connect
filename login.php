<?php
include 'database.php';

if(isset($_POST['username'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from user_data where username='".$username."'AND password='".$password."'";
	$res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
         header('Location: record.php');
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>




