<?php 
include __DIR__ . "/Views/header.php";
include __DIR__ ."/Controllers/auth.php";
?>

<main class="container py-5 bg-body-tertiary  my-4">
    <?php 
        if (!empty($_GET['error'])) {
            echo "<div class='alert alert-danger' role='alert'>Hai inserito una email o una password errata/e</div>";
        }
    ?>
    <div class="d-flex justify-content-center align-items-center">
        <img style="width: 100px" src="./images/numemon.png" alt="numemon">
        <form action="login.php" method="POST" id="loginForm">
                <h3>
                    Effettua l'accesso
                </h3>
            
            <div class="form-floating mb-4 px-1">
                <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
                <label for="email">
                    Indirizzo email
                </label>
            </div>
            <div class="form-floating mb-4 px-1">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">
                    Password
                </label>
            </div>
            <button class="btn btn-success w-100 py-2" type="submit">
                Effettua Log in
            </button>
        </form>
    </div>

</main>

<?php
include __DIR__ . "/Views/footer.php";
?>