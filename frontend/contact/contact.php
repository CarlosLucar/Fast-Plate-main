<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>FastPlate: Partner</title>
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
                <li class="nav-item menu"><a class="nav-link active" href="#">Become a Partner</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/register/registerform.php">Register</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/login/fLogin.php">Login</a></li>

            </ul>
            </div>
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