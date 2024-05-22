<?php

namespace pizza;

class PizzaStore
{
    public function orderPizza($type)
    {
        $pizza = $this->createPizza($type);
        if ($pizza) {
            $pizza->prepare();
            $pizza->cut();
        } else {
            echo "вы ошибаетесь, такой пиццы у нас нет в меню";
        }
    }

    public function createPizza($type)
    {
        switch ($type) {
            case 'cheese':
                return new Pizza("Чиз", "Помидорный", 'Сыр');
            case 'pepperoni':
                return new Pizza("Пепперони", "Острый", 'Пепперони');

            default:
                return null;
        }
    }
}