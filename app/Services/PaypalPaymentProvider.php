<?php

namespace App\Services;

use App\Contracts\PaymentProvider;
use Illuminate\Support\Facades\Log;

class PaypalPaymentProvider implements PaymentProvider
{
    public function charge(float $amount): bool
    {
        // Log a message to simulate a payment
        Log::info("Charging \${$amount} via PayPal.");

        // Simulate successful charge
        return true;
    }
}