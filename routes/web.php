<?php

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
    return view('welcome');
});

use Illuminate\Support\Facades\Http;

Route::get('/api/cards', function () {
    try {
        $response = Http::withOptions(['verify' => false])->get('https://higherorlower-api.netlify.app/json'); // disable SSL verification (do not do in prod)
        return $response->json();
    } catch (\Exception $e) {
        console.log($e);
    }
});
