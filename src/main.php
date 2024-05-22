<?php

require_once 'Pizza.php';
require_once 'PizzaStore.php';

use pizza\PizzaStore;

echo 'Меню' . PHP_EOL;
echo 'pepperoni' . PHP_EOL;
echo 'cheese' . PHP_EOL;
echo "какую пиццу вы у нас заберёте: ";
$text = trim(readline());
$pizzaStore = new PizzaStore();
$pizzaStore->orderPizza($text);