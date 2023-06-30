<?php

namespace App\Solid\Dependency;

class PaymentProcess
{
    protected $paymentmethod;

    public function __construct(PaymentInterface $pay)
    {
        $this->paymentmethod = $pay;
    }

    public function pay()
    {
        $this->paymentmethod->makepayment();
    }
}


$payment = new PaymentProcess(
    new PaypalPayment()
);
$payment->pay();


?>