<?php

use App\Http\Controllers\Front\HomeController;
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
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/recherche', [HomeController::class, 'recherche'])->name('front.recherche');
Route::get('/recherche/formation', [HomeController::class, 'rechercheFormations'])->name('front.recherche.formations');
Route::get('/formations', [HomeController::class, 'formations'])->name('front.formations');
Route::get('/formations/{id}', [HomeController::class, 'formationsFamille'])->name('front.formations.famille');
Route::post('/demandeFormation', [HomeController::class, 'demandeFormation'])->name('front.demandeFormation');
Route::get('/formation/{id}', [HomeController::class, 'formation'])->name('front.formation');
Route::get('/contact', [HomeController::class, 'contact'])->name('front.contact');
Route::post('/contact/submit', [HomeController::class, 'contactSubmit'])->name('front.contact.submit');
Route::get('/reclamation', [HomeController::class, 'reclamation'])->name('front.reclamation');
Route::post('/reclamation/submit', [HomeController::class, 'reclamationSubmit'])->name('front.reclamation.submit');

