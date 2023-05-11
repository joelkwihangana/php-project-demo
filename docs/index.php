<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php getting started </title>
    <link rel="stylesheet" href="static/style.css">
</head>

<body>
    <div class="parent">
        <div class="loginform">
            <h2>Login</h2>
            <form action="index.php" method="post">
                <label for="email">email</label>
                <input type="email" placeholder="email" id="email" name="email">
                <label for="pwd">password</label>
                <input type="password" name="password" id="pwd" placeholder="password" name="password">
                <input type="submit" value="Login">
            </form>
            <div class="output">
                <h3>Error message will display here!</h3>
            </div>
        </div>
    </div>

</body>

</html>