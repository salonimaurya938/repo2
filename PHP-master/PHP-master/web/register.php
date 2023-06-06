
<?php
require_once __DIR__.'/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <style>
       </style>
</head>
<body>
    <form action="<?php echo url("registerhandler.php"); ?> " method="POST">
        <input type="text" name="name" id="name" placeholder="Enter Name"><br><br>
    
        <input type="email" name="email" id="email"  placeholder="Enter email"><br><br>
        <input type="submit" value="Register" name="submit">
    </form>
</body>
</html>