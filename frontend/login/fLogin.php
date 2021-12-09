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
<nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" width="60"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item brand">
                <a class="nav-link brand" href="/index.php">FastPlate</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item menu"><a class="nav-link" href="/frontend/aboutus/aboutus.php">About Us</a></li>
            <li class="nav-item menu"><a class="nav-link" href="/frontend/support/support.php">Contact</a></li>
            <li class="nav-item menu"><a class="nav-link" href="/frontend/contact/contact.php">Become a Partner</a></li>
            <li class="nav-item menu"><a class="nav-link" href="#">Login</a></li>
            <li class="nav-item menu"> <a class="btn btn-primary btn-lg" href="/frontend/register/registerform.php" role="button">Sign Up</a></li>
            
        </ul>
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