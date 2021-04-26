<?php
    include_once 'util.php';
    include_once 'dbconnect.php';
    include_once 'user.php';


    var_dump($_FILES);

    //Hashing trial
    //echo password_hash("Susan", PASSWORD_DEFAULT);

    //Validating data
    $con = new DBConnection();
    $pdo = $con->connectToDB();

    //Registration
    $event = $_POST['event'];
    if ($event == "signup") {
        
        $firstname = $_POST['firstname'];
        $lastname= $_POST['lastname'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $password = $_POST['password'];
        $profile_picture = $_FILES['profile_picture'];

        $user = new User();

        $user->setFirstname($firstname);
        $user->setLastname($lastname);
        $user->setEmail($email);
        $user->setCity($city);
        $user->setPassword($password);
        $user->setProfile_picture($profile_picture["name"]);
        echo $user->register($pdo);

        //Logging in
    } else if($event == "login"){
       $email = $_POST['email'];
       $password = $_POST['password'];
       $user = new User();
       echo $user->login($pdo);
    }
    //Set the values
   

    //Values to attribute using the setter
    //Setters
    



    //Getters


    //Necessary redirection
?>