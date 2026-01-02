<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Number;

Route::get('/', function (Request $request) {
    return response([
        'route' => 'm9',
        'value' => Number::currency(500.000.000, in: 'BRL', locale: 'pt_BR'),
    ]);
});
