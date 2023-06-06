
<?php 

require_once __DIR__.'/BuildQuery/Query.php';
require_once __DIR__.'/functions.php';



 $name = post('name');
 $email = post('email');




 $query = new Query();
if ($query->insert('emp',[
    "name"=>$name,
    "email"=>$email,
    ])
    ) {
    echo "data inserted with PK : ".$query->getId();
}
else {
    echo "insert error";
}

?>