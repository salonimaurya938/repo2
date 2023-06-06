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
    $sql="DELETE FROM  filetbl where srno='{$id}'";
    $query=mysqli_query($conn,$sql);
 if($query)
 {
     echo "Data Deleted";
 }
 else{
     echo "Not Deleted";
 }
 ?>
   
   
</body>
</html>