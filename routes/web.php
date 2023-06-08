<?php

use App\Http\Controllers\CacController;
use App\Http\Controllers\CherAuthController;
use App\Http\Controllers\PubController;
use App\Http\Controllers\mediaController;
use App\Http\Controllers\rechercheController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\afficheMachine;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;



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

// Route de page d'accueil
/*Route::get('/', function () {
    return view('index');
})->name('index-page');  */
//Route::get('/',[HomeController::class,'index'])->name('index-page');

Route::get('/',[HomeController::class,'index'])->name('index-page');

// Route de page d'actualite 
// Route::get('/actualite', function () {
//     return view('pages.actualite.actualite');
// })->name('actualite');
Route::get('/actualite',[PubController::class,'index'])->name('actualite');

// Route de page d'equipements
Route::get('/equipements',[afficheMachine::class,'equipements'])->name('equipements');

// Route de page machine-details
Route::get('/machine-details', function (){
    return view('pages.equipements.machine-details');
})->name('machine-details');

// Route de page des recherches
/* Route::get('/recherches', function (){
    return view('pages.recherches.recherches');
})->name('recherches'); */
Route::get('/recherches',[rechercheController::class,'index'])->name('recherches');

// Route de page a propos
Route::get('/apropos', function (){
    return view('pages.apropos.apropos');
})->name('apropos');

// Route de page a propos
Route::get('/contact', function (){
    return view('pages.contact.contact');
})->name('contact');

// Route de page media 

Route::get('/media',[mediaController::class,'index'])->name('media');
/*Route::get('/media', function (){
    return view('pages.media.media');
})->name('media'); */


// Route de connection 
// Route::get('/connexion', function (){
//     return view('pages.auth.connexion');
// })->name('connexion');

// Route de page media 
// Route::get('/inscription', function (){
//     return view('pages.auth.inscription');
// })->name('inscription');


Route::get('/UploadPage',[UpLoadController::class,'index']) ;

Route::post('/UploadData',[UpLoadDataController::class,'store']) ;

Route::get('/UploadData',[ShowController::class,'show']) ;





Route::get('/connexion',[CherAuthController::class,'connexion'])->name('connexion');
Route::get('/inscription',[CherAuthController::class,'inscription'])->name('inscription');
Route::get('/profile',[CherAuthController::class,'profile'])->name('profile');
Route::post('/inscription-chercheur',[CherAuthController::class,'inscriptionChercheur'])->name('inscription-chercheur');
Route::post('/connexion-chercheur',[CherAuthController::class,'connexionChercheur'])->name('connexion-chercheur');
Route::get('/deconnexion-chercheur',[CherAuthController::class,'deconnexion'])->name('deconnexion-chercheur');
Route::get('/emailVerification',[CherAuthController::class,'emailVerification'])->name('emailVerification');


Route::post('/connexion-secretaire',[secrAuthController::class,'connexionChercheur'])->name('connexion-secretaire');

Route::group(['prefix' => 'Admin'], function () {
    Voyager::routes();
});


Route::get('/secretaire', function (){
    return view('secretaire');
});


?>

