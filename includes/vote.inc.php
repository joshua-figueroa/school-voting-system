<?php
    if(isset($_POST['submit-btn'])) {
        session_start();
        //Include database file
        require 'database.php';

        //Variables
        $username = $_SESSION['userID'];
        $gradeLevel = $_SESSION['level'];
        $anime = $_POST['anime'];
        $cc = $_POST['credit-card'];
        
        //Checking if user already casted a vote
        $sql = "SELECT * FROM votes WHERE username=?";
        $stmt = $conn -> stmt_init();
        if(!$stmt -> prepare($sql)) {
            header("Location: ../vote.php?error=sqlerror");
            exit();
        }
        else {
            $stmt -> bind_param("s", $username);
            $stmt -> execute();
            $stmt -> store_result();
            $result = $stmt -> num_rows();
            if($result > 0) {
                header("Location: ../vote.php?error=casted");
                exit();
            }
            else {
                $sql = "INSERT INTO votes (username, gradeLevel, anime, cc) VALUES (?, ?, ?, ?)";
                $stmt = $conn -> stmt_init();
                if(!$stmt -> prepare($sql)) {
                    header("Location: ../index.php?error=sqlerror");
                    exit();
                }
                else {
                    $stmt -> bind_param("ssss", $username, $gradeLevel, $anime, $cc);
                    $stmt -> execute();
                    //Update database voted column to 1
                    $sql = "UPDATE users SET voted=1 WHERE username=? AND gradeLevel=?";
                    $stmt = $conn -> stmt_init();
                    if(!$stmt -> prepare($sql)) {
                        header("Location: ../vote.php?error=sqlerror");
                        exit();
                    }
                    else {
                        $stmt -> bind_param("ss", $username, $gradeLevel);
                        $stmt -> execute();
                        header("Location: ../vote.php?success=200");
                        exit();
                    }
                }
            }
        }

    }
    else {
        header("Location: ../index.php?error=access_denied");
        exit();
    }