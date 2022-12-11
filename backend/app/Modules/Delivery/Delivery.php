<?php

namespace App\Modules\Delivery;

use App\Modules\Delivery\Interfaces\DeliveryInterface;

class Delivery implements DeliveryInterface
{
    /**
     * @var object
     */
    private object $currentDelivery;
    /**
     * @var array
     */
    private array  $currentParams;
    /**
     * @var DeliveryFactory
     */
    private DeliveryFactory $factory;

    /**
     * Создание фабрики
     */
    public function __construct()
    {
        $this->factory = new DeliveryFactory();
    }

    /**
     * @param string $type
     * @param array $params
     * @return object
     */
    public function make( string $type, array $params ): object
    {
        if ( $type === 'slow' )
        {
            $this->currentParams = [ $params['source'], $params['target'], $params['weight'], $params['company'] ];
            $this->currentDelivery = $this->factory->createDeliverySlow();
            return $this->currentDelivery;
        }

        if ( $type === 'quick' )
        {
            $this->currentParams = [ $params['source'], $params['target'], $params['weight'], $params['company'] ];
            $this->currentDelivery = $this->factory->createDeliveryQuick();
            return $this->currentDelivery;
        }
    }

    /**
     * @return array
     */
    public function run(): array
    {
        return $this->currentDelivery->run( ...$this->currentParams );
    }
}