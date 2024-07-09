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

    <title>delete</title>
</head>
<body>
    <div class="container mt-5 mx-auto text-center w-50">
        <h1 class="mb-3 ">Are you really sure to delete "<span class="text-danger"><?= $product['product_name']?></span>" ?</h1>

        <a href="dashboard.php" class="btn btn-success w-50 mt-5">Cancle</a>
        <form action="../actions/delete-act.php?id=<?=$product['id']?>" method="post">
            <input type="submit" value="Delete" name="btn_delete" class="w-50 btn btn-danger mt-3">
        </form>
        <?php
        
        ?>
    </div>
</body>
</html>