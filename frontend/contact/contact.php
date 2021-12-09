<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;600;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>FastPlate: Partner</title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="/index.php"><img src="img/logo.png" alt="logo" width="60"></a>
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
            <li class="nav-item menu"><a class="nav-link" href="#">Become a Partner</a></li>
            <li class="nav-item menu"><a class="nav-link" href="/frontend/login/fLogin.php">Login</a></li>
            <li class="nav-item menu"> <a class="btn btn-primary btn-lg" href="/frontend/register/registerform.php" role="button">Sign Up</a></li>
        
        </ul>
        </div>
    </nav>





    <form action="/frontend/contact/ty.php" method="post">
        <h2>Became Partner</h2>
        <label for="">First Name</label>
        <input type="text" name="fname" placeholder="User Name"><br>

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="email">Your Email</label>
        <input type="text" id="email" name="emal" placeholder="Your last name..">

        <br>
        <label for="country">Country</label>
        <br>
        <br>
        <select id="country" name="country">
            <option value="australia">New York</option>
            <option value="canada">Florida</option>
            <option value="usa">California</option>
            <option value="australia">Gerogia</option>
            <option value="canada">Chicago</option>
            <option value="usa">Washington</option>
            <option value="australia">Oregon</option>
            <option value="canada">Texas</option>
            <option value="usa">Tenesse</option>
        </select>
        <br>
        <br>
        <label for="subject">Explain why you want to partner with us:</label>
        <br>
        <br>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>

</html>