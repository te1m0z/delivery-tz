<?php

namespace App\Remote;

class DeliveryQuickCoefficient
{
    public static function handle( string $company ): float
    {
        if ( $company === 'comp1' ) {
            return 30;
        }

        if ( $company === 'comp2' ) {
            return 35;
        }

        if ( $company === 'comp3' ) {
            return 40;
        }
    }
}