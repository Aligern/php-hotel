<?php 
# Session_start permits us to start a session
session_start();

# we need to check if the user is already logged in
if (isset($_SESSION['idUser'])) {
    # if the user is already logged in, we redirect him to the index.php
    header('Location: index.php');
}

include __DIR__ . "/../Models/user.php";

# we need to check if the user is already logged in
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    # we need 'use($email, $password)' to use the variables outside the function
    $authenthicate = array_filter($users , function ($user) use($email, $password) {
        return $user['email'] == $email && $user['password'] == $password;
    }); // var_dump($authenthicate);
    # we need an if to check if the user is already logged in
    if (count($authenthicate) > 0) {
        # array_shift remove and return the first element of the array, we may suppose that every user has only one email and one password and that the email and password are unique, so we can use it as a unique identifier
        $user = array_shift($authenthicate);
        $_SESSION['idUser'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        header('Location: index.php');
} else {    
        // errore qua
    }
};