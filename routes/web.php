<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotifController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return response()->json(["tes"=>"masok"]);
});
Route::get('/notif', [NotifController::class, 'getNotif']);


