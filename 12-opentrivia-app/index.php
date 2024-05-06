<?php
session_start();
use service\autenticate\AutenticateService;
use service\form\FormService;
use DevCoder\Validator\Assert\Email;
use DevCoder\Validator\Assert\StringLength;
use DevCoder\Validator\Validation;

include ("vendor/autoload.php");
include ("autoload.php");
use crud\UserCRUD;
use model\User;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $user_data = [];
    $errors = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    

try {
        $validation = new Validation([
            'email' => [(new StringLength())->min(1), new Email()],
            'password' => [(new StringLength())->min(8)],
        ]);
        // print_r($_SESSION);
        $is_valid = $validation->validateArray($_POST);
        $errors = $validation->getErrors();
        $user_data = $validation->getData();
        // print_r($_POST);
        if ($is_valid) {
            $is_auth= AutenticateService::logIn(
                FormService::getValue('email', $user_data),
                FormService::getValue('password', $user_data)
            );
            var_dump($is_valid);
        }
    } catch (\Throwable $th) {
        $errors['general'] = $th->getMessage();
    }


}

?>
<?php require_once "./view/header.php" ?>
    <div class="container">
    <?php 
    FormService::getError("general",$errors);
    print_r($errors);
    ?>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form method="POST">
                <div>
                    <label for="email" class="form-label">email</label>
                    <input id="email" class="form-control" value="<?= FormService::getValue("email", $user_data) ?>" type="text" name="email" />
                    <?php  print_r(FormService::getError("email", $errors)) ?>
                </div>
                <div class="mt-3">
                    <label for="password" class="form-label">password</label>
                    <input type="password" class="form-control" value="<?= FormService::getValue("password", $user_data) ?>" name="password" id="password">
                    <?php print_r(FormService::getError("password", $errors)) ?>
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
