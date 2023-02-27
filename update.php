<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>

    <link rel="stylesheet" href="css/templatemo_style.css">
</head>
<body>





    <form action="" method="POST">
         

<?php
     include("connection.php"); 

     $id = $_GET['id'];

     $selectquery = "select * from contact where id=$id";
     $query = mysqli_query($con,$selectquery);

     $result = mysqli_fetch_assoc($query);
     
     if(isset($_POST['submit']))
     {
         $id=$_POST['id'];
         $nm=$_POST['name'];
         $em=$_POST['email'];
         $pass=$_POST['massage'];
         $updatequery = "update contact set id='$id',  name='$nm', email='$em', massage='$pass' where id=$id" ;
         $finalresult = mysqli_query($con,$updatequery);
         if($finalresult){
             echo "updated successfully !";
         }
         else{
             echo "no updated";
         }
     }
 ?>
    
        id:<input type="number" name="id" value="<?php  echo $result['id']; ?>">
        name:<input type="text" name="name" value="<?php  echo $result['name']; ?>">
        email:<input type="text" name="email" value="<?php  echo $result['email']; ?>">
        massage:<input type="text" name="massage" value="<?php  echo $result['massage']; ?>">
        <input type="submit" name="submit" value="update">
        <li>
        <a href="select.php">checklogin-form</a>
        </li>
        
    </form>

    
</body>
</html>