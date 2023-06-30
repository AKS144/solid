<?php
namespace App\Solid\Open;
use App\Solid\Open\Paymentmethodinterface;


class Paypalmethod implements Paymentmethodinterface
{
    public function makepayment()
    {
        return 'Paypal';
    }
}


?>