<?php
// service\autenticate
// C:\xampp\htdocs\corso_php_2024\12-opentrivia-app\service\autenticate\AutenticateService.php
namespace service\autenticate;


use crud\UserCRUD;

class AutenticateService {

    public static function logIn($email,$password) {

        try {
            $crud = new UserCRUD;
            $user = $crud->findByMail($email);
       
            if($user->password === md5($password)){
                $_SESSION['user_id'] = $user->user_id;
            }
            //code...
        } catch (\Throwable $th) {
            echo "utente non trovato";
            
        }

    }

    public static function logOut(){
        session_destroy();
    }

    public static function isAutenticate(){

    }

}