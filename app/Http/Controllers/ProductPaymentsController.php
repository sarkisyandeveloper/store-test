<?php

namespace App\Http\Controllers;


use App\Payment\PaymentGatewayContract;
use Illuminate\Http\Request;

class ProductPaymentsController extends Controller
{

    public function store(PaymentGatewayContract $paymentGateway)
    {
        return $paymentGateway->charge(2500);
    }
}
