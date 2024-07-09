<?php
    require "../classes/Products.php";
    $product = new Product;
    $product->deleteProduct($_POST, $_GET['id']);

?>