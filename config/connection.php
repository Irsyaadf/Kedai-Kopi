<?php
class connection{
    public function openConnection() {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "kopi_kenangan";

        $conn = new mysqli($hostname, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection Failed" . $conn->connect_error);
        }

        return $conn;
    }
}
?>