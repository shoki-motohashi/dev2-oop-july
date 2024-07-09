<?php
    require_once "connection.php";


    class User extends Database{


    public function register($post)
    {
        $first_name = $post['first_name'];
        $last_name = $post['last_name'];
        $username = $post['username'];
        $password = password_hash($post['password'], PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users(first_name, last_name, username, password)
                VALUES('$first_name',' $last_name','$username','$password')";

        if($this->conn->query($sql)){
            header('location: ../views'); 
            exit;
        }else{
            die("ERROR in creating the user: ".$this->conn->error);
        }
    }

    public function login($post)
    {
        $username = $post['username'];
        $password = $post['password'];

        $sql = "SELECT * FROM users WHERE username = '$username'";

        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            $user = $result->fetch_assoc();
            if(password_verify($password, $user['password'])){
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['full_name'] = $user['first_name']." ". $user['last_name'];

                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("PASSWORD IS INCORRECT");
            }
        }else{
            die("USERNAME NOT FOUND");
        }
    }

    public function getAllUsers()
    {
        $sql = "SELECT id, first_name, last_name, username, FROM users";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("ERROR in retrieving all the users: ".$this->conn->error);
        }
    }




    }


?>