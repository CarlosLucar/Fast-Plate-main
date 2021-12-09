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
    <title>FastPlate: Contact</title>
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
            <li class="nav-item menu"><a class="nav-link" href="#">Contact</a></li>
            <li class="nav-item menu"><a class="nav-link" href="/frontend/contact/contact.php">Become a Partner</a></li>
            <li class="nav-item menu"><a class="nav-link" href="/frontend/login/fLogin.php">Login</a></li>
            <li class="nav-item menu"> <a class="btn btn-primary btn-lg" href="/frontend/register/registerform.php" role="button">Sign Up</a></li>
            <li class="nav-item menu"><a class= "nav-link" href="/cart.php">Cart <span>0</span></a></li>
        </ul>
        </div>
    </nav>




    <section class="contact">
        <div class="content">
            <h1>FastPlate</h1>
            <h2>Contact us</h2>
            <p>
                Please Type anything that you concerning on our service. we will be so Happy to response back to you!
            </p>
        </div>
        <div class="container">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker fa-3x" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>3838 boot Camp Road, <br>Brooklyn, New York,<br>11314</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i style="font-size:36px" class="fa">&#xf098;</i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>718-968-5618</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>fastplate@deliver.com</p>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form action="/frontend/support/ty.php">

                    <h2>Contact Support</h2>
                    <div class="inputbox">
                        <!-- <span>Full Name</span> -->
                        <input type="text" name="" required="required" placeholder="Full Name">

                    </div>
                    <div class="inputbox">
                        <input type="text" name="" required="required" placeholder="Email">
                        <!-- <span>Email</span> -->
                    </div>
                    <div class="inputbox">
                        <textarea required="required" placeholder="Type you question or comment"></textarea>
                        <!-- <span>Type Your comment or question......</span> -->
                    </div>
                    <div class="inputbox">
                        <input type="submit" name="" value="send">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>