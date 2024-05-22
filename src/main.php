<?php

require_once 'Pizza.php';
require_once 'PizzaStore.php';

use pizza\PizzaStore;

echo 'Меню' . PHP_EOL;
echo 'pepperoni' . PHP_EOL;
echo 'cheese' . PHP_EOL;
echo "Введите тип пиццы (pepperoni/cheese): ";
$text = trim(readline());

$pizzaStore = new PizzaStore();

if (in_array($text, ['pepperoni', 'cheese'])) {
    $pizza = $pizzaStore->orderPizza($text);
    echo "Вам готовит пицца: " . $pizza->getName() . PHP_EOL;
} else {
    echo "Ошибка: неизвестный тип пиццы" . PHP_EOL;
}
