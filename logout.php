<?php

session_start();
# we need to check if the user is authenticated and then destroy the session
if (isset($_SESSION['idUser'])) {
    $name = $_SESSION['name'];
    session_destroy();
} else {
    # if the user is not authenticated we redirect him to the login page
    header('Location: login.php');
}

include __DIR__ . "/Views/header.php";
?>

<main class="container my-4">
    <div class="d-flex justify-content-center align-items-center">
        <h4>
            <?="A presto!". '<br>' . $name ?>
        </h4>
    </div>
</main>
<?php
include __DIR__ . "/Views/footer.php";
?>