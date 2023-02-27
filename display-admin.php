
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">massage</th>
      <th colspan="2">operations</th>
      
    </tr>
  </thead>
  <tbody>
<?php
include "connection.php";

$selectquery = "select * from contact";
$query = mysqli_query($con,$selectquery);

while($result = mysqli_fetch_assoc($query)){


?>

    <tr>
      <!-- <th scope="row">1</th>
 -->  <td><?php echo $result['id']; ?> </td>
      <td><?php  echo $result['name']; ?> </td>
      <td><?php  echo $result['email']; ?> </td>
      <td><?php  echo $result['massage']; ?> </td>
      <td><button class="btn-danger btn"> <a href="update.php?id=<?php echo $result['id'] ?>"  class="text-white">update.php</a> </button> </td>
      <td><button class="btn-primary btn"> <a href="delete.php?id=<?php echo $result['id'] ?>" class="text-white">delete.php</a> </button>  </td>
      
    </tr>
<?php
    }
    ?>
  </tbody>
   