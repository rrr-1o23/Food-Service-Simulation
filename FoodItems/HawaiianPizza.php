<?php
namespace FoodItems;

class HawaiianPizza extends FoodItem {
    public function __construct(string $name, string $description, string $price) {
        parent::__construct($name, $description, $price);
    }

    public static function getCategory(): string {
        return "HawaianPizza";
    }
}