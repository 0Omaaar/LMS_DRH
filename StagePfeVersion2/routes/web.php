<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\ContactController;
use App\Http\Controllers\Back\DemandeController;
use App\Http\Controllers\Back\EvenementController;
use App\Http\Controllers\Back\FamilleController;
use App\Http\Controllers\Back\FormationController;
use App\Http\Controllers\Back\ReclamationController;
use App\Http\Controllers\Back\SousfamilleController;
use App\Http\Controllers\Front\HomeController;

use Illuminate\Support\Facades\Route;
include_once 'auth.php'; 
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


Route::prefix('admin')->middleware(['auth'])->group(function (){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');


    Route::get('/formations', [FormationController::class, 'index'])->name('admin.formations');
    Route::get('/formations/show/{id}', [FormationController::class, 'show'])->name('admin.formations.show');
    Route::get('/formations/create', [FormationController::class, 'create'])->name('admin.formations.create');
    Route::post('/formations/store', [FormationController::class, 'store'])->name('admin.formations.store');
    Route::get('/formations/edit/{id}', [FormationController::class, 'edit'])->name('admin.formations.edit');
    Route::put('/formations/update/{id}', [FormationController::class, 'update'])->name('admin.formations.update');
    Route::get('/formations/delete/{id}', [FormationController::class, 'delete'])->name('admin.formations.delete');

    
    Route::get('/familles', [FamilleController::class, 'index'])->name('admin.familles.index');
    Route::get('/familles/show/{id}', [FamilleController::class, 'show'])->name('admin.familles.show');
    Route::get('/familles/create', [FamilleController::class, 'create'])->name('admin.familles.create');
    Route::post('/familles/store', [FamilleController::class, 'store'])->name('admin.familles.store');
    Route::get('/familles/delete/{id}', [FamilleController::class, 'delete'])->name('admin.familles.delete');

    Route::get('/sousfamilles', [SousfamilleController::class, 'index'])->name('admin.sousfamilles.index');
    // Route::get('/sousfamilles/show/{id}', [SousfamilleController::class, 'show'])->name('admin.sousfamilles.show');
    Route::get('/sousfamilles/create', [SousfamilleController::class, 'create'])->name('admin.sousfamilles.create');
    Route::post('/sousfamilles/store', [SousfamilleController::class, 'store'])->name('admin.sousfamilles.store');
    Route::get('/sousfamilles/delete/{id}', [SousfamilleController::class, 'delete'])->name('admin.sousfamilles.delete');

    
    Route::get('/reclamations', [ReclamationController::class, 'index'])->name(('admin.reclamations.index'));
    Route::get('/reclamations/delete/{id}', [ReclamationController::class, 'delete'])->name(('admin.reclamations.delete'));
    Route::get('/reclamations/{id}/enAttente', [ReclamationController::class, 'enAttente'])->name('admin.reclamations.enAttente');
    Route::get('/reclamations/{id}/enCoursDeTraitement', [ReclamationController::class, 'enCoursDeTraitement'])->name('admin.reclamations.enCoursDeTraitement');
    Route::get('/reclamations/{id}/traitee', [ReclamationController::class, 'traitee'])->name('admin.reclamations.traitee');

    route::get('/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
    route::get('/contacts/delete/{id}', [ContactController::class, 'delete'])->name('admin.contacts.delete');
    // route::get('/dashboard/contact/Reply/{id}', [MessageController::class, 'Reply'])->name('admin.contacts.reply');
    // Route::post('/dashboard/contacts/email/{id}', [MessageController::class, 'MailReply'])->name('admin.contacts.email');

    Route::get('/demandes', [DemandeController::class, 'index'])->name(('admin.demandes.index'));
    Route::get('/demandes/delete/{id}', [DemandeController::class, 'delete'])->name(('admin.demandes.delete'));
    Route::get('/demandes/{id}/enAttente', [DemandeController::class, 'enAttente'])->name('admin.demandes.enAttente');
    Route::get('/demandes/{id}/enCoursDeTraitement', [DemandeController::class, 'enCoursDeTraitement'])->name('admin.demandes.enCoursDeTraitement');
    Route::get('/demandes/{id}/traitee', [DemandeController::class, 'traitee'])->name('admin.demandes.traitee');

    Route::get('/evenements', [EvenementController::class, 'index'])->name('admin.evenements.index');
    Route::get('/evenements/create', [EvenementController::class, 'create'])->name('admin.evenements.create');
    Route::post('/evenements/store', [EvenementController::class, 'store'])->name('admin.evenements.store');
    Route::get('/evenements/delete/{id}', [EvenementController::class, 'delete'])->name('admin.evenements.delete');
});