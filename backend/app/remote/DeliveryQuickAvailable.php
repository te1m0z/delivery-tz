<?php

namespace App\Remote;

class DeliveryQuickAvailable
{
    /**
     * @return bool
     */
    public static function handle(): bool
    {
        return date('H:i') <= '18:00';
    }
}


