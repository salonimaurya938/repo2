<?php

include_once "conn.php";

$name = $_POST['name'];
$mob  = $_POST['mob'];
$email= $_POST['email'];
$address  = $_POST['address'];
$purchase_date = $_POST['purchase_date'];
$invoice_num  = $_POST['invoice_num'];
$franchise= $_POST['franchise'];
$warranty = $_POST['warranty'];
$describe = $_POST['describe'];
date_default_timezone_set('Asia/Kolkata');
$currentTime = date('d-m-Y H:i A',time());


$sql="INSERT INTO `enquiry`(`id`, `name`, `mob`, `email`, `address`, `purchaseDate`, `invoivceNum`, `franchise`, `warranty`, `describe`, `created`) VALUES('','$name','$mob','$email','$address','$purchase_date','$invoice_num','$franchise','$warranty','$describe','$currentTime')";
$query=mysqli_query($conn,$sql);


if($query){
    $from = $email;
    $to = 'info@ziffonindia.com'; 
    $subject = 'Ziffon India Sample Form';
    $msg = "Enquiry \nName-".$name."\nMobile- ".$mob."\nEmail- ".$email."\naddress- ".$address."\nDate of purchase- ".$purchase_date."\nInvoice number- ".$invoice_num."\nEnter the name and address of the franchise/dealer from whom this purchase was done- ".$franchise."\nIs the product under the warranty period- ".$warranty."\nDescribe your grievance here- ".$describe;
    $success=mail($to, $subject, $msg, $from);
    if($success)
    {
    echo "<script>window.location.href='../thank_you.php?form=Contact Us'</script>";
    }
        else{
         if($errorMSG == ""){
             echo "Something went wrong :(";
         } else {
             echo $errorMSG;
         }
     }
}else{
    echo "data is not inserted";
}

?>