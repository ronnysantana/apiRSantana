<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Number;

Route::get('/', function (Request $request) {
    return ['msg' => 'oii', 'value' => Number::currency(1000000009, in: 'BRL', locale: 'pt_BR')];
});
