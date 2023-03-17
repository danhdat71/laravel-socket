<?php

use App\Events\RealtimeEvent;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::post('/send', function(){
    $content = request()->content ?: '';
    $sender = request()->sender ?: '';
    event(new RealtimeEvent($content, $sender));
});