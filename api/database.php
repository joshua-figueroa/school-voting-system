<?php
    class Connect {
        public function connect() {
            $servername = "127.0.0.1:3307";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "voting_system";

            //Create & Check Database Connection
            $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
            if($conn -> connect_error) {
                die("Connection failed: " . $conn -> connect_error);
            }
            return $conn;
        }
    }
?>