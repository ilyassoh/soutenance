<?php

use App\Http\Controllers\CacController;
use App\Http\Controllers\CherAuthController;
use App\Http\Controllers\PubController;
<<<<<<< Updated upstream
use App\Http\Controllers\mediaController;
use App\Http\Controllers\rechercheController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\afficheMachine;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
=======
use App\Http\Controllers\afficheMachine;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\Voyager\demandeController;
use App\Http\Controllers\Voyager\chercheurController;
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
/*Route::get('/', function () {
    return view('index');
})->name('index-page');  */
//Route::get('/',[HomeController::class,'index'])->name('index-page');

Route::get('/',[HomeController::class,'index'])->name('index-page');
=======
Route::get('/', function () {
    return view('index');
})->name('index-page');

>>>>>>> Stashed changes

// Route de page d'actualite 
// Route::get('/actualite', function () {
//     return view('pages.actualite.actualite');
// })->name('actualite');
Route::get('/actualite',[PubController::class,'index'])->name('actualite');

// Route de page d'equipements
Route::get('/equipements',[afficheMachine::class,'equipements'])->name('equipements');

<<<<<<< Updated upstream
=======




Route::post('/accepter-demande',[demandeController::class,'accepterDemande'])->name('accepter-demande');

Route::post('/refuser-demande',[demandeController::class,'refuserDemande'])->name('refuser-demande');

Route::post('/verifier-chercheur',[chercheurController::class,'verifierChercheur'])->name('verifier-chercheur');




>>>>>>> Stashed changes
// Route de page machine-details
Route::get('/machine-details', function (){
    return view('pages.equipements.machine-details');
})->name('machine-details');

// Route de page des recherches
<<<<<<< Updated upstream
/* Route::get('/recherches', function (){
    return view('pages.recherches.recherches');
})->name('recherches'); */
Route::get('/recherches',[rechercheController::class,'index'])->name('recherches');
=======
Route::get('/recherches', function (){
    return view('pages.recherches.recherches');
})->name('recherches');
>>>>>>> Stashed changes

// Route de page a propos
Route::get('/apropos', function (){
    return view('pages.apropos.apropos');
})->name('apropos');

// Route de page a propos
Route::get('/contact', function (){
    return view('pages.contact.contact');
})->name('contact');

// Route de page media 
<<<<<<< Updated upstream

Route::get('/media',[mediaController::class,'index'])->name('media');
/*Route::get('/media', function (){
    return view('pages.media.media');
})->name('media'); */
=======
Route::get('/media', function (){
    return view('pages.media.media');
})->name('media');
>>>>>>> Stashed changes


// Route de connection 
// Route::get('/connexion', function (){
//     return view('pages.auth.connexion');
// })->name('connexion');

// Route de page media 
// Route::get('/inscription', function (){
//     return view('pages.auth.inscription');
// })->name('inscription');


<<<<<<< Updated upstream
Route::get('/UploadPage',[UpLoadController::class,'index']) ;

=======

Route::get('/UploadPage',[UpLoadController::class,'index']) ;


>>>>>>> Stashed changes
Route::post('/UploadData',[UpLoadDataController::class,'store']) ;

Route::get('/UploadData',[ShowController::class,'show']) ;




<<<<<<< Updated upstream

Route::get('/connexion',[CherAuthController::class,'connexion'])->name('connexion');
Route::get('/inscription',[CherAuthController::class,'inscription'])->name('inscription');
Route::get('/profile',[CherAuthController::class,'profile'])->name('profile');
Route::post('/inscription-chercheur',[CherAuthController::class,'inscriptionChercheur'])->name('inscription-chercheur');
Route::post('/connexion-chercheur',[CherAuthController::class,'connexionChercheur'])->name('connexion-chercheur');
Route::get('/deconnexion-chercheur',[CherAuthController::class,'deconnexion'])->name('deconnexion-chercheur');
Route::get('/emailVerification',[CherAuthController::class,'emailVerification'])->name('emailVerification');
=======
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



// Effectuer une demande 
Route::post('/demande',[CherAuthController::class,'effectuerDemande'])->name('demande');
>>>>>>> Stashed changes


Route::post('/connexion-secretaire',[secrAuthController::class,'connexionChercheur'])->name('connexion-secretaire');

<<<<<<< Updated upstream
Route::group(['prefix' => 'Admin'], function () {
=======
Route::group(['prefix' => 'admin'], function () {
>>>>>>> Stashed changes
    Voyager::routes();
});


<<<<<<< Updated upstream
=======
Route::get('/annuler',function () {
    session()->forget('demEnr');
    return back();
})->name('annuler');


>>>>>>> Stashed changes
Route::get('/secretaire', function (){
    return view('secretaire');
});

<<<<<<< Updated upstream

?>

=======
?>


>>>>>>> Stashed changes
