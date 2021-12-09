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

    <title>About Us</title>
    <link rel="shortcut icon" type="image/png" href="image/logo.png">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="../index.php"><img src="image/logo.png" alt="logo" width="60"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item brand">
                <a class="nav-link brand" href="../index.php">FastPlate</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item menu"><a class="nav-link" href="/frontend/aboutus/aboutus.php">About Us</a></li>
            <li class="nav-item menu"><a class="nav-link" href="/frontend/support/support.php">Contact</a></li>
            <li class="nav-item menu"><a class="nav-link" href="/frontend/contact/contact.php">Become a Partner</a></li>
            <li class="nav-item menu"><a class="nav-link" href="/frontend/login/fLogin.php">Login</a></li>
            <li class="nav-item menu"> <a class="btn btn-primary btn-lg" href="/frontend/register/registerform.php" role="button">Sign Up</a></li>
            <li class="nav-item menu"><a class= "nav-link" href="/cart.php">Cart <span>0</span></a></li>
        </ul>
        </div>
    </nav>

    <div id="front">
        <h1>Freshness Delivered To Your Door</h1>
        <p>FastPlate is on a mission to make food delivery <br> more effective and cost-efficient.</p>
        <p>We help restaurants reach more customers <br> while driving satisfaction to everyone's door.</p>
    </div>
    
    <div id="body1">
            <h1>Our Values</h1>
            <p>FastPlate believes in creating opportunities for people to earn and <br> thrive. All members of our community deserve peace of mind.</p>
        
    </div>
    <div class="img">
    <img src="image/cafe.png" alt="restaurant" width="300" height="300">
    </div>
    <div id="body2">
        <span>
            <h1>Support Local Restaurants</h1>
            <p>We help restaurants reach more customers and build their businesses. <br> 
            Our partnered restaurants keep a majority of the profits while the <br> 
            rest goes to continually improving our services and giving back to <br> the community.</p>
        </span>
    </div>
    <div class="img">
    <img src="image/delivery-man.png" alt="Delivery man" width="300" height="300">
    </div>
    <div id="body2">
        <span>
            <h1>Deliveries By Pros</h1>
            <p>We train our drivers to provide quick, careful, and reliable<br> 
            service. Partnered drivers are put on a base salary while also <br> 
            keeping all the extras they earn.</p>
        </span>     
    </div>
    <div class="img">
    <img src="image/money.png" alt="restaurant" width="300" height="300">
    </div>
    <div id="body2">
        <span>
            <h1>No Hidden Fees</h1>
            <p>Most food delivery apps have several fees that hike up the <br> 
            the price, including service fees and delivery fees. FastPlate <br> 
            does not charge service fees and has comparably lower delivery <br>
            fees than our competitors.</p>
        </span>
    </div>

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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="menu.js"></script>

    <script src="cart.js"></script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>