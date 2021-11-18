<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('db_conn.php');
    $errors = array();

    if (empty($_POST['uname'])) {
        $errors[] = "You forgot to enter your first name";
    } else {
        $n = mysqli_real_escape_string($dbc, $_POST['uname']);
    }
    if (empty($_POST['email'])) {
        $errors[] = "You forgot to enter your email";
    } else {
        $e = mysqli_real_escape_string($dbc, $_POST['email']);
    }
    if (empty($_POST['password'])) {
        $errors[] = "You forgot to enter your password";
    } else {
        $p = mysqli_real_escape_string($dbc, $_POST['password']);
    }
    if (empty($errors)) {


        $n = $_POST['uname'];
        $e = $_POST['email'];
        $p = $_POST['password'];
        $query = "INSERT INTO users (user_name, email, password, reg_date) value('$n','$e',SHA1('$p'),NOW())";

        $run = mysqli_query($dbc, $query);


        if ($run) {

            echo "<p>Still waiting to be proceed......</p>";
            header("Refresh:3, URL=/fast-plate-main/frontend/login/flogin.php");
        } else {
            echo "<h1>Error!</h1><p>You could not be regitered, please try again</p>";
            echo "<p>" . mysqli_error($dbc) . "</p>";
        }
    } else {
        echo "<h1>error!</h1>";
        echo "<p>The following errors have occured: </br>";
        // header("Refresh:3, URL=reform.php");
        foreach ($errors as $item) {
            echo "$item<br/>";
        }

        echo "Please try again!</p>";
        // header("Refresh:3, URL=reform.php");
    }

    mysqli_close($dbc);
} else {
    echo "<h1>ACCESS DENIED!</h1>";
}
