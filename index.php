<?php
require('menu.php');

$query = "SELECT * FROM restaurants";

$results = mysqli_query($dbc, $query);
?>

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

    <title>FastPlate</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
</head>

<body>
    <!-- <a href="/fastplate/frontend/login/index.php">Login</a><br>
    <a href="/fastplate/frontend/register/registerform.php">Register</a>
    <h1>Welcome To The Main Page</h1> -->

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
            <li class="nav-item menu"><a class= "nav-link" href="/cart.php">Cart <span>0</span></a></li>
        </ul>
        </div>
    </nav>



    <div id="restaurant">
        <img src='img\baobaocafe.png'>
        <img src='img\dididumplings.jpg'>
        <img src='img\jimmyshouse.png'>
        <img src='img\cava.png'>
        <img src='img\kungfutea.png'>
    </div>

    <div id="content">

        <?php
        while ($rows = mysqli_fetch_assoc($results)) {
            echo "<div>
                    <br>
                    <h1>" . $rows['Name'] . " <img src='img\starvote.png'></h1>
                    <br>
                    <h3><img src='img\bowl.png'>" . $rows['Description'] . "</h2>
                    <h4><img src='img\spoon.png'>" . $rows['Service Options'] . "</h4>
                    <h4><img src='img\addresslogo.png'>" . $rows['Address'] . "</h4>
                    <h4><img src='img\phone.jpg'>" . $rows['Phone'] . "</h4><br>
                    <button type='button' class='button btn btn-primary btn-lg' id='btn " . $rows['ID'] . "' > Order </button>
                    <br>
                    <br>
                    <br>
                </div>"
        ?>

        <?php
        }
        ?>

    </div>

    <?php
    $baoQuery = "SELECT * FROM `bao bao cafe`";

    $baoResults = mysqli_query($dbc, $baoQuery);

    $lilQuery = "SELECT * FROM `little basil`";

    $lilResults = mysqli_query($dbc, $lilQuery);

    $diQuery = "SELECT * FROM `di di dumpling`";

    $diResults = mysqli_query($dbc, $diQuery);

    $jimQuery = "SELECT * FROM `jimmy's house`";

    $jimResults = mysqli_query($dbc, $jimQuery);

    $cavQuery = "SELECT * FROM `cava`";

    $cavResults = mysqli_query($dbc, $cavQuery);
    ?>
    <div class="container">
        <div id="menu1">
            <div class="menu-header">
                <h1>Bao Bao Cafe<br>Menu</h1>
                <a class="btn btn-primary btn-sm" id="close 1" href="#/" style='position: relative;left: 88%;'>Close</a>
            </div>
            <?php
            while ($rows = mysqli_fetch_assoc($baoResults)) {
                echo "<div class='menu-content'>

                        <div class='card' style='width: 16rem;'>
                            <img src=img". $rows['Item img']." class='card-img-top' alt='...'>
                            <div class='card-body'>
                            <h5 class='card-title'>". $rows['Item name']."</h5>
                            <p class='card-text'>". $rows['Item description']."</p>
                            <p class='card-text'>". $rows['calories']." calories</p>
                            <p class='card-text'><strong> $". $rows['Item price']."</strong></p>
                            <a href='#/' class='btn btn-primary add-cart ". $rows['ID'] ."'>Add Cart</a>
                            </div>
                        </div>

                    
                    
                    </div>"
            ?>
            <?php
            }
            ?>
        </div>

        <div id="menu2">
            <div>
                <h1>Little Basil<br>Menu</h1>
                <a class="btn btn-primary btn-sm" id="close 2" href="#/" style='position: relative;left: 88%;'>Close</a>
            </div>
            <?php
            while ($rows = mysqli_fetch_assoc($lilResults)) {
                echo "<div class='menu-content'>

                    <div class='card' style='width: 16rem;'>
                            <img src=img". $rows['Item img']." class='card-img-top' alt='...'>
                            <div class='card-body'>
                            <h5 class='card-title'>". $rows['Item name']."</h5>
                            <p class='card-text'>". $rows['Item description']."</p>
                            <p class='card-text'>". $rows['calories']." calories</p>
                            <p class='card-text'><strong> $". $rows['Item price']."</strong></p>
                            <a href='#/' class='btn btn-primary add-cart ". $rows['ID'] ."'>Add Cart</a>
                            </div>
                        </div>
                    
                    
                    </div>"
            ?>
            <?php
            }
            ?>

        </div>


        <div id="menu3">
            <div>
                <h1>Di Di Dumpling<br>Menu</h1>
                <a class="btn btn-primary btn-sm" id="close 3" href="#/" style='position: relative;left: 88%;'>Close</a>
            </div>
            <?php
            while ($rows = mysqli_fetch_assoc($diResults)) {
                echo "<div class='menu-content'>
                    
                        <div class='card' style='width: 16rem;'>
                            <img src=img". $rows['Item img']." class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>". $rows['Item name']."</h5>
                                <p class='card-text'>". $rows['Item description']."</p>
                                <p class='card-text'>". $rows['calories']." calories</p>
                                <p class='card-text'><strong> $". $rows['Item price']."</strong></p>
                                <a href='#/' class='btn btn-primary add-cart ". $rows['ID'] ."'>Add Cart</a>
                            </div>
                        </div>

                    
                    
                    </div>"
            ?>
            <?php
            }
            ?>
        </div>


        <div id="menu4">
            <div>
                <h1>Jimmy's House<br>Menu</h1>
                <a class="btn btn-primary btn-sm" id="close 4" href="#/" style='position: relative;left: 88%;'>Close</a>
            </div>
            <?php
            while ($rows = mysqli_fetch_assoc($jimResults)) {
                echo "<div class='menu-content'>


                    <div class='card' style='width: 16rem;'>
                            <img src=img". $rows['Item img']." class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>". $rows['Item name']."</h5>
                                <p class='card-text'>". $rows['Item description']."</p>
                                <p class='card-text'>". $rows['calories']." calories</p>
                                <p class='card-text'><strong> $". $rows['Item price']."</strong></p>
                                <a href='#/' class='btn btn-primary add-cart ". $rows['ID'] ."'>Add Cart</a>
                            </div>
                    </div>
                    
                    
                    </div>"
            ?>
            <?php
            }
            ?>

        </div>



        <div id="menu5">
            <div>
                <h1>CAVA<br>Menu</h1>
                <a class="btn btn-primary btn-sm" id="close 5" href="#/" style='position: relative;left: 88%;'>Close</a>
            </div>
            <?php
            while ($rows = mysqli_fetch_assoc($cavResults)) {
                echo "<div class='menu-content'>
                    
                    <div class='card' style='width: 16rem;'>
                            <img src=img". $rows['Item img']." class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>". $rows['Item name']."</h5>
                                <p class='card-text'>". $rows['Item description']."</p>
                                <p class='card-text'>". $rows['calories']." calories</p>
                                <p class='card-text'><strong> $". $rows['Item price']."</strong></p>
                                <a href='#/' class='btn btn-primary add-cart ". $rows['ID'] ."'>Add Cart</a>
                            </div>
                    </div>
                    
                    
                    </div>"
            ?>
            <?php
            }
            ?>

        </div>
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
