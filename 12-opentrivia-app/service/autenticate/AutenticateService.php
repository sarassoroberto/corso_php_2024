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
            /**
            $str = 'apple';
                if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
                    echo "Would you like a green or red apple?";
                }
            */
            if($user->password === md5($password)){
                $_SESSION['user_id'] = $user->user_id;
                // $_SESSION['is_logged'] = true;
                print_r($user);
                print_r($_SESSION);
                return true;
            }else{
                throw new \Exception("Errore di accesso", 1);   
            }
           
            //code...
        } catch (\Throwable $th) {
            // echo "utente non trovato";
            throw $th;
        }

    }

    public static function logOut(){
        session_destroy();
    }

    public static function isAutenticate(){

    }

}