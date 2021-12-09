<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Fastplate:Register</title>
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
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/login/fLogin.php">Login</a></li>

            </ul>
            </div>
        </div>
    </nav>

    <form action="/backend/register/register.php" method="POST" class="form">
        <div class="signup">Sign up</div>
        <br><br>
        <div class="form-group">
            <span class="input4">
                <label for="fname"><b>Full Name: </b></label><br>
                <br>
            </span>
            <input class="registerinput" type="text" name="fname" id="display" placeholder="Full name" />
        </div>
        <div class="form-group">
            <span class="input3">
                <label for="uname"><b>User Name: </b></label><br>
                <br>
            </span>
            <input class="registerinput" type="text" name="uname" id="display" placeholder="Display name" />
        </div>
        </br>
        <div class="form-group">
            <span class="input1">
                <label for="email"><b>Email: </b></label><br>
                <br>
            </span>
            <input class="registerinput" type="text" name="email" id="email" placeholder="Email" />
        </div>
        </br>
        <div class="form-group">
            <span class="input2">
                <label for="password"><b>Password: </b></label><br>
                <br>
            </span>
            <input class="registerinput" type="password" name="password" id="password" placeholder="Password" />
        </div>
        </br>
        <p><input type="submit" value="Create my account" class="buttonregister" /></p>


    </form>
</body>

</html>