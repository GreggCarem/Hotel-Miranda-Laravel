<?php

namespace App\Contracts;

interface PaymentProvider
{
    public function charge(float $amount): bool;
}