<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('itemPdfView',[ItemController::class,'itemPdfView']);
Route::post('itemPdfView',array('as'=>'itemPdfView','uses'=>'ItemController@itemPdfView')); 