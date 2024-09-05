<?php
namespace FoodItem;

abstract class FoodItem {
    protected string $name;
    protected string $description;
    protected string $price;

    public function __construct(string $name, string $descriptio, string $price){
        $this->name = $name;
        $this->$description = $description;
        $this->price = $price;
    }

    abstract public static function getCategory(): string;

}