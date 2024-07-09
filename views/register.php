
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

    <title>register</title>
</head>
<body>
    <div class="container mt-5 mx-auto w-50">
        <h1 class="h2 text-danger text-center"><i class="fa-regular fa-id-card"></i> Registration</h1>
        <form action="../actions/register-act.php" method="post" >
            <div class="row">
                <div class="col">
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" name="first_name" id="first-name" class="form-control">
                </div>
                <div class="col">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" id="last-name" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" name="password" id="password" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <input type="submit" value="Register" class="w-100 btn btn-danger text-light" name="btn_submit">
                </div>
            </div>
        </form>
        <p class="text-center mt-3 small">Register already? <a href="../views">Log in</a>.</p>


    </div>









</body>
</html>