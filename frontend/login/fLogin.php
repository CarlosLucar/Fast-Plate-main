<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
    <title>Fastplate"Login</title>
    <link rel="shortcut icon" type="image/png" href="/img/fastplate.png">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">FastPlate</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/aboutus/aboutus.php">About Us</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/support/support.php">Contact</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/contact/contact.php">Become a Partner</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/register/registerform.php">Register</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="#">Login</a></li>

            </ul>
            </div>
        </div>
    </nav>

    <form action="/backend/login/login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label for="">User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label for="">Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
    </form>
</body>

</html>