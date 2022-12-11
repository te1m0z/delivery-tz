<?php

namespace App\Modules\Delivery;

use App\Modules\Delivery\Interfaces\DeliveryFactoryInterface;
use App\Modules\Delivery\Interfaces\DeliveryQuickInterface;
use App\Modules\Delivery\Interfaces\DeliverySlowInterface;

# Абстрактная фабрика

class DeliveryFactory implements DeliveryFactoryInterface
{
    /**
     * @return DeliveryQuickInterface
     */
    public function createDeliveryQuick(): DeliveryQuickInterface
    {
        return new DeliveryQuick();
    }

    /**
     * @return DeliverySlowInterface
     */
    public function createDeliverySlow(): DeliverySlowInterface
    {
        return new DeliverySlow();
    }
}

