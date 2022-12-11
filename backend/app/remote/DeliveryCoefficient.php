<?php

namespace App\Remote;

class DeliveryCoefficient
{
    /**
     * @param string $company
     * @return float
     */
    public static function handle( string $company ): float
    {
        if ( $company === 'comp1' ) {
            return 15.382;
        }

        if ( $company === 'comp2' ) {
            return 20.111;
        }

        if ( $company === 'comp3' ) {
            return 12.8952;
        }
    }
}