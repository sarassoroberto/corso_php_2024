<?php require_once "./view/header.php" ?>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="#" method="POST">
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" required="true" id="nome">
                    </div>
                    <div>
                        <label for="cognome">Cognome</label>
                        <input type="text" name="cognome" required=true  id="cognome">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" required id="email">
                    </div>

                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" required id="password">
                    </div>
                    <div>
                  
                        <button type="submit">invia</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
<?php require_once "./view/footer.php" ?>