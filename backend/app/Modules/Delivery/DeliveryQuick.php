<?php

namespace App\Modules\Delivery;

use App\Modules\Delivery\Interfaces\DeliveryQuickInterface;
use App\Remote\DeliveryQuickAvailable;
use App\Remote\DeliveryQuickCoefficient;

class DeliveryQuick extends Delivery implements DeliveryQuickInterface
{

    public function handle()
    {
        $is_available = DeliveryQuickAvailable::handle();

        if ( !$is_available ) {
            return [
                'error' => 'Быстрая доставка уже закрыта'
            ];
            die;
        }

        return [
            'price' => $this->getPrice(),
            'date'  => $this->getDate(),
        ];
    }

    public function getPrice(): float
    {
        $comp = $this->getCompany();
        return $this->getWeight() * DeliveryQuickCoefficient::handle( $comp );
    }

    public function getDate(): string
    {
        return date('Y-m-d', strtotime('+1 day'));
    }
    
}