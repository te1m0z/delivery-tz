<?php

namespace App\Modules\Delivery\Interfaces;

interface DeliveryInterface
{
    public function getCompany(): string;
    public function setCompany( string $name ): void;

    public function getSourceKladr(): string;
    public function setSourceKladr(string $source): void;

    public function getTargetKladr(): string;
    public function setTargetKladr(string $target): void;

    public function getWeight(): float;
    public function setWeight(float $weight): void;

    public function getPrice(): float;

    public function getDate(): string;
}


