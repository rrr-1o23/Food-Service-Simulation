<?php

namespace Persons\Customers;

use Invoices\Invoice;
use Persons\Person;
use Restaurants\Restaurant;

class Customer extends Person {
    protected array $tastesMap;

    public function __construct(string $name, int $age, string $address, array $tastesMap){
        parent::__construct($name, $age, $address);
        $this->testesMap = $testesMap;
    }

    public function interestedCategories(Restaurant $restaurant): array {
        $categories = $restaurant->getCategories();
        $categoriesMap = array_flip($categories); // キーとバリューを反転
        $interestedList = array_intersect_key($this->tastesMap, $categoriesMap);
        
        echo "{$this->name} wanted to eat ". implode(", ", array_keys($this->tastesMap)).".".PHP_EOL;;

        return $interestedList;
    }

    public function toOrderString(array $orderMap): array {
        $ordersStrings = [];
        foreach($orderMap as $item => $quantity) {
            $ordersStrings = "{$item} × {$quantity}";
        }

        return $ordersStrings;
    }

    public function order(Restaurant $restaurant): Invoice {
        $interestedList = $this->interestedCategories($restaurant);
        echo "{$this->name} was looking at the menu, and ordered "
        .implode(', ', $this->toOrdersString($interestedList)).".".PHP_EOL;

        return $restaurant->order($interestedList);
    }
}

