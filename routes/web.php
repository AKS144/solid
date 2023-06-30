<?php


use App\Solid\Single\PdfExport;
use App\Solid\Open\Paypalmethod;
use App\Solid\Single\JsonExport;
use App\Solid\Single\SaleReports;
use App\Solid\Open\Paymentservice;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    //return view('welcome');
    $salereports = new SaleReports();
    $pdfexport = new PdfExport();
    $jsonexports = new JsonExport();

    //return $pdfexport->export($salereports->between('14-june-2023','18-june-2023'));
    //return $jsonexports->export($salereports->between('14-june-2023','18-june-2023'));


    $paymentmethod = new Paymentservice();
    $paypal = new Paypalmethod();

    return $paymentmethod->pay($paypal);




});

// Route::get('/products',[ProductController::class,'index'])->name('products.index');
// Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
// Route::post('/products/store',[ProductController::class,'create'])->name('products.store');
// Route::get('/products/edit/{id}',[ProductController::class,'create'])->name('products.edit');
// Route::put('/products/update/{id}',[ProductController::class,'create'])->name('products.update');
// Route::delete('/products/delete',[ProductController::class,'create'])->name('products.create');


Route::resource('products', ProductController::class);
Route::resource('posts', PostController::class);


Route::get('/fac', function () {

    echo Invoice::companyName();
    echo "</br>";
    echo Invoice::currentdate();
});

