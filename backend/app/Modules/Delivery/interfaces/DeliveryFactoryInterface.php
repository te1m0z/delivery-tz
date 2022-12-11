<?php

namespace App\Modules\Delivery\Interfaces;

interface DeliveryFactoryInterface
{
    /**
     * @return DeliveryQuickInterface
     */
    public function createDeliveryQuick(): DeliveryQuickInterface;

    /**
     * @return DeliverySlowInterface
     */
    public function createDeliverySlow(): DeliverySlowInterface;
}