<?php

include "connection.php";

$id = $_GET['id'];

$deletequery = "delete  from contact where id =$id";
$query = mysqli_query($con,$deletequery);

if($query){
	echo "row deleted!";
}




else{

	echo "no delete";
}


?>
<?php 

header('location:select.php');
?>