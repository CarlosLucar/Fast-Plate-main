<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
        <title>Shopping Cart</title>
        <link rel="shortcut icon" type="image/png" href="/img/fastplate.png">
    </head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">FastPlate</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/aboutus/aboutus.php">About Us</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/support/support.php">Become Partner</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/contact/contact.php">Contact support</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/register/registerform.php">Register</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/login/fLogin.php">Login</a></li>
                <li class="nav-item menu"><a class= "nav-link active" href="#">Cart <span>0</span></a></li>
            </ul>
            </div>
        </div>
    </nav>
   

    <div class="products-container">
        <div class="product-header">
            <h5 class="product-title">PRODUCT</h5>
            <h5 class="product-price">PRICE</h5>
            <h5 class="product-quantity">QUANTITY</h5>
            <h5 class="product-total">TOTAL</h5>
        </div>
        <div class="products">
            
        </div>
    </div>
    <div id="checkout">
        <form>
            <label for="fname"> First Name:</label><br>
            <input type="text" id="fname"><br>

            <label for="lname"> Last Name:</label><br>
            <input type="text" id="lname"><br>

            <label for="phone"> Phone Number:</label><br>
            <input type="text" id="phone"><br>

            <label for="email"> Email:</label><br>
            <input type="text" id="email"><br>

            <label for="address"> Address:</label><br>
            <input type="text" id="address"><br>

        </form>

        <br>
        <button id="order" onclick="calcRoute();">Order</button>
    </div>


    <div id="receipt">
        <span id="first"></span>
        <span id="last"></span> <br>
        <div id="output"></div>

    </div>

    <div id="googleMap"></div>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCk4f4Y2aKZMxmpt-H9IfjCzY6GhGDPfcg&libraries=places"></script>
    <script src="cart.js"></script>
    <script src="maps.js"></script>
</body>
</html>