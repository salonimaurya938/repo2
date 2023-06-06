<?php
require_once __DIR__.'/BuildQuery/Query.php';

require_once __DIR__.'/functions.php';

$query =new Query();
$records = $query->select('*')->table('emp')->allRecords();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show Data</title>
</head>
<body>
    
<table border="2">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
      <th colspan="4">Action</th>
    </tr>
    <?php foreach($records as $row): ?>
    <tr>
       
            <td><?php echo $row->Id; ?></td>
            <td><?php echo $row->Name; ?></td>
            <td><?php echo $row->Email; ?></td>
            <td><a href="<?php echo url("edit1.php?id={$row->Id}");?>">Edit-1</a></td>
            <td><a href="<?php echo url("edit2.php?id={$row->Id}");?>">Edit-2</a></td>           
            <td><a href="<?php echo url("delete.php?id={$row->Id}");?>">Delete-1</a></td>
                     
            <td><a href="javascript:confirmDelete('<?php echo $row->Id ?>');">Delete-2</a></td>
    </tr>
    <?php endforeach; ?>
</table>
<script>
    function confirmDelete(id)
    {
        if(window.confirm("Are you Sure to Delete ?"))
        {
            window.location.href="<?php  echo url('delete-2.php?id=') ?>"+id;
        }
    }
</script>
</body>
</html>