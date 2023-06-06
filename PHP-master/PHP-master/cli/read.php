<?php
#step1:check connection
include __DIR__.'/dbconnect.php';

#step2: prepare the query
$sql="SELECT * FROM record";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
    while($row=mysqli_fetch_assoc($res)){
        echo "Id ".$row["id"]."\nName : ".$row["name"]."\nEmail : ".$row["email"]."\n";
    }
}
else
{
    echo "No record found";
}

?>