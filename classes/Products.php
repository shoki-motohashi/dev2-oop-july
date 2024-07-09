<?php
    require_once "connection.php";


    class  Product extends Database{

        
    public function getAllProducts()
    {
        $sql = "SELECT id, product_name, price, quantity  FROM products";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("ERROR in retrieving all the users: ".$this->conn->error);
        }
    }

    public function addProduct($request)
    {
        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "INSERT INTO products( product_name, price, quantity) VALUES('$product_name','$price','$quantity') ";

        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
        }else{
            die("ERROR in adding product". $this->conn->error);
        }
    }

    public function getProduct($id)
    {
        $sql = "SELECT * FROM products WHERE id ='$id'";
        
        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die("ERROR in getting product". $this->conn->error);
        }

    }

    public function editproduct($request,$id){
    
        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "UPDATE products SET product_name = '$product_name', price ='$price', quantity='$quantity' WHERE id ='$id'";

        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
        }else{
            die("ERROR in adding product". $this->conn->error);
        }
    }


    public function deleteProduct($request,$id){

        $delete = $request['btn_delete'];

        $sql="DELETE FROM products WHERE id='$id'";

        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
        }else{
            die("ERROR in deleting product".$this->conn->error);
        }
    }










    

    }




?>