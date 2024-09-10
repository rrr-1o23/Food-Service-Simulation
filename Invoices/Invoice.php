<?php
namespace Invoices;

date_default_timezone_set ('Asia/Tokyo');

class Invoice {
    protected float $finalPrice;
    protected int $orderTime;
    protected int $estimatedTimeInMinutes;

    public function __construct(float $finalPrice, int $orderTime, int $estimatedTimeMinutes){
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }

    public function getFinalPrice(): float {
        return $this->finalPrice;
    }

    public function getOrderTime(): int {
        return $this->orderTime;
    }

    public function getEstimatedTimeMinutes(): int {
        return $this->getEstimatedTimeInMinutes;
    }

    public function printInvoice(): void {
        $formattedDate = date("Y/m/d H:i:s", $this->orderTime);
        $separatorLine = str_repeat('-', 40);

        printf(
            "s\nDate: %s\nFinal Price: $%.2f\n%s\n",
            $separatorLine,
            $formattedDate,
            $this->finalPrice,
            $separatorLine
        );
    }
}