<?php
$servername="localhost";
$username="root";
$password="";
$dbname="dashboard";

$con=mysqli_connect($servername,$username,$password,$dbname);

if($con){
    // echo "database is okk";
}
else{
    echo "database is not okk";
}
?>