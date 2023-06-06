<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>

<table border="2" width="100%">
    <tr>
        <th>Series</th>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Image Id</th>
        <th colspan="3">Action</th>
    </tr>
    <?php 
    require_once 'conn.php';
    $sql="SELECT * FROM filetbl";
    $query=mysqli_query($conn,$sql);
    $i=1;
    while ($row=mysqli_fetch_assoc($query)) :
       
    ?>
    <tr style="text-align: center;">
    <td><?php echo $i; ?></td>
    <td><?php echo $row['srno'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['image'];?></td>
    
    <td><a href="update.php?srno=<?php echo $row['srno'];?>">Update</a></td>
  
    <td><a href="delete.php?srno=<?php echo $row['srno'];?>">Delete</a></td>
  
    <td><a href="details.php?srno=<?php echo $row['srno'];?>">Details</a></td>
    <?php
    $i=$i+1;
    endwhile;
    ?>
    </tr>
</table>
</body>
</html>