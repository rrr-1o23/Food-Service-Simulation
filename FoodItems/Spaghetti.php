<?php
namespace FoodItems;

class Spaghetti extends FoodItem {
    public function __construct() {
        $name = "Spaghetti"; 
        $description = "made with eggs, hard cheese, cured pork, and black pepper."; 
        $price = 18.0;
        $prepartionMinTime = 2;
        parent::__construct($name, $description, $price. $preparationMinTime);
    }

    public static function getCategory(): string {
        return Spaghetti::class;
    }
}