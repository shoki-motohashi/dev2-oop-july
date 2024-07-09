<?php
    require "../classes/Products.php";

    $id = $_GET['id'];
    $product_obj = new Product;
    $product     = $product_obj->getproduct($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- relにはstylesheet、リンク先には繋げたいファイル -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Edit product</title>
</head>
<body>
    <div class="container mt-5 mx-auto w-50">
    <div class="h1 text-center text-warning"><i class="fa-solid fa-pen-to-square"></i> Edit Product</div>

    <form action="../actions/edit-act.php?id=<?= $product['id']?>" method="post">

<div class="row">
    <div class="col">
        <label for="product-name" class="form-label">Product Name</label>
        <input type="text" name="product_name" id="product-name" class="form-control" 
        value ="<?= $product['product_name']?>">
    </div>
</div>
<div class="row mt-4">
    <div class="col">
        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" id="price" class="form-control" value ="<?= $product['price']?>">
    </div>
    <div class="col">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" name="quantity" id="quantity" class="form-control" value ="<?= $product['quantity']?>">
    </div>
</div>
<div class="row">
    <div class="col">
        <input type="submit" value="Add" name="btn_submit" class="w-100 btn btn-info mt-5">
    </div>
</div>


</form>





    </div>





</body>
</html>