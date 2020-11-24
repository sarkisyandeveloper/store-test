<?php


namespace App\Payment;



interface PaymentGatewayContract
{
    public function setDiscount($amount);
    public function charge($amount);
}
