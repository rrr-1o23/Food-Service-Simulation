<?php
namespace FoodItems;

class HawaiianPizza extends FoodItem {
    public function __construct() {
        $name = "HawaiianPizza";
        $description = "Hawaiian pizza is a pizza originating in Canada, and is traditionally topped with pineapple, tomato sauce, cheese, and either ham or bacon.";
        $price = 18.0;
        $preparationMinTime = 2;
        parent::__construct($name, $description, $price, $preparationMinTime);
    }

    public static function getCategory(): string {
        return Hawwaiann::class;
    }
}