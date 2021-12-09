<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Document</title>
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
                <li class="nav-item menu"><a class="nav-link active" href="#">About Us</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/support/support.php">Contact</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/contact/contact.php">Become a Partner</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/register/registerform.php">Register</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/login/fLogin.php">Login</a></li>
                <li class="nav-item menu"><a class= "nav-link active" href="/cart.php">Cart <span>0</span></a></li>
            </ul>
            </div>
        </div>
    </nav>

    <div id="front">
        <h1>FastPlate</h1>
        <p>Headquarter is located in Brookyn, New York from the United States. We specialized in every food. And Our Goal is to sastified every customers.</p>
    </div>
    <div id="body1">
        <span>
            <h1>Our Value</h1>
            <p>FastPlate is trying to become a global competitors. And make the food faster to hand of the customer as fast as they can.</p>
        </span>
        <span id="value"><img src="image/value.jpg" alt="Girl in a jacket" width="700" height="500"></span>
    </div>
    <div id="body1">
        <span>
            <h1>Our Mission</h1>
            <p>-> Connecting to the customer and delivering the food</p>
            <p>-> delivering the food and make them sastifying</p>
            <p>-> Creating work opportunities everyrone!!!</p>
        </span>
        <span id="value"><img src="image/deliver.jpg" alt="Girl in a jacket" width="500" height="700"></span>
    </div>

    <div id="body1">
        <span>
            <h1>Please Contact Us:</h1>
            <p>Email: fastplate@customersupport.com</p>
            <p>Tel: 718-516-4661</p>

        </span>
        <span id="value"><img src="image/customer.jpg" alt="Girl in a jacket" width="500" height="300"></span>
    </div>

</body>

</html>