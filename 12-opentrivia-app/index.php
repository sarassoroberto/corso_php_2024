<?php
use DevCoder\Validator\Assert\Email;
use DevCoder\Validator\Assert\StringLength;
use DevCoder\Validator\Validation;
use service\autenticate\AutenticateService;
session_start();
require_once "vendor/autoload.php"; // autooload di composer
require_once "autoload.php"; // Il nostro autoload



if($_SERVER['REQUEST_METHOD']=="GET"){
 
    $errors = [];
    // Arrivato nel form di login
}

/**
 * $rule_pw = new StringLength();
 * $rule_pw->min(1);
 */

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {

            $rule_pw = new StringLength();
            $rule_pw->min(1);
            $rule_pw->max(20);
    
            $validation = new Validation([
                'email' => [(new StringLength())->min(1)->max(20),new Email],
                'password' => [$rule_pw]
            ]);
    
            
            $is_ok = $validation->validateArray($_POST);
            $errors = $validation->getErrors();
            $formData = $validation->getData();
    
            if($is_ok === true){
                AutenticateService::logIn($formData['email'],$formData['password']);
                header("Location: users_index.php");
            }
        } catch (\Throwable $th) {
            $errors['auth'] = $th->getMessage();
        }
      

}

?>
<?php require_once "./view/header.php" ?>
    <div class="container">
        <div class="alert alert-danger">
            <?php echo isset($errors['auth']) ? $errors['auth'] : "" ?>
        </div>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="index.php" method="POST">
               
                <div>

                    <label for="email" class="form-label">email</label>
                    <input id="email" class="form-control" type="email"
                     name="email" />
                </div>
                <div class="mt-3">
                    <label for="password" class="form-label">password</label>
                    <input type="text" class="form-control" name="password" id="password">
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">Accedi</button>
                </div>
                <div>
                    <p>
                        non sei registrato ? <a href="./registrazione.php">Registrati</a>
                    </p>
                </div>
            </form>

        </div>
        <div class="col"></div>
    </div>

    </div>
<?php require_once "./view/footer.php" ?> 
