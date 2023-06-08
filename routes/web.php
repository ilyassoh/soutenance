<?php

use App\Http\Controllers\CacController;
use App\Http\Controllers\CherAuthController;
use App\Http\Controllers\demandeControlleur;
use App\Http\Controllers\PubController;
use App\Http\Controllers\afficheMachine;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\Voyager\demandeController;
use App\Http\Controllers\Voyager\chercheurController;
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
Route::get('/', function () {
    return view('index');
})->name('index-page');


// Route de page d'actualite 
// Route::get('/actualite', function () {
//     return view('pages.actualite.actualite');
// })->name('actualite');
Route::get('/actualite',[PubController::class,'index'])->name('actualite');

// Route de page d'equipements
Route::get('/equipements',[afficheMachine::class,'equipements'])->name('equipements');





Route::post('/accepter-demande',[demandeController::class,'accepterDemande'])->name('accepter-demande');
Route::post('/refuser-demande',[demandeController::class,'refuserDemande'])->name('refuser-demande');
Route::post('/verifier-chercheur',[chercheurController::class,'verifierChercheur'])->name('verifier-chercheur');




// Route de page machine-details
Route::get('/machine-details', function (){
    return view('pages.equipements.machine-details');
})->name('machine-details');

// Route de page des recherches
Route::get('/recherches', function (){
    return view('pages.recherches.recherches');
})->name('recherches');

// Route de page a propos
Route::get('/apropos', function (){
    return view('pages.apropos.apropos');
})->name('apropos');

// Route de page a propos
Route::get('/contact', function (){
    return view('pages.contact.contact');
})->name('contact');

// Route de page media 
Route::get('/media', function (){
    return view('pages.media.media');
})->name('media');




Route::get('/UploadPage',[UpLoadController::class,'index']) ;
Route::post('/UploadData',[UpLoadDataController::class,'store']) ;
Route::get('/UploadData',[ShowController::class,'show']) ;




// Login & Logout
Route::get('/connexion',[CherAuthController::class,'connexion'])->name('connexion');
Route::get('/inscription',[CherAuthController::class,'inscription'])->name('inscription');
Route::get('/profile',[CherAuthController::class,'profile'])->middleware('canConnect')->name('profile');
Route::post('/inscription-chercheur',[CherAuthController::class,'inscriptionChercheur'])->name('inscription-chercheur');
Route::post('/connexion-chercheur',[CherAuthController::class,'connexionChercheur'])->name('connexion-chercheur');
Route::get('/deconnexion-chercheur',[CherAuthController::class,'deconnexion'])->name('deconnexion-chercheur');
Route::post('/validate-code-email',[CherAuthController::class,'validateCodeEmail'])->name('validate-code-email');
Route::get('/email-verification-page',[CherAuthController::class,'EmailVerificationPage'])->middleware('showPageCodeMail')->name('email-verification-page');
Route::post('/resend-code-email',[CherAuthController::class,'resendCodeEmail'])->name('resend-code-email')->middleware('showPageCodeMail');

// Forget Password 
Route::get('/page-oubli-mp',[CherAuthController::class,'pageOubliMP'])->name('page-oubli-mp');
Route::post('/oublier-mp',[CherAuthController::class,'oublierMP'])->name('oublier-mp');
Route::post('/vcm',[CherAuthController::class,'validateCodeEmail2'])->name('vcm');
Route::post('/rp',[CherAuthController::class,'resetPW'])->name('rp');

// Edit Profile 
Route::post('/edit-profile-chercheur',[CherAuthController::class,'editProfile'])->name('edit-profile-chercheur');
Route::post('/remove-imageProfile-chercheur',[CherAuthController::class,'removeImageProfile'])->name('remove-imageProfile-chercheur');
Route::get('/annuler',function () {
    session()->forget('demEnr');
    return back();
})->name('annuler');








// Effectuer une demande 
Route::post('/demande',[demandeControlleur::class,'effectuerDemande'])->name('demande');


Route::post('/connexion-secretaire',[secrAuthController::class,'connexionChercheur'])->name('connexion-secretaire');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/secretaire', function (){
    return view('secretaire');
});

?>

