<?php

namespace App\OCP ;

use App\OCP\Interface\PaymentInterface;

class Payment
{
    public function begin(PaymentInterface $payment)
    {
        $payment->acceptPayment() ;
    }
}

$payment = new Payment();
$payment->begin(new CreditCard); /* injection CreditCard or BitCoin */