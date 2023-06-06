<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <center>
    <h1>File Uploading</h1>
    <hr> 
        <form action="" method="POST" enctype="multipart/form-data" >
            Name: 
            <input type="text" name="name"><br>
            Email:
            <input type="text" name="email"><br>
            Upload file:   
            <input name="image" required type="file">
        <br>  <br>  <br>
        <input type="submit" value="Submit" name="save">
        </form>
    </center>
</body>
</html>
<?php 

include_once('conn.php');
if(isset($_POST['save']))
{
#print_r($_FILES);

$name=$_POST['name'];
$email=$_POST['email'];

$files_arr=$_FILES['image'];
$fname=$files_arr['name'];
$type=$files_arr['type'];
$size=$files_arr['size'];
$tmp_path=$files_arr['tmp_name'];
$error=$files_arr['error'];

$file_info=pathinfo($fname);
//  print_r($file_info);
$extension = $file_info['extension'];
$filename = $file_info['filename'];
$image=$filename."_".time().".".$extension;

// echo $name;
// echo $email;
// echo $image;

$sql="INSERT INTO filetbl(name,email,image) VALUES('{$name}','{$email}','{$image}');";
$query=mysqli_query($conn,$sql);
if($query)
{
    if($error==0)
    {
        $new_location= __DIR__.'/uploads/'.$filename.'_'.time().'.'.$extension;
        if(move_uploaded_file($tmp_path,$new_location))
        {
            echo "file Uploaded";
        }
        else{
            echo "Not Uploaded";
        }
    }else{
        $error_msg='Error occured While uploading file';
    }
   
}
else{
    echo "Not Inserted";
}
}

?>