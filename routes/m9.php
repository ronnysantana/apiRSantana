<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Number;

Route::get('/', function (Request $request) {
    return [['msg' => 'oii', 'value' => Number::currency(1091000500, in: 'BRL', locale: 'pt_BR')]];
});
