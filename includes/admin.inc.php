<?php
    if(isset($_POST['submit-btn'])) {

        //Variables
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        $hashedpswd = password_hash($password, PASSWORD_DEFAULT);
        $dbpass = '$2y$12$sl7DsqbzIieG1SUE0KBGieOmJ6Aqsn9vijfIqkTul895UiEkb7p9u'; // bcrypt hash of "admin"

        //Error handlers
        if(empty($username)) {
            header("Location: ../admin.php?error=emptyuserfield");
            exit();
        }
        else if(empty($password)) {
            header("Location: ../admin.php?error=emptypassfield");
            exit();
        }
        else {
            //Verify if entered password is the same as the hashed pswd above
            $passwordCheck = password_verify($password, $dbpass);
            if($passwordCheck == TRUE AND $username == "admin") {
                session_start();
                $_SESSION['name'] = "Administrator";
                header("Location: ../panel.php");
                exit();
            }
            else {
                header("Location: ../admin.php?error=invalid_credentials");
                exit();
            }
        }
    }
    else {
        header("Location: ../admin.php");
        exit();
    }