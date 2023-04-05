<?php
include_once "../class/cart_class.php";
include_once "../class/product_class.php";
include_once "../detail/product.php";
// session_start();
// object for cart class with actions
$objCart = new cart($_SESSION['cart']);
$action = $_POST['action'];
switch ($action) {
    case "addcart": {
            $objCart->addToCart($_POST['id']);
            break;
        }
    case "remove": {
            $objCart->remove($_POST['id']);
            break;
        }
    case "decreaseone": {
            $objCart->decrease_quantity($_POST['id']);
            break;
        }
    case "increaseone": {
            $objCart->increase_quantity($_POST['id']);
            break;
        }
    case "empty": {
            $objCart->empty();
            break;
        }
}
// display of cart
$cartNew = $objCart->cart_return();
$_SESSION['cart'] = $cartNew;

echo "<br>";
if (isset($_SESSION['cart'])) {
    $str = "";
    $i = 0;
    $total = 0;
    foreach ($_SESSION['cart'] as $productKey => $productValue) {

        $str .= "<tr><td><img src='" . $_SESSION['cart'][$productKey]['image'] . "'></td><td>" .
            $_SESSION['cart'][$productKey]['name'] . "</td><td><button type='button' onclick='decrement(this.id)'  id='" . $productKey . "'>-</button>" . $_SESSION['cart'][$productKey]['quantity'] . "<button type='button' onclick='increment(this.id)' id='" . $productKey . "' >+</button></td><td>" .
            $_SESSION['cart'][$productKey]['price'] . "</td><td><input type='submit' class='remove' value='Remove' 
           onclick='remove(this.id)' id='" . $productKey . "'>  </td></tr>";
        $i++;
        $total+= $_SESSION['cart'][$productKey]['price'];
    }
    echo ($str);
    echo "<tr><td colspan=5><h2><center>Total is $total</center></h2></td></tr>";
    echo " <tr><td colspan=5><button type='button' onclick='empty()' value='empty'>EMPTY</button></td></tr>";
}

?>

