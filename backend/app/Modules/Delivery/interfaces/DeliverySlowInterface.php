<?php

namespace App\Modules\Delivery\Interfaces;

interface DeliverySlowInterface
{
    /**
     * @param string $source
     * @param string $target
     * @param float $weight
     * @param string $company
     * @return array
     */
    public function run( string $source, string $target, float $weight, string $company ): array;
}