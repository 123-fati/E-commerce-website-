<?php

use Illuminate\Support\Facades\Route;
use App\Http\Contollers\AnnonceController;

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

Route::get('/accueil', 'App\Http\Controllers\AnnonceController@welcome')->name('welcome');

Route::get('/admin', function () {
    return view('Admin/connexionFournisseur');
 })->name('connexionFournisseur');

Route::post('/admin', [App\Http\Controllers\Controller_auth::class, 'login']);

Route::get('/', function () {
    return view('accueil');
});

Route::get('/order','App\Http\Controllers\HomeController@order')->name('order');
Route::post('/order/edit/{id}','App\Http\Controllers\HomeController@edit')->name('edit');
Route::get('/reservation','App\Http\Controllers\HomeController@reservation')->name('reservation');

Route::get('/admin/reclamations', [App\Http\Controllers\Controller_reclamation::class, 'allReclamations'])->name('usersReclamation');
Route::post('/admin/reclamations', [App\Http\Controllers\Controller_reclamation::class, 'searchInAll']);

Route::get('/admin/reclamations/{id}', [App\Http\Controllers\Controller_reclamation::class, 'show'])->name('showReclamation');

Route::post('/admin/reclamations/{id}', [App\Http\Controllers\Controller_reponseReclamation::class, 'store']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mes reclammations', [App\Http\Controllers\Controller_reclamation::class, 'all'])->name('reclammations');
Route::post('/mes reclammations', [App\Http\Controllers\Controller_reclamation::class, 'search'])->name('searchReclammations');


Route::get('/reclammations/{id}', [App\Http\Controllers\Controller_reclamation::class, 'show'])->name('reclamation.affiche');

Route::post('/reclammations/{id}', [App\Http\Controllers\Controller_reponseReclamation::class, 'store']) ;

Route::get('/editReclamation', [App\Http\Controllers\Controller_reclamation::class, 'edit'])->name('reclamation.edit');

Route::post('/editReclamation', [App\Http\Controllers\Controller_reclamation::class, 'store']);

Route::get('/modifierReclamation/{id}', [App\Http\Controllers\Controller_reclamation::class, 'update'])->name('reclamation.modifier');

Route::post('/modifierReclamation/{id}', [App\Http\Controllers\Controller_reclamation::class, 'updateReclamation']);

Route::get('/supprimerReclamation/{id}', [App\Http\Controllers\Controller_reclamation::class, 'delete'])->name('reclamation.supprimer');

Route::get('/conversations', [App\Http\Controllers\Controller_conversation::class, 'index'])->name('conversations');

Route::get('/conversations/{user}', [App\Http\Controllers\Controller_conversation::class, 'show'])->name('conversations.show');
Route::post('/conversations/{user}', [App\Http\Controllers\Controller_conversation::class, 'store']);

 
Route::get('/modifierReponse/{reclamationId}/{reponseId}', [App\Http\Controllers\Controller_reponseReclamation::class, 'update'])->name('reponse.modifier');

Route::post('/modifierReponse/{reclamationId}/{reponseId}', [App\Http\Controllers\Controller_reponseReclamation::class, 'updateReponse']);

Route::get('/supprimerReponse/{reclamationId}/{reponseId}', [App\Http\Controllers\Controller_reponseReclamation::class, 'delete'])->name('reponse.supprimer');

Route::get('/produit/{id}','App\Http\Controllers\ProduitController@showObject')->name('affiche.produits');
Route::get('/categorie','App\Http\Controllers\AnnonceController@affiche')->name('categorie');
Route::get('/categorie2/add','App\Http\Controllers\AnnonceController@infos')->name('affiche.inputs');
Route::get('/categorie2','App\Http\Controllers\AnnonceController@affiche2')->name('affiche.infos');


Route::get('/profile/{id}', 'App\Http\Contollers\ProfileController@partInfos')->name('profile.show');


Route::post('/categorie2/add2', [App\Http\Controllers\AnnonceController::class, 'createAnn'])->name('addAnn');