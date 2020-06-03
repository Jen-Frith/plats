<?php

use Illuminate\Support\Facades\Route;
use App\Entreprise;
use App\Client;


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

    $clients=Client::all();
    $entreprises=Entreprise::all();
    $entreprise = Client::with('entreprise')->get();

    return view('welcome', compact('clients', 'entreprises'));
});


Route::post('/store', 'ClientController@store', function(){})->name('client.store');
Route::post('/Estore', 'EntrepriseController@store', function(){})->name('entreprise.store');

Route::get('/Sliste', 'ClientController@liste', function(){})->name('client.listeSucre');
Route::get('/Saliste', 'ClientController@liste1', function(){})->name('client.listeSale');