<?php 
include __DIR__ . "/Views/header.php";
include __DIR__ ."/Controllers/auth.php";
?>

<main class="container py-5 bg-body-tertiary  my-4">


    <div class="d-flex justify-content-center align-items-center">
        <img style="width: 150px" src="./images/numemon.png" alt="numemon">
        <form action="login.php" method="POST" id="loginForm">
            <h1>
                Effettua l'accesso
            </h1>
        </form>
        <div class="form-floating mb-4 px-1 ">
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
    </div>
    <button class="btn btn-success w-100 py-2" type="submit">
        Effettua Log in
    </button>
</main>
