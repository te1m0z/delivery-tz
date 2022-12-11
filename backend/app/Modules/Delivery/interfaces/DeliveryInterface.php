<?php

namespace App\Modules\Delivery\Interfaces;


interface DeliveryInterface
{
    /**
     * @param string $type
     * @param array $params
     * @return object
     */
    public function make( string $type, array $params ): object;
}