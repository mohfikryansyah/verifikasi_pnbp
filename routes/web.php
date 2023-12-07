<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HistoryIppkhController;
use App\Http\Controllers\HomeController;
use App\Models\DataIppkh;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

    $dataIppkhs = DataIppkh::latest();

    if(request('keyword')) {
        $dataIppkhs->where('pt', 'like', '%' . request('keyword') . '%');
    }

    return view('home', [
        'data' => $dataIppkhs->get()
    ]);
});

Route::resource('/home', HomeController::class)->middleware('auth');
Route::resource('/home/history', HistoryIppkhController::class)->middleware('auth');

require __DIR__.'/auth.php';