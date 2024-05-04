<?php 
# Session_start permits us to start a session
session_start();

include __DIR__ . "/../Models/user.php";


# we need to check if the user is already logged in
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    # we need 'use($email, $password)' to use the variables outside the function
    $authenthicate = array_filter($users , function ($user) use($email, $password) {
        return $user['email'] == $email && $user['password'] == $password;
    }); var_dump($authenthicate);
};
