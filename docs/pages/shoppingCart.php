<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample shopping cart</title>
    <link rel="stylesheet" href="../static/cart.css">
</head>

<body>
    <div class="container">
        <div class="inputProduct">
            <form action="" method="POST">
                <input type="text" name="product-name" id="" placeholder="enter name of product">
                <input type="submit" value="Add product" name="addProduct">
            </form>
        </div>
        <div class="productList">
            <ul>
                <?php showProducts();
                ?>
            </ul>
        </div>
        <div class="cartItems">
            <div class="cartTitle">
                <h1>0</h1>
            </div>
            <div class="cartBody">
                <ul>
                    <li>beans</li>
                </ul>
            </div>
        </div>
    </div>
</body>
<?php

function showProducts()
{
    $product_name = $_POST["product-name"];
    $products = array("kaunga");
    if (isset($_POST['addProduct']) &&  $product_name !== null) {
        array_push($products, $product_name);
    }
    echo "<h2>We have " . count($products) . " products</h2>";
    foreach ($products as $product) {
        echo "<li class='product-item'>" . $product . "</li>";
    }
    return $products;
}


?>

</html>