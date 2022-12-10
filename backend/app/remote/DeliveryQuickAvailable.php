<?php

namespace App\Remote;

class DeliveryQuickAvailable
{
    public static function handle(): bool
    {
        return date('H:i') <= '18:00';
    }
}


