<?php

require_once __DIR__.'/BuildQuery/Query.php';
require_once __DIR__.'/functions.php';
$id=get('id');
if(!empty($id))
{
    $query = new Query;
    $record=$query->select('*')->table('emp')->where('id',$id)->first();
    #print_r($record);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <style>
       </style>
</head>
<body>
    <form action="" method="POST">
    <input type="text" readonly name="id" id="id" value="<?php echo $record->Id; ?>"><br><br>
    
        <input type="text" name="name" id="name" value="<?php echo $record->Name; ?>"><br><br>
    
        <input type="email" name="email" id="email" value="<?php echo $record->Email; ?>""><br><br>
        <input type="submit" value="Update" name="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
        $id= get('id');
  
        $name=post('name');
        $email=post('email');
            $query= new Query();
            $check=$query->update('emp',[
                'Name'=>$name,
                'Email'=>$email,
            ])->where('Id',$id)->commit();
            if($check)
                {
                   header("location:".url('show.php'));
                }
                else{
                    echo "not updated";
                }
}
?> 