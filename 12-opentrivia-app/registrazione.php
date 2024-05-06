<?php 
use DevCoder\Validator\Assert\Email;
use DevCoder\Validator\Assert\StringLength;
use DevCoder\Validator\Validation;
use service\form\FormService;
include("vendor/autoload.php");
include("autoload.php");
use crud\UserCRUD;
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

    $validation = new Validation([
        'nome' => [(new StringLength())->min(3)],
        'cognome' => [(new StringLength())->min(3)],
        'email' => [(new StringLength())->min(1), new Email()],
        'password' => [(new StringLength())->min(8)],
    ]);


    if($validation->validateArray($_POST)){

        $user = User::factoryFromArray($_POST);
        $userCrud = new UserCRUD();
        # Creazione dell'utente partendo dal form
        $userCrud->create($user);

    }else{

        $errors = $validation->getErrors();
        $user_data = $validation->getData();

        $nome_value = FormService::getValue('nome', $user_data);
        $nome_error = FormService::getError('nome', $errors);

        // print_r($nome_value);
        // print_r($nome_error);

    }

        
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
                               value="" 
                               id="nome"
                               >
                        

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