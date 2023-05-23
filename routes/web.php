<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\ProcessPodcast;
use App\Jobs\ProcessSubscribe;

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
    return view('welcome');
});

$router->get('/test-queue', function () use ($router){
    dispatch(new ProcessPodcast);
    dispatch(new ProcessSubscribe("Hello world dari Serverless ID!"));

    return "ProcessPodcast dan ProcessSubscribe sedang dijalankan!";
});
