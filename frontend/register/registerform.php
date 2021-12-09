<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;600;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Fastplate:Register</title>
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
            <li class="nav-item menu"><a class="nav-link" href="/frontend/login/fLogin.php">Login</a></li>
            <li class="nav-item menu"> <a class="btn btn-primary btn-lg" href="#" role="button">Sign Up</a></li>
        </ul>
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
            <input class="registerinput" type="email" name="email" id="email" placeholder="Email" />
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