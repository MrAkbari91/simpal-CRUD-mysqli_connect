<?php

$con = mysqli_connect("localhost","root","","tester");

if($con->connect_error){
    die("connection fail:)".$con->connect_error);
}


?>