<?php
namespace Restaurants;

use FoodItems\CheeseBurger;
use FoodItems\Fettuccine;
use FoodItems\HawaiianPizza;
use FoodItems\Spaghetti;
use FoodOrders\FoodOrder;
use Invoices\Invoice;
use Persons\Employees\Cashier;
use Persons\Employees\Chef;
use Persons\Employees\Employee;

class Restaurant
{
    private array $menuMap;
    private array $employees;

    public function __construct(array $menu, array $employees)
    {
        # TODO: confuse hashmap or list
        $this->menuMap = $this->toMenuMap($menu);
        $this->employees = $employees;
    }

    private function toMenuMap(array $objects)
    {
        $mapped = [];
        foreach ($objects as $object) {
            $exploded = explode('\\', get_class($object));
            $classname = end($exploded);
            $mapped[$classname] = $object;
        }
        return $mapped;
    }

    public function getCategories(): array
    {
        return array_keys($this->menuMap);
    }
    public function order(array $categories): Invoice
    {
        # CashierにgenerateOrderしてもらう
        $foodOrder = $this->callCashier()->generateOrder($categories, $this->menuMap);

        # OrderをChefに渡して、料理時間も受け取る？
        $this->callChef()->prepareFood($foodOrder);

        # InvoiceをCashierに作ってもらいそれを返す
        return $this->callCashier()->generateInvoice($foodOrder);
    }
    public function callChef(): Chef
    {
        # TODO: need refactoring.
        $chefs = array_filter($this->employees, function($employee)
        {
            return $employee instanceof Chef;
        });
        $chefs = array_values($chefs);
        return $chefs[0];
    }

    public function callCashier(): Cashier
    {
        $cashiers = array_filter($this->employees, function($employee)
        {
            return $employee instanceof Cashier;
        });
        $cashiers = array_values($cashiers);
        return $cashiers[0];
    }
}