
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkspedisiController;

Route::get('/', function () {
    return redirect()->route('ekspedisi.index');
});

Route::resource('ekspedisi', EkspedisiController::class);
