<?php 
use service\autenticate\AutenticateService;
session_start();
require_once "vendor/autoload.php";
require_once "autoload.php";


use crud\UserCRUD;
use DevCoder\Validator\Assert\Email;
use DevCoder\Validator\Assert\StringLength;
use DevCoder\Validator\Validation;
use model\User;
 

?>

<?php 
    print_r($_SERVER['REQUEST_METHOD']);
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        echo "Benvenuto compila il form";
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "controllo i dati e li salvo";

        $userCrud = new UserCRUD;
        // print_r($_POST['email']);
        // die();
        # User::regstrationValidate();

        // Validation orchestra tutta la validazione
        #  Stabilito le regole di validazione
        $validation = new Validation([
            'nome' => [(new StringLength())->min(3)],
            'cognome' => [(new StringLength())->min(3)],
            'email' => [(new StringLength())->min(1),new Email()],
            'password' => [(new StringLength())->min(8)],
        ]);

        $result = $validation->validateArray($_POST);
        // $validation->getData();

        if($result === true){
            $user = new User;
            $user->email = $_POST['email'];
            $user->nome = $_POST['nome'];
            $user->cognome = $_POST['cognome'];
            $user->password = $_POST['password'];

            $userCrud->create($user); // 
            AutenticateService::logIn($user->email,$user->password);
            header("Location: users_index.php");

        }
        $errors = $validation->getErrors();

        print_r($errors);

    } 
?>

<?php require_once "./view/header.php"  ?>
<div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="registrazione.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome"  id="nome">
                        <div>  messaggio di errore che LA LIBRERIA </div>    
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="cognome">Cognome</label>
                        <input class="form-control" type="text" name="cognome"   id="cognome">
                        <div>  messaggio di errore che LA LIBRERIA </div>  
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="text" name="email"  id="email">
                        <div>  messaggio di errore che LA LIBRERIA </div>  
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" name="password"  id="password">
                        <div>  messaggio di errore che LA LIBRERIA </div>  
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