<?php
    session_start();

    require "../classes/Products.php";

    $product_obj = new Product;
    $all_products = $product_obj->getAllProducts();

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

    <title>Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container">
            <a href="dashboard" class="navbar-brand">
                <h1 class="h3">The Company</h1>
            </a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="navbar-text"><?=$_SESSION['full_name']?></span>
                </li>
                <li class="nav-item">
                    <form action="../actions/logout.php" method="post" class="d-flex ms-3">
                        <button type="submit" class="text-danger bg-transparent border-0">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <main class="row justify-content-center mt-5">
        <div class="col-6">
            <div class="row">
                <div class="col-6 text-start"><h1>Product List</h1></div>
                <div class="col-6 text-end align-middle"><a href="add-product.php" class="text-decoration-none"><i class="fa-solid fa-plus fa-3x"></i><span class="h1 ">Add</span></a></div>
            </div>

            <table class="table table-hover align-middle table-striped">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th></th> 
                    <th></th>
                </thead>
                <tbody>
                    <?php
                        while($product = $all_products->fetch_assoc()){
                    ?>
                        <tr>
                
                            <td><?=$product['id']?></td>
                            <td><?=$product['product_name']?></td>
                            <td><?=$product['price']?></td>
                            <td><?=$product['quantity']?></td>
                            <td>
                                        <a href="edit-product.php?id=<?=$product['id']?>" class="btn btn-warning btn-sm" title="Edit">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                        
                                        <a href="delete-product.php?id=<?=$product['id']?>"  class="btn btn-danger btn-sm" >
                                            <i class="fa solid fa-trash"></i>
                                        </a>
                            </td>
                            <td>
                            <a href="buy-product.php?id=<?=$product['id']?>"  class="btn btn-success btn-sm" >
                            <i class="fa-solid fa-cart-shopping"></i>
                                        </a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>


<!-- Bootstrap java -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




</body>
</html>