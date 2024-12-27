<?php include "connection.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
  </head>
  <body>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Confirm Password</th>
      <th scope="col">Image</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Gender</th>
      <th scope="col">country</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php  
 $id;
 $result = mysqli_query($conn,"SELECT * FROM `task`");  
 while($row = mysqli_fetch_assoc($result))  {
    $id=$id+1;                       
 ?> 
    <tr>
      <th scope=""><?php echo $id?></th>
      <td><?php echo $row["firstname"]; ?></td>
      <td><?php echo $row["lastname"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["password"]; ?></td>
      <td><?php echo $row["cpassword"]; ?></td>
      <td><img src="./image/<?php echo $row['image'];?> " style="width: 50px; height: 50px;"> </td>
      <td><?php echo $row["message"]; ?></td>
      <td><?php echo $row["number"]; ?></td>
      <td><?php echo $row["gender"]; ?></td>?>
      <td><?php echo $row["hobby"]; ?></td>
      <td><?php echo $row["country"]; ?></td>
     <td><a class="btn btn-danger" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
     <a class="btn btn-primary" href="delete.php?id=<?php echo $row['id']; ?>">delete</a>
 </td>
    </tr>
  </tbody>
  <?php } ?>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
