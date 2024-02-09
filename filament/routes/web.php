<?php

use App\Models\Event;
use App\Models\Plant;
use Illuminate\Support\Facades\Route;

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
    $event = Event::first();
    $plant = Plant::first();

    return view('welcome', ['event' => $event, 'plant' => $plant]);
});
