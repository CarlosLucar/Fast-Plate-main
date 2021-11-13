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
    <title>Document</title>
</head>
<body>
    
    <?php
    while ($rows=mysqli_fetch_assoc($results))
    {
    ?>  
    
        <h1><?php echo $rows["ID"] ?></h1>
        <h1><?php echo $rows["Name"] ?></h1>
        <h1><?php echo $rows["Phone"] ?></h1>
        <h1><?php echo $rows["Description"] ?></h1>
        <h1><?php echo $rows["Service Options"] ?></h1>
        <h1><?php echo $rows["Address"] ?></h1>
    <?php
    }
    ?>


</body>
</html>