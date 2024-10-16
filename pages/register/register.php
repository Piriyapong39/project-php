<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <head>
        <a href="../../index.php">Homepage</a>
    </head>
    <div class="container">
        <form action="../../module/register-module/register-controller.php" method="post">
            <div class="container-inside-form">
                <label for="email">Email: </label>
                <input type="email" placeholder="Your email" name="email"><br/>
                <label for="password">Password: </label>
                <input type="password" placeholder="Your password" name="password"><br/>
                <label for="first_name">First Name: </label>
                <input type="text" placeholder="Your first name" name="first_name"><br/>
                <label for="last_name">Last Name: </label>
                <input type="text" placeholder="Your last name" name="last_name"><br/>
                <label for="tel">Tel: </label>
                <input type="text" placeholder="Your phone number" name="tel"><br/>
            </div>
            <button type="submit" value="register" >Submit</button>
        </form>
    </div>
</body>
</html>