<?php
    if(isset($_POST['submit-btn'])) {
        //Include database file
        require 'database.php';

        //Variables from panel
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $grade = $_POST['inputLevel'];
        $section = $_POST['inputSection'];

        //Error handlers
        if(empty($firstName) || empty($lastName) || empty($username) || empty($password) || empty($grade) || empty($section)) {
            header("Location: ../panel.php?error=emptyfield");
            exit();
        }
        else {
            $sql = "SELECT username FROM users WHERE username=?";
            $stmt = $conn -> stmt_init();
            if(!$stmt -> prepare($sql)) {
                //SQL error
                header("Location: ../panel.php?error=sqlerror");
                exit();
            }
            else {
                $stmt -> bind_param("s", $username);
                $stmt -> execute();
                $stmt -> store_result();
                $result = $stmt -> num_rows();
                if($result > 0) {
                    header("Location: ../panel.php?error=usernametaken");
                    exit();
                }
                else {
                    $sql = "INSERT INTO users (firstName, lastName, username, password, gradeLevel, section) VALUES (?, ?, ?, ?, ?, ?)";
                    $stmt = $conn -> stmt_init();
                    if(!$stmt -> prepare($sql)) {
                        //SQL error
                        header("Location: ../panel.php?error=sqlerror");
                        exit();
                    }
                    else {
                        $hashed = password_hash($password, PASSWORD_DEFAULT);
                        $stmt -> bind_param("ssssss", $firstName, $lastName, $username, $hashed, $grade, $section);
                        $stmt -> execute();
                        header("Location: ../panel.php?success=200&user=$username");
                        exit();
                    }
                }
            }
        }
    }
    else {
        header("Location: ../panel.php");
        exit();
    }