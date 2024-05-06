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
       
            # login corretto valorizzo la sessione
            if($user->password === md5($password)){
                $_SESSION['user_id'] = $user->user_id;
                // $_SESSION['ciccio'] = "altri dati";
                return true;
            }else{
                throw new \Exception("accesso negato", 1);
            }
            //code...
        } catch (\Throwable $th) {
            //   "utente non trovato devi registrari";
            //  echo $th->getMessage();
            throw $th;
        }

       
    }

    public static function logOut(){
        session_destroy();
    }

    public static function isAutenticate(){

    }

}