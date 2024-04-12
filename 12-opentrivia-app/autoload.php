<?php 
use crud\UserCRUD;
use model\User;
// $call = function(){};
spl_autoload_register(function($class_name){
    $class_name = __DIR__."/".$class_name.".php";
    // print_r($class_name);
    require_once $class_name;
 
});


new UserCRUD();
new User();