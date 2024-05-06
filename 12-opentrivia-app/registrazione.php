<?php 
include("vendor/autoload.php");
include("autoload.php");
use crud\UserCRUD;
use DevCoder\Validator\Assert\Email;
use DevCoder\Validator\Assert\NotNull;
use DevCoder\Validator\Validation;
use model\User;
require_once "./view/header.php" 

?>

<?php 
    
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        echo "Benvenuto compila il form";
        $user_data = [];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "controllo i dati e li salvo";

    $validator = User::validateUserForRegistration($_POST);
    $errors = $validator->getErrors();
    $user_data = $validator->getData();


    
    print_r($user_data);
    
    // var_dump($_POST);
    // if($validator->isValid()){
    //     $user = User::factoryFromArray($_POST);
    //     $userCrud = new UserCRUD();
    //     # Creazione dell'utente partendo dal form
    //     $userCrud->create($user);
    // }

        
    } 
?>
<div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="registrazione.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" 
                        value="<?= $user_data['nome'] ?? '' ?>" id="nome">
                        

                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="cognome">Cognome</label>
                        <input class="form-control" type="text" name="cognome"   id="cognome">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="email" name="email"  id="email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" name="password"  id="password">
                            <?= implode(",",$errors['password']); ?>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit">invia</button>
                    </div>
                    <div>
                        <p>
                            Hai già un account ? <a href="index.php">Accedi</a>
                        </p>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
<?php require_once "./view/footer.php" ?>