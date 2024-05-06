<?php
session_start();

?>
<?php require_once "./view/header.php" ?>
    <div class="container">

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form>
                <div>
                    <label for="email" class="form-label">email</label>
                    <input id="email" class="form-control" type="email" name="email" />
                </div>
                <div class="mt-3">
                    <label for="password" class="form-label">password</label>
                    <input type="password" class="form-control" name="password" id="password">
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
