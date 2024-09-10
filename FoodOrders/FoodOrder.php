<?php
namespace FoodOrders;

date_default_timezone_set ('Asia/Tokyo');

class FoodOrder {
    protected array $items;
    protected int $orderTime;

    public function __construct(array $items){
        $this->items = $items;
        $this->orderTime = time();
    }

    public function getItems(): array {
        return $this->items;
    }

    public function getOrderTime(): int {
        return $this->orderTime;
    }
}