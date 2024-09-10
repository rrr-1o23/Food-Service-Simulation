<?php
namespace FoodItems;

abstract class FoodItem {
    protected string $name;
    protected string $description;
    protected float $price;
    protected int $preparerationMinTime;

    public function __construct(string $name, string $description, float $price, int $preparationMinTime){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->preparationMinTime = $preparationMinTime;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getPreparationMinTime(): int {
        return $this->preparationMinTime;
    }

    // カテゴリを返す抽象メソッド
    abstract public static function getCategory(): string;

}