<?php

session_start();

require_once "../vendor/autoload.php";

use app\classes\Cart;

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$quantity = filter_input(INPUT_GET, "qty", FILTER_SANITIZE_NUMBER_INT);

(new Cart)->quantity($id, $quantity);

header("location: index.php?page=cart");