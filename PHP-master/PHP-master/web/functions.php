<?php 


require_once __DIR__.'/BuildQuery/init.php';


// echo BASE_URL;

function url($url=''){
if(empty($url)){

    return BASE_URL;
}

    return BASE_URL.$url;

}

#post function 

function post($key=''){

    if(empty($key)){
        return $_POST;
    }
    return $_POST[$key];
}


function request($key=''){

    if(empty($key)){
        return $_REQUEST;
    }
    return $_REQUEST[$key];
}

function get($key=''){

    if(empty($key)){
        return $_GET;
    }
    return $_GET[$key];
}
?>