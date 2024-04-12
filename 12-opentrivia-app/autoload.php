<?php 
use crud\UserCRUD;
use model\User;
// $call = function(){};
spl_autoload_register(function($class_name){
    $class_name = __DIR__."/".$class_name.".php";
    if(file_exists($class_name)){
        include_once $class_name;
    }
    // print_r($class_name);
 
});

// new UserCRUD();
// new User();