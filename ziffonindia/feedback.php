<?php
    include_once "conn.php";

    $name = $_POST['name'];
    $mob  = $_POST['mob'];
    $email= $_POST['email'];
    $address  = $_POST['address'];
    $delivery = $_POST['delivery'];
    $product_variety  = $_POST['product_variety'];
    $price_policy= $_POST['price_policy'];
    $workmanship  = $_POST['workmanship'];
    $attitude  = $_POST['attitude'];
    $overall_exp   = $_POST['overall_exp'];
    $recommend   = $_POST['recommend'];
    $sugg_feedback   = $_POST['sugg_feedback'];
    date_default_timezone_set('Asia/Kolkata');
    $currentTime = date('d-m-Y H:i A',time());

    $sql="INSERT INTO `our_experts_tbl`(`id`, `name`, `mob`, `email`, `address`, `delivery`, `product_variety`, `price_policy`, `workmanship`, `attitude`, `overall_exp`, `recommend`, `sugg_feedback`, `created`)
     VALUES('','$name','$mob','$email','$address','$delivery','$product_variety','$price_policy','$workmanship','$attitude','$overall_exp','$recommend','$sugg_feedback','$currentTime')";
    $query=mysqli_query($conn,$sql);

  if($query){
    $from = $email;
    $to = 'info@ziffonindia.com'; 
    $subject = 'Ziffon India Sample Form';
    $msg = "FEEDBACK \nName- ".$name."\nMobile- ".$mob."\nEmail- ".$email."\naddress- ".$address."\nTime of delivery- ".$delivery."\nProduct variety- ".$product_variety."\nPrice policy- ".$price_policy."\nWorkmanship- ".$workmanship."\nAttitude of our personnel- ".$attitude."\nOverall experience- ".$overall_exp."\nWould you recommend us to others".$recommend."\nSuggestions or feedback".$sugg_feedback;
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