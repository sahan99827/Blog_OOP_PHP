<?php


class DbConnection
{
    public $conn;
    public function __construct()
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        if($conn->connect_error)
        {
            die("<h1>Could not connect to Database</h1>");
        }
        // echo "Database Connected Success";
        return $this->conn = $conn;

    }
}



?>