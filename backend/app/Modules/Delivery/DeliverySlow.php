<?php

namespace App\Modules\Delivery;

use App\Modules\Delivery\Interfaces\DeliverySlowInterface;
use App\Remote\DeliveryQuickPlugger;

class DeliverySlow implements DeliverySlowInterface
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
        try {

            $deliveryPlugger = new DeliveryQuickPlugger();
            
            $data = $deliveryPlugger->getResponse( $company, $weight );

            return $data;

        } catch (\Exception $err) {

            return [ 'error' => "DeliverySlow run() error: " . $err ];
            exit;
        }
    }
}