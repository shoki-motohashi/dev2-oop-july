<?php
    require "../classes/Products.php";

    $product = new Product;
    $product->editProduct($_POST, $_GET['id']);


?>