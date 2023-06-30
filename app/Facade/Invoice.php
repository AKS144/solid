<?php

namespace App\Facade;

use Carbon\Carbon;


class Invoice{
    public function companyName()
    {
        return 'ABC Pvt Ltd.';
    }

    public function currentdate()
    {
        return Carbon::now()->format('Y-m-d');
    }
}



?>
