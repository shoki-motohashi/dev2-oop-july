<?php
    $buy = getProduct($id);
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
    <title>buy</title>
</head>
<body>
    <div class="container w-50 mt-5 mx-auto">
        <div class="h1 text-center text-success"><i class="fa-solid fa-cart-shopping"></i> Buy Product</div>

        <form action="payment.php" method="post">
            <table class="table">
                <tr>
                    <td>
                        <label for="product-name" class="form-label">Product Name</label>
                        <input type="text" name="product_name" id="product-name" value="<?= ?>">
                    </td>
                </tr>
            </table>
        </form>
    </div>











</body>
</html>