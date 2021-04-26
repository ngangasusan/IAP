<?php

 session_start();

 //include class
 include("user.php");

 //get the names and passwords to form
    $email = isset($_POST['userEmail'])?filter_var($_POST['userEmail'], FILTER_SANITIZE_STRING):"";
    $password = isset($_POST['userPassword'])?filter_var($_POST['userPassword'], FILTER_SANITIZE_STRING):"";

 //
    $user = new User;

    $user->setEmail($email);
    $user->setPassword($password);

    $user->login($pdo);
    




?>