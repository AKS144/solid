<?php
namespace App\Solid\Single;

use Illuminate\Support\Facades\DB;

class SaleReports
{
    public function between($startdate, $enddate)
    {
        return DB::table('posts')
                ->whereBetween('created_at',[$startdate, $enddate])
                ->latest()->get();
    }
}


?>
