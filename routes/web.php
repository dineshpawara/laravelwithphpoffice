<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Excelcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('excelupload');
});

Route::post('exceldata', [Excelcontroller::class, 'ExcelData'])->name('file.upload');
Route::post('exceldataview', [Excelcontroller::class, 'ExcelRestriction'])->name('file.restrict');
