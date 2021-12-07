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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    
    <title>Fastplate</title>
    <link rel="shortcut icon" type="image/png" href="/img/fastplate.png">
</head>

<body>
    <!-- <a href="/fastplate/frontend/login/index.php">Login</a><br>
    <a href="/fastplate/frontend/register/registerform.php">Register</a>
    <h1>Welcome To The Main Page</h1> -->
    <div class="menu-bar">
        <ul>
            <li class="logo"><i class="w3-margin-left fa fa-home"></i><a href="#"> fastplate</a></li>

        
            </li>
            <li class="menu"><a href="/frontend/aboutus/aboutus.php">About Us</a></li>
            <li class="menu"><a href="/frontend/contact/contact.php">Become Partner</a></li>
            <li class="menu"><a href="/frontend/support/support.php">Contact support</a></li>
            <li class="menu"><a href="/frontend/register/registerform.php">Register</a></li>
            <li class="menu"><a href="/frontend/login/fLogin.php">Login</a></li>
            <li class="menu"><a href="/cart.php">Cart <span>0</span></a></li>
        </ul>
    </div>



    <div id="content">

        <?php
        while ($rows = mysqli_fetch_assoc($results)) {
            echo "<div>
                    <h1>" . $rows['Name'] . "</h1>
                    <h4>" . $rows['Description'] . "</h4>
                    <h4>" . $rows['Service Options'] . "</h4>
                    <h4>" . $rows['Address'] . "</h4>
                    <h4>" . $rows['Phone'] . "</h4><br>
                    <button type='button' class='button' id='btn " . $rows['ID'] . "' > Order </button>

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
            <h1>Bao Bao Cafe<br>Menu</h1>
            <a id="close 1" href="#/" style='position: relative;left: 88%;'>Close</a>
            <?php
            while ($rows = mysqli_fetch_assoc($baoResults)) {
                echo "<div class='menu-content'>
                    <img src=img" . $rows['Item img'] . "></img>
                    <h4>" . $rows['Item name'] . "</h4>
                    <h4>" . $rows['Item description'] . "</h4>
                    <h4>" . $rows['calories'] . " calories</h4>
                    <h4> $" . $rows['Item price'] . "</h4>
                    <a class='add-cart " . $rows['ID'] . "' href='#/'> Add Cart</a><br><br>
                    
                    
                    </div>"
            ?>
            <?php
            }
            ?>
        </div>

        <div id="menu2">
            <h1>Little Basil<br>Menu</h1>
            <a id="close 2" href="#/" style='position: relative;left: 88%;'>Close</a>
            <?php
            while ($rows = mysqli_fetch_assoc($lilResults)) {
                echo "<div class='menu-content'>
                    <img src=img" . $rows['Item img'] . "></img>
                    <h4>" . $rows['Item name'] . "</h4>
                    <h4>" . $rows['Item description'] . "</h4>
                    <h4>" . $rows['calories'] . " calories </h4>
                    <h4> $" . $rows['Item price'] . "</h4>
                    <a class='add-cart " . $rows['ID'] . "' href='#/'> Add Cart</a><br><br>
                    
                    
                    </div>"
            ?>
            <?php
            }
            ?>

        </div>


        <div id="menu3">
            <h1>Di Di Dumpling<br>Menu</h1>
            <a id="close 3" href="#/" style='position: relative;left: 88%;'>Close</a>
            <?php
            while ($rows = mysqli_fetch_assoc($diResults)) {
                echo "<div class='menu-content'>
                    <img src=img" . $rows['Item img'] . "></img>
                    <h4>" . $rows['Item name'] . "</h4>
                    <h4>" . $rows['Item description'] . "</h4>
                    <h4>" . $rows['calories'] . " calories </h4>
                    <h4> $" . $rows['Item price'] . "</h4>
                    <a class='add-cart " . $rows['ID'] . "' href='#/'> Add Cart</a><br><br>
                    
                    
                    </div>"
            ?>
            <?php
            }
            ?>
        </div>


        <div id="menu4">
            <h1>Jimmy's House<br>Menu</h1>
            <a id="close 4" href="#/" style='position: relative;left: 88%;'>Close</a>
            <?php
            while ($rows = mysqli_fetch_assoc($jimResults)) {
                echo "<div class='menu-content'>
                    <img src=img" . $rows['Item img'] . "></img>
                    <h4>" . $rows['Item name'] . "</h4>
                    <h4>" . $rows['Item description'] . "</h4>
                    <h4>" . $rows['calories'] . " calories </h4>
                    <h4> $" . $rows['Item price'] . "</h4>
                    <a class='add-cart " . $rows['ID'] . "' href='#/'> Add Cart</a><br><br>
                    
                    
                    </div>"
            ?>
            <?php
            }
            ?>

        </div>



        <div id="menu5">
            <h1>CAVA<br>Menu</h1>
            <a id="close 5" href="#/" style='position: relative;left: 88%;'>Close</a>
            <?php
            while ($rows = mysqli_fetch_assoc($cavResults)) {
                echo "<div class='menu-content'>
                    <img src=img" . $rows['Item img'] . "></img>
                    <h4>" . $rows['Item name'] . "</h4>
                    <h4>" . $rows['Item description'] . "</h4>
                    <h4>" . $rows['calories'] . " calories </h4>
                    <h4> $" . $rows['Item price'] . "</h4>
                    <a class='add-cart " . $rows['ID'] . "' href='#/'> Add Cart</a><br><br>
                    
                    
                    </div>"
            ?>
            <?php
            }
            ?>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="menu.js"></script>

    <script src="cart.js"></script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</html>