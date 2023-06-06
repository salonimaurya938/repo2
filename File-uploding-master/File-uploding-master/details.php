<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>

    <?php 
    $id=$_GET['srno'];
    require_once 'conn.php';
    $sql="SELECT * FROM filetbl where srno='{$id}'";
    $query=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($query);
   
   ?>
   <b>Id : </b>
   <?php echo $row['srno']."<br>";?>
   <b>Name : </b>
   <?php echo $row['name']."<br>";?>
   <b>Email : </b>
   <?php echo $row['email']."<br>";?>
   <b>Image_ID : </b>
   <?php echo $row['image']."<br>";?>
    <b>Image</b><br>        
    <img src="../uploads/<?php echo $row['image'];?>" alt="Not Exits" width="400px" height="400px">


   
</body>
</html>