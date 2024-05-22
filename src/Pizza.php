<?php

namespace pizza;

class Pizza
{
    private string $name;
    private string $sauce;
    private array $toppings;

    public function __construct(string $name, string $sauce, array $toppings)
    {
        $this->name = $name;
        $this->sauce = $sauce;
        $this->toppings = $toppings;
    }

    public function prepare(): void
    {
        echo "Готовим пиццу {$this->name} с {$this->sauce} соусом и топпингами: {$this->toppings}\n";
    }

    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали\n";
    }
}
