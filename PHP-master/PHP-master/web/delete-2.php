<?php

require_once __DIR__.'/BuildQuery/Query.php';
require_once __DIR__.'/functions.php';

$id= get('id');
if(!empty($id))
{
    $query = new Query();
    $check=$query->delete('emp')->where('id',$id)->commit();
    if($check)
    {
        header("Location:".url('show.php?status=record_deleted'));
    }
    else
    {
        exit('Cnnot delete the Record');
    }
}


?>

