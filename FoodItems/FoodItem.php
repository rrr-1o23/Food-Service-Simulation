<?php
namespace FoodItem;

abstract class FoodItem {
    protected string $name;
    protected string $description;
    protected string $price;

    public function __construct(string $name, string $description, string $price){
        $this->name = $name;
        $this->$description = $description;
        $this->price = $price;
    }

    public function getName() {
        return $name;
    }

    public function getPrice() {
        return $price;
    }

    // カテゴリを返す抽象メソッド
    abstract public static function getCategory(): string;

}