<?php
$host="localhost";
$username="root";
$password="";
$database="project";
$connection=mysqli_connect($host,$username,$password,$database);
if($connection){
    //echo"Connected Successfully";
}else{
    echo"Error";
}
?>