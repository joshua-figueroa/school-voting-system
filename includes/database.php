<?php
    if(isset($_POST['submit-btn']) || isset($_SESSION['name'])) {
        //Database Information
        $servername = "127.0.0.1:3307";
        $dbUsername = "joshuafigueroa";
        $dbPassword = "";
        $dbName = "voting_system";

        //Create & Check Database Connection
        $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
        if($conn -> connect_error) {
            die("Connection failed: " . $conn -> connect_error);
        }
    }
    else {
        echo "Access denied";
    }