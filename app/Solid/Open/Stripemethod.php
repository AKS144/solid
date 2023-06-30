<?php
namespace App\Solid\Open;


class Stripemethod implements Paymentmethodinterface
{
    public function makepayment()
    {
        return 'Stripe';
    }
}
?>