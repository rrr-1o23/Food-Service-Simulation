<?php
namespace Persons\Employees;

use FoodOrders\FoodOrder;

class Chef extends Employee
{
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary)
    {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function prepareFood(FoodOrder $foodOrder): int
    {
        $foodItems = $foodOrder->getItems();
        $totalTime = 0;
        foreach ($foodItems as $foodItem)
        {
            echo "{$this->name} was cooking {$foodItem->getCategory()}." . PHP_EOL;
            $totalTime += $foodItem->getPreparationMinTime();
        }
        echo "{$this->name} took {$totalTime} minutes to cook.".PHP_EOL;
        return $totalTime;
    }
}
