<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fastplate:Register</title>
    <link rel="shortcut icon" type="image/png" href="/img/fastplate.png">
</head>

<body>
    <form action="/backend/register/register.php" method="POST" class="form">
        <div class="signup">Sign up</div>
        <br><br>
        <div class="form-group">
            <span class="input3">
                <label for="uname"><b>User Name: </b></label><br>
                <br>
            </span>
            <input class="registerinput" type="text" name="uname" id="display" placeholder="Display name" />
        </div>
        </br>
        <div class="form-group">
            <span class="input1">
                <label for="email"><b>Email: </b></label><br>
                <br>
            </span>
            <input class="registerinput" type="text" name="email" id="email" placeholder="Email" />
        </div>
        </br>
        <div class="form-group">
            <span class="input2">
                <label for="password"><b>Password: </b></label><br>
                <br>
            </span>
            <input class="registerinput" type="password" name="password" id="password" placeholder="Password" />
        </div>
        </br>
        <p><input type="submit" value="Create my account" class="buttonregister" /></p>


    </form>
</body>

</html>