<?php
namespace FoodItems;

class Fettuccine extends FoodItem {
    public function __construct() {
        $name = "Fettuccine";
        $description = "This classic fettuccine Alfredo is made with cream, butter, Parmesan cheese, and parsley.";
        $price = 20.0;
        $preparationMinTime = 8;
        parent::__construct($name, $description, $price, $preparationMinTime);
    }

    public static function getCategory(): string {
        return Fettuccine::class;
    }
}