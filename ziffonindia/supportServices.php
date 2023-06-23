<?php
    include_once "conn.php";

    $name = $_POST['name'];
    $mob  = $_POST['mob'];
    $email= $_POST['email'];
    $address  = $_POST['address'];
    $category = $_POST['category'];
    $product  = $_POST['product'];
    $warranty_period= $_POST['warranty_period'];
    $support_req  = $_POST['support_req'];
    $technician_visit   = $_POST['technician_visit'];
    date_default_timezone_set('Asia/Kolkata');
    $currentTime = date('d-m-Y H:i A',time());

    $sql="INSERT INTO `our_experts_tbl`(`id`, `name`, `mob`, `email`, `address`, `category`, `product`, `warranty`, `support_req`, `technician_visit`, `created`) VALUES('','$name','$mob','$email','$address','$category','$product','$warranty_period','$support_req','$technician_visit','$currentTime')";
    $query=mysqli_query($conn,$sql);

  if($query){
    $from = $email;
    $to = 'info@ziffonindia.com'; 
    $subject = 'Ziffon India Sample Form';
    $msg = "SUPPORT AND SERVICES \nName- ".$name."\nMobile- ".$mob."\nEmail- ".$email."\naddress- ".$address."\nName of Category- ".$category."\nName of Product- ".$product."\nIs the product under the warranty period- ".$warranty_period."\nSelect the type of support required- ".$support_req."\nTechnician visit required- ".$technician_visit;
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