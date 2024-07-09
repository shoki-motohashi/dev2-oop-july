<?php

    class Database{
        private $server_name = "localhost";
        private $db_username = "root";
        private $db_password = "root";
        private $db_name     = "sales_oop";
        protected $conn;



    public function __construct(){
        $this->conn = new mysqli($this->server_name, $this->db_username,$this->db_password, $this->db_name);

        if($this->conn->connect_error){
            die("Unable to connect to the database: ". $this->conn->connect_error);
        }
    }
}

?>