<?php
namespace FoodItems;

class CheeseBurger extends FoodItem {
    public function __construct() {

        $name = "CheeseBurger";
        $description = "a burger with a slice of melted cheese on top of the meat patty.";
        $price = 10.0;
        $preparationMinTime = 1;
        parent::__construct($name, $description, $price, $preparationMinTime);
    }

    public static function getCategory(): string {
        return CheeseBurger::class;
    }
}