<?php
namespace App\Solid\Open;


class Paymentservice{

    public function pay(Paymentmethodinterface $paymentmethod)
    {
        return $paymentmethod->makepayment();
    }
}


?>