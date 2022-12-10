<?php

namespace App\Modules\Delivery;

class DeliveryFactory
{
    public static function make( string $type )
    {
        if ( $type === 'slow' )
        {
            return new DeliverySlow();
        }

        if ( $type === 'quick' )
        {
            return new DeliveryQuick();
        }

        die( 'Не передан тип доставки' );
    }
}