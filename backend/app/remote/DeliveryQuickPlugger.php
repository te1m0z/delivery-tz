<?php

namespace App\Remote;

class DeliveryQuickPlugger
{
    /**
     * @var string
     */
    private string $company;

    /**
     * @param string $company
     * @param float $weight
     * @return array
     */
    public function getResponse( string $company, float $weight ): array
    {
        $this->company = $company;

        $data = [
            'price' => $weight * $this->calculate_price(),
            'date' => date('Y-m-d', strtotime('+1 day'))
        ];

        return $data;
    }

    /**
     * @return float
     */
    public function calculate_price(): float
    {
        return DeliveryCoefficient::handle( $this->company );
    }
}