<?php

class Dbh {
    protected $hostname = "197.210.54.136";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "zuriphp";

    protected function connect() {
        $conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if($conn->connect_error)
        {
            die ("<h1>Database Connection Failed</h1>");
        }
        //echo "Database Connected Successfully";
        return $this->conn = $conn;
    }
}
?>