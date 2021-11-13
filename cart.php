<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
        <title>Shopping Cart</title>
        <link rel="shortcut icon" type="image/png" href="/img/fastplate.png">
    </head>
<body>
    <div class="menu-bar">
        <ul>
            <li class="logo"><i class="w3-margin-left fa fa-home"></i><a href="index.php"> fastplate</a></li>

            <li class="menu"><a href="#">Food Menu</a>
                <div class="submenu">
                    <ul>
                        <li><a href="#">Sushi</a></li>
                        <li><a href="#">Drink</a></li>
                        <li><a href="#">Vegetable</a></li>
                    </ul>
                </div>
            </li>
            <li class="menu"><a href="#">About Us</a></li>
            <li class="menu"><a href="#">Become Partner</a></li>
            <li class="menu"><a href="#">Contact support</a></li>
            <li class="menu"><a href="/frontend/register/registerform.php">Register</a></li>
            <li class="menu"><a href="/frontend/login/fLogin.php">Login</a></li>
            <li class="menu"><a href="#">Cart <span>0</span></a></li>
        </ul>
    </div>

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


    <script src="cart.js"></script>
</body>
</html>