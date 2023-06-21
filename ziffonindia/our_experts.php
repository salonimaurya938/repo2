<?php

include_once "conn.php";

#echo "database is connect";

if(isset($_POST['save'])){

$name = $_POST['name'];
$mob  = $_POST['mob'];
$email= $_POST['email'];
$add  = $_POST['addres'];
$pincode = $_POST['pincode'];
$city  = $_POST['city'];
$state= $_POST['state'];
$country = $_POST['country'];
$check  = $_POST['check'];
$product  = $_POST['product'];
$best_time= $_POST['best_time'];
$msg  = $_POST['msg'];


$sql="INSERT INTO contect_tbl(name,mob,email,add,pincode,city,state,country,check,product,best_time,msg) 
VALUES('{$name}','{$mob}','{$email}','{$add}','{$pincode}','{$city}','{$state}','{$country}','{$check}','{$product}','{$best_time}',{$msg}');";
$query=mysqli_query($conn,$sql);

if($query){
     echo "data imserted";

}else{
    echo "data is not inserted";
}
}else
{
    echo "error";
}

?>