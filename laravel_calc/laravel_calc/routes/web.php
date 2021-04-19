<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;

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
// Route::get('suma', function () {
//     return "Sumavimas";
// });
// Route::get('dalyba', function () {
//     return "Dalyba";
// });
Route::get('/suma/{sk1}/{sk2}', [CalcController::class, 'suma']);
Route::get('/atimtis/{sk1}/{sk2}', [CalcController::class, 'atimtis']);
Route::get('/dalyba/{sk1}/{sk2}', [CalcController::class, 'dalyba']);
Route::get('/daugyba/{sk1}/{sk2}', [CalcController::class, 'daugyba']);
//POST metodas
Route::get('/show', [CalcController::class, 'show'])->name('do-math');
//sukuriamas vardas, kad galetume redirectint
Route::post('/show', [CalcController::class, 'calc'])->name("calc");