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
        <title>Shopping Cart</title>
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
                <a class="nav-link brand" href="index.php">FastPlate</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item menu"><a class="nav-link" href="/frontend/aboutus/aboutus.php">About Us</a></li>
            <li class="nav-item menu"><a class="nav-link" href="/frontend/support/support.php">Contact</a></li>
            <li class="nav-item menu"><a class="nav-link" href="/frontend/contact/contact.php">Become a Partner</a></li>
            <li class="nav-item menu"><a class="nav-link" href="/frontend/login/fLogin.php">Login</a></li>
            <li class="nav-item menu"> <a class="btn btn-primary btn-lg" href="/frontend/register/registerform.php" role="button">Sign Up</a></li>
            <li class="nav-item menu"><a class= "nav-link" href="#">Cart <span>0</span></a></li>
        </ul>
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

        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
              <label for="validationCustom01" class="form-label">First name</label>
              <input type="text" class="form-control" id="fname"  required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lname"  required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustomUsername" class="form-label">E-mail</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  Please type a valid E-mail.
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone" required>
                <div class="invalid-feedback">
                  Please provide a valid Phone Number.
                </div>
              </div>
            <div class="col-md-6">
              <label for="validationCustom03" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" required>
              <div class="invalid-feedback">
                Please provide a valid Address.
              </div>
            </div>
            

            <div class="col-12">
              <button id="order" onclick="calcRoute();" class="btn btn-primary" type="submit" onsubmit="return false">Submit form</button>
            </div>
          </form>





    </div>


    <div id="receipt">
        <span id="first"></span>
        <span id="last"></span> <br>
        <div id="output"></div>

    </div>

    <div id="googleMap"></div>


    <div class="footer-container">
        <div class="footer">
            <div class="footer-heading footer-1">
                <h2>About Us</h2>
                <a href="#">About us</a>
                <a href="#">Add your restaurant</a>
                <a href="#">Apply to be our deliver</a>
                <a href="#">Customer Service</a>
                <a href="#">Terms of services</a>
            </div>
            <div class="footer-heading footer-2">
                <h2>Contact Us</h2>
                <a href="#">Contact us</a>
                <a href="#">Support</a>
                <a href="#">Sponsorship</a>
                <a href="#">Investors</a>
                <a href="#">Terms of services</a>
            </div>
            <div class="footer-heading footer-3">
                <h2>Social Media</h2>
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Youtube</a>
            </div>
            <div class="footer-email-form">
                <h2>Join our newsletter</h2>
                <input type="email" plcaeholder="Enter your email address" id="footer-email">
                <input type="submit" value="Sign up" class="btn btn-primary btn-lg">
            </div>

        </div>
    </div>

    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCk4f4Y2aKZMxmpt-H9IfjCzY6GhGDPfcg&libraries=places"></script>
    <script src="cart.js"></script>
    <script src="maps.js"></script>
    <script src="validation.js"></script>
</body>
</html>