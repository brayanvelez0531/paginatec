<?php

    include_once 'includes/user.php';
    include_once 'includes/user_session.php';

    $userSession = new userSession();
    $user = new User();

    if (isset($_SESSION['user'])) {

        $user->setUser($userSession->getCurrentUser());
        include_once 'views/home.php';

    } else if (isset($_POST['user']) && isset($_POST['pass'])) {
        
        $userForm = $_POST['user'];
        $passForm = $_POST['pass'];
        // echo "<script>alert('ok')</script>";

        if ($user->userExists($userForm, $passForm)) {            
            $userSession->setCurrentUser($userForm);
            $user->setUser($userForm);
            include_once 'views/home.php';
            
        } else {
            $errorLogin = "Incorrect username and/or password";              
            // echo $user->userExists($userForm, $passForm);            
            include_once 'views/login.php';
            // header('location: ../login.php');
        }

    } else {
        include_once 'views/login.php';
    }    
    
?>