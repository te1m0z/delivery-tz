<?php

namespace App\Modules\Delivery;

use App\Modules\Delivery\Interfaces\DeliveryInterface;

class Delivery implements DeliveryInterface
{
    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany( string $name ): void
    {
        $this->company = $name;
    }

    public function getSourceKladr(): string
    {
        return $this->sourceKladr;
    }

    public function setSourceKladr(string $source): void
    {
        $this->sourceKladr = $source;
    }

    public function getTargetKladr(): string
    {
        return $this->targetKladr;
    }

    public function setTargetKladr(string $target): void
    {
        $this->targetKladr = $target;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }


    public function getPrice(): float
    {
        return static::getPrice();
    }

    public function getDate(): string
    {
        return static::getDate();
    }
}