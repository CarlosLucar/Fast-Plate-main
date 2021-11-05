<?php
if (isset($_POST['uname']) && isset($_POST['password'])) {
    require('db_conn.php');
    //importing the data from the database.
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // set the value for user_name and password
    $uname = validate($_POST['uname']);
    $password = validate($_POST['password']);

    // if the user_name or password is empty will remind the user to reenter again.
    if (empty($uname)) {
        header("Location: /fastplate/frontend/login/fLogin.php?error=Oops! Enter your user name.");
        exit();
    } else if (empty($password)) {
        header("Location: /fastplate/frontend/login/fLogin.php?error=Oops! Enter your password.");
        exit();
    } else {
        //after all condition is true it will run the query.
        $sql = "SELECT * FROM users WHERE user_name = '$uname' AND password = '$password'";

        $result = mysqli_query($dbc, $sql);
        // if the resul is true of one of the colum then it will validate then get back to the main page.
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $password) {
                echo "logged in!";
                header("Location: /fastplate/frontend/logout/main2.php");
            } else {
                //if false it will display the error message
                header("Location:/fastplate/frontend/login/fLogin.php?error=Sorry, we don't recognize that user_name or password. 123Try again!");
                exit();
            }
        } else {
            //if false it will display the error message
            header("Location:/fastplate/frontend/login/fLogin.php?error=Sorry, we don't recognize that user name or password.  Try again!");
            exit();
        }
    }
} else { //if it error will still remain the homepage
    header("Location: /fastplate/frontend/login/login.php");
    exit();
}
