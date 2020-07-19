<?php
    if(isset($_POST['submit-btn'])) {
        //Include the database file
        require 'database.php';

        //Variables to be access from the database
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = $_POST['password'];

        //Error handlers
        if(empty($username)) {
            header("Location: ../index.php?error=emptyuserfield");
            exit();
        }
        else if(empty($password)) {
            header("Location: ../index.php?error=emptypassfield");
            exit();
        }
        else {
            //Checking the username in database
            $sql = "SELECT * FROM users WHERE username=?";
            $stmt = $conn -> stmt_init();
            if(!$stmt -> prepare($sql)) {
                header("Location: ../index.php?error=sqlerror");
                exit();
            }
            else {
                $stmt -> bind_param("s", $username);
                $stmt -> execute();
                $result = $stmt -> get_result();

                if($row = $result -> fetch_assoc()) {
                    //Password verification
                    $passwordCheck = password_verify($password, $row['password']);
                    if($passwordCheck == FALSE) {
                        header("Location: ../index.php?error=incorrect_password");
                        exit();
                    }
                    else {
                        session_start();
                        $_SESSION['userID'] = $row['username'];
                        $_SESSION['name'] = $row['firstName'];
                        $_SESSION['level'] = $row['gradeLevel'];
                        header("Location: ../terms.php");
                        exit();
                    }
                }
                else {
                    //No user exist
                    header("Location: ../index.php?error=nouser");
                    exit();
                }
            }
        }
    }
    else {
        //User will be redirected to index page
        header("Location: ../index.php");
        exit();
    }