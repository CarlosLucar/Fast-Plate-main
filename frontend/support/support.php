<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FastPlate: Support</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
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
                <li class="nav-item menu"><a class="nav-link active" href="#">Contact</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/contact/contact.php">Become a Partner</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/register/registerform.php">Register</a></li>
                <li class="nav-item menu"><a class="nav-link active" href="/frontend/login/fLogin.php">Login</a></li>
            </ul>
            </div>
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