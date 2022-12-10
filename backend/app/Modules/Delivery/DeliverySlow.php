<?php

namespace App\Modules\Delivery;

use App\Modules\Delivery\Interfaces\DeliverySlowInterface;
use App\Remote\DeliverySlowCoefficient;

class DeliverySlow extends Delivery implements DeliverySlowInterface
{
    private $base_price = 150;

    public function handle()
    {
        $this->coef = $this->getCoefficient();

        return [
            'price' => $this->getPrice(),
            'date'  => $this->getDate(),
        ];
    }

    private function getCoefficient(): float
    {
        $comp = $this->getCompany();
        return DeliverySlowCoefficient::handle( $comp );
    }

    public function getPrice(): float
    {
        return  $this->base_price * $this->getCoefficient();
    }

    public function getDate(): string
    {
        return date('Y-m-d', strtotime('+4 day'));
    }
}