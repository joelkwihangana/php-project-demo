<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing isset and empty in php</title>
    <link rel="stylesheet" href="../static/test.css">
</head>

<body>
    <div class="container">
        <div class="form">
            <div class="formValidation"><?php checkFormValidation(); ?></div>
            <form action="test.php" method="POST">
                <label for="username">Username</label>
                <input type="text" placeholder="Enter the username" name="username">
                <label for="email">Email</label>
                <input type="email" name="email" id="" placeholder="Enter your email here">
                <div class="payment">
                    <input type="radio" name="payment-method" value="MomoPay" id="">MTN MoMo<br>
                    <input type="radio" name="payment-method" value="AirtelMoney" id="">AirtelMoney<br>
                    <input type="radio" name="payment-method" value="EasyPay" id="">EasyPay<br>
                </div>
                <input type="submit" value="Login" name="login">
            </form>
        </div>
    </div>
</body>

<?php
function checkFormValidation()
{
    if (isset($_POST['login'])) {
        if (isset($_POST['payment-method'])) {
            $payementMethod = $_POST['payment-method'];
            $usrname = $_POST['username'];
            $userEmail = $_POST['email'];
        }

        if (!empty($usrname) && !empty($userEmail)) {
            echo "Hello mr " . $usrname . ", your email is " . $userEmail . "<br>";
            echo "you have chosen {$payementMethod} payment method";
        } else {
            echo "<font color='red'>Please All fields are required! </font>";
        }
    }
}
?>

</html>