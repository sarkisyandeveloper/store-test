<?php


namespace App\Payment;

use Illuminate\Support\Str;

class PayPallPayment implements PaymentGatewayContract
{
    public const PAY_METHOD = 'PayPall';

    private $currency;
    private $discount;

    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }

    public function charge($amount)
    {
        $fees = $amount * 0.03;
        return [
            'amount' => ($amount - $this->discount) + $fees,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fees' => $fees,
            'payment_method' => self::PAY_METHOD
        ];
    }

}
