<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="/frontend/contact/ty.php" method="post">
        <h2>Became Partner</h2>
        <label for="">First Name</label>
        <input type="text" name="fname" placeholder="User Name"><br>

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="email">Your Email</label>
        <input type="text" id="email" name="emal" placeholder="Your last name..">

        <br>
        <label for="country">Country</label>
        <br>
        <br>
        <select id="country" name="country">
            <option value="australia">New York</option>
            <option value="canada">Florida</option>
            <option value="usa">California</option>
            <option value="australia">Gerogia</option>
            <option value="canada">Chicago</option>
            <option value="usa">Washington</option>
            <option value="australia">Oregon</option>
            <option value="canada">Texas</option>
            <option value="usa">Tenesse</option>
        </select>
        <br>
        <br>
        <label for="subject">Explain why you want to partner with us:</label>
        <br>
        <br>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>

</html>