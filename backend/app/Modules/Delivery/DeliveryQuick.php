<?php

namespace App\Modules\Delivery;

use App\Modules\Delivery\Interfaces\DeliveryQuickInterface;
use App\Remote\DeliveryQuickAvailable;
use App\Remote\DeliveryQuickPlugger;

class DeliveryQuick implements DeliveryQuickInterface
{
    /**
     * @param string $source
     * @param string $target
     * @param float $weight
     * @param string $company
     * @return string[]
     */
    public function run( string $source, string $target, float $weight, string $company ): array
    {
        if ( ! DeliveryQuickAvailable::handle() ) {
            return [
                'error' => 'Быстрая доставка уже закрыта'
            ];
            exit;
        }

        try {

            $deliveryPlugger = new DeliveryQuickPlugger();
            
            $data = $deliveryPlugger->getResponse( $company, $weight );

            return $data;

        } catch (\Exception $err) {

            return [ 'error' => "DeliveryQuick run() error: " . $err ];
            exit;
        }
    }
}