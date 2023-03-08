<?php

class DB
{

    public $con;
    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = '';
    protected $dbname = "clownzshop";

    function __construct()
    {
        // $this->con = mysqli_connect($this->host, $this->user, $this->pass);
        // mysqli_select_db($this->con, $this->dbname);
        // mysqli_query($this->con, "SET NAMES 'utf8");
        try {
            $this->con = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->user, $this->pass);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
