<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chercheur;
use App\Models\Machine;
use App\Models\Reservations;
use App\Models\Demandes;
use App\Models\typeDemande;
use Illuminate\Support\Facades\Mail;
use PhpOffice\PhpWord\TemplateProcessor;
use Dompdf\Dompdf;
Use App\Mail\MailNotify;
use App\Mail\sendCodeMail;
use App\Mail\ModifiedDocumentEmail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use GuzzleHttp\Client;
use Ilovepdf\Ilovepdf;
use Ilovepdf\Tools\Task;
use Session;


class demandeControlleur extends Controller
{
    public function effectuerDemande(Request $request){

        $request->validate([
            'idUser'=>'required',
            'idDemande'=>'required',
            'dc'=>'required',
        ]);

        switch ($request->idDemande){
            case '1':
                // Generer le fichier Word 
                $listreferences = explode(" | ", $request->listreferences); 
                $td = typeDemande::where('id','=',$request->idDemande)->first();
                $chercheur = Chercheur::where('id','=',$request->idUser)->first();

                // Generate The Word File
                $templatePath = public_path('./demandes_word/'.$td->id.'_'.$td->fichier_word);
                $templateProcessor = new TemplateProcessor($templatePath);
                $templateProcessor->setValue('nom', $chercheur->nom);
                $templateProcessor->setValue('prenom', $chercheur->prenom);
                $templateProcessor->setValue('telephone', $chercheur->telephone);
                $templateProcessor->setValue('email', $chercheur->email);
                switch($chercheur->status){
                    case 'Prof' : 
                        $templateProcessor->setValue('statut', 'Professeur');
                        break ;
                    case 'Etud_L' : 
                        $templateProcessor->setValue('statut', 'Etudiant Liscence');
                        break ;
                    case 'Etud_M' : 
                        $templateProcessor->setValue('statut', 'Etudiant Master');
                        break ;
                    case 'Etud_D' : 
                        $templateProcessor->setValue('statut', 'Etudiant Doctorat');
                        break ;
                    default : 
                        $templateProcessor->setValue('statut', '');
                        break ;
                }
                $templateProcessor->setValue('datechoix', $request->dc);
                $templateProcessor->setValue('structure', $chercheur->structure);
                $templateProcessor->setValue('etablissement', $chercheur->etablissement);
                if ($request->solsEtSediments != ""){
                    $templateProcessor->setValue('solsEtSediments', 'Sols et Sédiments, ');
                }
                if ($request->Polymeres != ""){
                    $templateProcessor->setValue('Polymeres', 'Polymerès, ');
                }
                else {
                    $templateProcessor->setValue('Polymeres', '');
                }
                if ($request->Plantes != ""){
                    $templateProcessor->setValue('Plantes', 'Plantes, ');
                }
                else {
                    $templateProcessor->setValue('Plantes', '');
                }
                if ($request->produitsPharmaceutiques != ""){
                    $templateProcessor->setValue('produitsPharmaceutiques', 'Produits Pharmaceutiques, ');
                }
                else {
                    $templateProcessor->setValue('produitsPharmaceutiques', '');
                }
                if ($request->produitsCosmetiques != ""){
                    $templateProcessor->setValue('produitsCosmetiques', 'Produits Cosmétiques, ');
                }
                else {
                    $templateProcessor->setValue('produitsCosmetiques', '');
                }
                if ($request->produitsPetrochimiques != ""){
                    $templateProcessor->setValue('produitsPetrochimiques', 'Produits Petrochimiques, ');
                }
                else {
                    $templateProcessor->setValue('produitsPetrochimiques', '');
                }
                if ($request->collesVernir != ""){
                    $templateProcessor->setValue('collesVernir', 'Colles,Vernir, ');
                }
                else {
                    $templateProcessor->setValue('collesVernir', '');
                }
                if ($request->matriceAutre != ""){
                    $templateProcessor->setValue('matriceAutre', $request->matriceAutre);
                }
                else {
                    $templateProcessor->setValue('matriceAutre', '');
                }
                if ($request->elementsAdoser != ""){
                    $templateProcessor->setValue('elementsAdoser', $request->elementsAdoser);
                }
                else {
                    $templateProcessor->setValue('elementsAdoser', '');
                }
                if ($request->toxicite != ""){
                    $templateProcessor->setValue('toxicite', $request->tocicite);
                }
                else {
                    $templateProcessor->setValue('toxicite', '');
                }
                if ($request->nbrEchant != ""){
                    $templateProcessor->setValue('nbrEchant', $request->nbrEchant);
                }
                else {
                    $templateProcessor->setValue('nbrEchant', '');
                }
                if ($request->nbrRep != ""){
                    $templateProcessor->setValue('nbrRep', $request->nbrRep);
                }
                else {
                    $templateProcessor->setValue('nbrRep', '');
                }
                if ($request->typeanalyse != ""){
                    $templateProcessor->setValue('typeanalyse', $request->typeanalyse);
                }
                else {
                    $templateProcessor->setValue('typeanalyse', '');
                }
                if ($request->cdstockage != ""){
                    $templateProcessor->setValue('cdStockage', $request->cdstockage);
                }
                else {
                    $templateProcessor->setValue('cdStockage', '');
                }
                if ($request->configuration != ""){
                    if ($request->configuration=='o'){
                        $templateProcessor->setValue('configuration', 'Configuration Oxygène');
                    }
                    else {
                        $templateProcessor->setValue('configuration', 'Configuration CHNS');
                    }
                }
                else {
                    $templateProcessor->setValue('configuration', '');
                }
                for ($i = 1; $i <= 10; $i++) {
                    if (isset($listreferences[$i-1])) {
                        $templateProcessor->setValue('ref'.$i , $listreferences[$i-1]);
                    } else {
                        $templateProcessor->setValue('ref'.$i , "");
                    }
                }

                // Stocker Demande
                $demande = new Demandes();
                $demande->chercheurs_id = $request->idUser ;
                $demande->type_demandes_id = $request->idDemande ;
                $demande->statu = 'NC' ;
                $demande->date_choix = $request->dc ;
                $demande->rapport = 'Pas de Rapport' ;
                $demande->users_id = '1' ;
                $demande->fword = '';
                $demande->save();
                $demande->fword = $demande->id.'_'.$td->fichier_word ;
                $demande->save();
                $reservation = new Reservations();
                $reservation->datechoix = $request->dc ;
                $reservation->id_machine = $td->machines_id ;
                $reservation->save();

                // Envoyer email 
                $modifiedPath = public_path('./demandes_effectuees/'.$demande->id.'_'.$td->fichier_word);
                $templateProcessor->saveAs($modifiedPath);
                // Mail::to('recipient@example.com')->send(new ModifiedDocumentEmail($chercheur->id.''.$td->fichier_word));
                session(['demEnr' => 'Demande Effectué Avec Succès !']); 
                break ;
            // *******************************************************************
            case '2':
                // Generer le fichier Word 
                $listreferences = explode(" | ", $request->listreferences); 
                $td = typeDemande::where('id','=',$request->idDemande)->first();
                $chercheur = Chercheur::where('id','=',$request->idUser)->first();

                // Generate The Word File
                $templatePath = public_path('./demandes_word/'.$td->id.'_'.$td->fichier_word);
                $templateProcessor = new TemplateProcessor($templatePath);
                $templateProcessor->setValue('nom', $chercheur->nom);
                $templateProcessor->setValue('prenom', $chercheur->prenom);
                $templateProcessor->setValue('telephone', $chercheur->telephone);
                $templateProcessor->setValue('email', $chercheur->email);
                switch($chercheur->status){
                    case 'Prof' : 
                        $templateProcessor->setValue('statut', 'Professeur');
                        break ;
                    case 'Etud_L' : 
                        $templateProcessor->setValue('statut', 'Etudiant Liscence');
                        break ;
                    case 'Etud_M' : 
                        $templateProcessor->setValue('statut', 'Etudiant Master');
                        break ;
                    case 'Etud_D' : 
                        $templateProcessor->setValue('statut', 'Etudiant Doctorat');
                        break ;
                    default : 
                        $templateProcessor->setValue('statut', '');
                        break ;
                }
                $templateProcessor->setValue('datechoix', $request->dc);
                $templateProcessor->setValue('structure', $chercheur->structure);
                $templateProcessor->setValue('etablissement', $chercheur->etablissement);
                $templateProcessor->setValue('encadrant', $chercheur->encadrant);
                if ($request->nbrEchant != ""){
                    $templateProcessor->setValue('nbrEchant', $request->nbrEchant);
                }
                else {
                    $templateProcessor->setValue('nbrEchant', '');
                }
                if ($request->nbrRep != ""){
                    $templateProcessor->setValue('nbrRep', $request->nbrRep.' ,');
                }
                else {
                    $templateProcessor->setValue('nbrRep', $request->nbrRep);
                }
                if ($request->argile != ""){
                    $templateProcessor->setValue('argile', $request->argile);
                }
                else {
                    $templateProcessor->setValue('argile', '');
                }
                if ($request->phosphate != ""){
                    $templateProcessor->setValue('phosphate', $request->phosphate);
                }
                else {
                    $templateProcessor->setValue('phosphate', '');
                }
                if ($request->oxyde != ""){
                    $templateProcessor->setValue('oxyde', $request->oxyde);
                }
                else {
                    $templateProcessor->setValue('oxyde', '');
                }
                if ($request->silicate != ""){
                    $templateProcessor->setValue('silicate', $request->silicate);
                }
                else {
                    $templateProcessor->setValue('silicate', '');
                }
                if ($request->cellulose != ""){
                    $templateProcessor->setValue('cellulose', $request->cellulose);
                }
                else {
                    $templateProcessor->setValue('cellulose', '');
                }
                if ($request->polymere != ""){
                    $templateProcessor->setValue('polymere', $request->polymere);
                }
                else {
                    $templateProcessor->setValue('polymere', '');
                }
                if ($request->autrene != ""){
                    $templateProcessor->setValue('autrene', $request->autrene);
                }
                else {
                    $templateProcessor->setValue('autrene', '');
                }
                if ($request->typeanalyse != ""){
                    $templateProcessor->setValue('typeanalyse', $request->typeanalyse);
                }
                else {
                    $templateProcessor->setValue('typeanalyse', '');
                }
                if ($request->vitessechauff != ""){
                    $templateProcessor->setValue('vitessechauff', $request->vitessechauff);
                }
                else {
                    $templateProcessor->setValue('vitessechauff', '');
                }
                if ($request->toxicite != ""){
                    $templateProcessor->setValue('toxicite', $request->tocicite);
                }
                else {
                    $templateProcessor->setValue('toxicite', '');
                }
                if ($request->autrevitessechauff != ""){
                    $templateProcessor->setValue('autrevitessechauff', $request->autrevitessechauff);
                }
                else {
                    $templateProcessor->setValue('autrevitessechauff', '');
                }
                if ($request->tfe != ""){
                    $templateProcessor->setValue('tfe', $request->tfe);
                }
                else {
                    $templateProcessor->setValue('tfe', '');
                }
                if ($request->dta != ""){
                    $templateProcessor->setValue('dta', $request->dta);
                }
                else {
                    $templateProcessor->setValue('dta', '');
                }
                if ($request->gazdeg != ""){
                    $templateProcessor->setValue('gazdeg', $request->gazdeg);
                }
                else {
                    $templateProcessor->setValue('gazdeg', '');
                }
                if ($request->cdstockage != ""){
                    $templateProcessor->setValue('cdStockage', $request->cdstockage);
                }
                else {
                    $templateProcessor->setValue('cdStockage', '');
                }
                if ($request->rrEchant != ""){
                    $templateProcessor->setValue('rrEchant', $request->rrEchant);
                }
                else {
                    $templateProcessor->setValue('rrEchant', '');
                }
                for ($i = 1; $i <= 10; $i++) {
                    if (isset($listreferences[$i-1])) {
                        $templateProcessor->setValue('ref'.$i , $listreferences[$i-1]);
                    } else {
                        $templateProcessor->setValue('ref'.$i , "");
                    }
                }

                // Stocker Demande
                $demande = new Demandes();
                $demande->chercheurs_id = $request->idUser ;
                $demande->type_demandes_id = $request->idDemande ;
                $demande->statu = 'NC' ;
                $demande->date_choix = $request->dc ;
                $demande->rapport = 'Pas de Rapport' ;
                $demande->users_id = '1' ;
                $res = $demande->save();
                $demande->fword = $demande->id.'_'.$td->fichier_word ;
                $res = $demande->save();
                $reservation = new Reservations();
                $reservation->datechoix = $request->dc ;
                $reservation->id_machine = $td->machines_id ;
                $reservation->save();

                // Envoyer email 
                $modifiedPath = public_path('./demandes_effectuees/'.$demande->id.'_'.$td->fichier_word);
                $templateProcessor->saveAs($modifiedPath);
                // Mail::to('recipient@example.com')->send(new ModifiedDocumentEmail($chercheur->id.''.$td->fichier_word));
                session(['demEnr' => 'Demande Effectué Avec Succès !']); 
                break ;
            
            // ****************************************************************************************
            case '3':
                // Generer le fichier Word 
                $listreferences = explode(" | ", $request->listreferences); 
                $td = typeDemande::where('id','=',$request->idDemande)->first();
                $chercheur = Chercheur::where('id','=',$request->idUser)->first();

                // Generate The Word File
                $templatePath = public_path('./demandes_word/'.$td->id.'_'.$td->fichier_word);
                $templateProcessor = new TemplateProcessor($templatePath);
                $templateProcessor->setValue('nom', $chercheur->nom);
                $templateProcessor->setValue('prenom', $chercheur->prenom);
                $templateProcessor->setValue('telephone', $chercheur->telephone);
                $templateProcessor->setValue('email', $chercheur->email);
                switch($chercheur->status){
                    case 'Prof' : 
                        $templateProcessor->setValue('statut', 'Professeur');
                        break ;
                    case 'Etud_L' : 
                        $templateProcessor->setValue('statut', 'Etudiant Liscence');
                        break ;
                    case 'Etud_M' : 
                        $templateProcessor->setValue('statut', 'Etudiant Master');
                        break ;
                    case 'Etud_D' : 
                        $templateProcessor->setValue('statut', 'Etudiant Doctorat');
                        break ;
                    default : 
                        $templateProcessor->setValue('statut', '');
                        break ;
                }
                $templateProcessor->setValue('datechoix', $request->dc);
                $templateProcessor->setValue('structure', $chercheur->structure);
                $templateProcessor->setValue('etablissement', $chercheur->etablissement);
                $templateProcessor->setValue('encadrant', $chercheur->encadrant);
                if ($request->nbrEchant != ""){
                    $templateProcessor->setValue('nbrEchant', $request->nbrEchant);
                }
                else {
                    $templateProcessor->setValue('nbrEchant', '');
                }
                if ($request->nbrRep != ""){
                    $templateProcessor->setValue('nbrRep', $request->nbrRep.' ,');
                }
                else {
                    $templateProcessor->setValue('nbrRep', $request->nbrRep);
                }
                if ($request->argile != ""){
                    $templateProcessor->setValue('argile', $request->argile);
                }
                else {
                    $templateProcessor->setValue('argile', '');
                }
                if ($request->phosphate != ""){
                    $templateProcessor->setValue('phosphate', $request->phosphate);
                }
                else {
                    $templateProcessor->setValue('phosphate', '');
                }
                if ($request->oxyde != ""){
                    $templateProcessor->setValue('oxyde', $request->oxyde);
                }
                else {
                    $templateProcessor->setValue('oxyde', '');
                }
                if ($request->silicate != ""){
                    $templateProcessor->setValue('silicate', $request->silicate);
                }
                else {
                    $templateProcessor->setValue('silicate', '');
                }
                if ($request->cellulose != ""){
                    $templateProcessor->setValue('cellulose', $request->cellulose);
                }
                else {
                    $templateProcessor->setValue('cellulose', '');
                }
                if ($request->polymere != ""){
                    $templateProcessor->setValue('polymere', $request->polymere);
                }
                else {
                    $templateProcessor->setValue('polymere', '');
                }
                if ($request->autrene != ""){
                    $templateProcessor->setValue('autrene', $request->autrene);
                }
                else {
                    $templateProcessor->setValue('autrene', '');
                }
                if ($request->typeanalyse != ""){
                    $templateProcessor->setValue('typeanalyse', $request->typeanalyse);
                }
                else {
                    $templateProcessor->setValue('typeanalyse', '');
                }
                if ($request->vitessechauff != ""){
                    $templateProcessor->setValue('vitessechauff', $request->vitessechauff);
                }
                else {
                    $templateProcessor->setValue('vitessechauff', '');
                }
                if ($request->toxicite != ""){
                    $templateProcessor->setValue('toxicite', $request->tocicite);
                }
                else {
                    $templateProcessor->setValue('toxicite', '');
                }
                if ($request->autrevitessechauff != ""){
                    $templateProcessor->setValue('autrevitessechauff', $request->autrevitessechauff);
                }
                else {
                    $templateProcessor->setValue('autrevitessechauff', '');
                }
                if ($request->tfe != ""){
                    $templateProcessor->setValue('tfe', $request->tfe);
                }
                else {
                    $templateProcessor->setValue('tfe', '');
                }
                if ($request->dta != ""){
                    $templateProcessor->setValue('dta', $request->dta);
                }
                else {
                    $templateProcessor->setValue('dta', '');
                }
                if ($request->gazdeg != ""){
                    $templateProcessor->setValue('gazdeg', $request->gazdeg);
                }
                else {
                    $templateProcessor->setValue('gazdeg', '');
                }
                if ($request->cdstockage != ""){
                    $templateProcessor->setValue('cdStockage', $request->cdstockage);
                }
                else {
                    $templateProcessor->setValue('cdStockage', '');
                }
                if ($request->rrEchant != ""){
                    $templateProcessor->setValue('rrEchant', $request->rrEchant);
                }
                else {
                    $templateProcessor->setValue('rrEchant', '');
                }
                for ($i = 1; $i <= 10; $i++) {
                    if (isset($listreferences[$i-1])) {
                        $templateProcessor->setValue('ref'.$i , $listreferences[$i-1]);
                    } else {
                        $templateProcessor->setValue('ref'.$i , "");
                    }
                }

                // Stocker Demande
                $demande = new Demandes();
                $demande->id_chercheur = $request->idUser ;
                $demande->id_type_demande = $request->idDemande ;
                $demande->statu = 'NC' ;
                $demande->date_choix = $request->dc ;
                $demande->rapport = 'Pas de Rapport' ;
                $demande->id_secretaire = '1' ;
                $demande->doc_word = '' ;
                $res = $demande->save();
                $demande->doc_word = $demande->id.'_'.$td->fichier_word ;
                $reservation = new Reservations();
                $reservation->datechoix = $request->dc ;
                $reservation->id_machine = $td->id_machine ;
                $reservation->save();

                // Envoyer email 
                $modifiedPath = public_path('./demandes_effectuees/'.$demande->id.'_'.$td->fichier_word);
                $templateProcessor->saveAs($modifiedPath);
                // Mail::to('recipient@example.com')->send(new ModifiedDocumentEmail($chercheur->id.''.$td->fichier_word));
                session(['demEnr' => 'Demande Effectué Avec Succès !']); 
                break ;
            // *******************************************************************************
            case '4':
                // Generer le fichier Word 
                $listreferences = explode(" | ", $request->listreferences); 
                $td = typeDemande::where('id','=',$request->idDemande)->first();
                $chercheur = Chercheur::where('id','=',$request->idUser)->first();

                // Generate The Word File
                $templatePath = public_path('./demandes_word/'.$td->id.'_'.$td->fichier_word);
                $templateProcessor = new TemplateProcessor($templatePath);
                $templateProcessor->setValue('nom', $chercheur->nom);
                $templateProcessor->setValue('prenom', $chercheur->prenom);
                $templateProcessor->setValue('telephone', $chercheur->telephone);
                $templateProcessor->setValue('email', $chercheur->email);
                switch($chercheur->status){
                    case 'Prof' : 
                        $templateProcessor->setValue('statut', 'Professeur');
                        break ;
                    case 'Etud_L' : 
                        $templateProcessor->setValue('statut', 'Etudiant Liscence');
                        break ;
                    case 'Etud_M' : 
                        $templateProcessor->setValue('statut', 'Etudiant Master');
                        break ;
                    case 'Etud_D' : 
                        $templateProcessor->setValue('statut', 'Etudiant Doctorat');
                        break ;
                    default : 
                        $templateProcessor->setValue('statut', '');
                        break ;
                }
                $templateProcessor->setValue('datechoix', $request->dc);
                $templateProcessor->setValue('structure', $chercheur->structure);
                $templateProcessor->setValue('etablissement', $chercheur->etablissement);
                $templateProcessor->setValue('encadrant', $chercheur->encadrant);
                if ($request->nbrEchant != ""){
                    $templateProcessor->setValue('nbrEchant', $request->nbrEchant);
                }
                else {
                    $templateProcessor->setValue('nbrEchant', '');
                }
                if ($request->nbrRep != ""){
                    $templateProcessor->setValue('nbrRep', $request->nbrRep.' ,');
                }
                else {
                    $templateProcessor->setValue('nbrRep', $request->nbrRep);
                }
                if ($request->natureEchant != ""){
                    $templateProcessor->setValue('natureEchant', $request->natureEchant);
                }
                else {
                    $templateProcessor->setValue('natureEchant', '');
                }
                if ($request->etat != ""){
                    $templateProcessor->setValue('etat', $request->etat);
                }
                else {
                    $templateProcessor->setValue('etat', '');
                }
                if ($request->toxicite != ""){
                    $templateProcessor->setValue('toxicite', $request->tocicite);
                }
                else {
                    $templateProcessor->setValue('toxicite', '');
                }
                if ($request->ca != ""){
                    $templateProcessor->setValue('ca', $request->ca);
                }
                else {
                    $templateProcessor->setValue('ca', '');
                }
                if ($request->autreca != ""){
                    $templateProcessor->setValue('autreca', $request->autreca);
                }
                else {
                    $templateProcessor->setValue('autreca', '');
                }
                if ($request->protocoleanalyse != ""){
                    $templateProcessor->setValue('protocoleanalyse', $request->protocoleanalyse);
                }
                else {
                    $templateProcessor->setValue('protocoleanalyse', '');
                }
                if ($request->cdstockage != ""){
                    $templateProcessor->setValue('cdStockage', $request->cdstockage);
                }
                else {
                    $templateProcessor->setValue('cdStockage', '');
                }
                if ($request->rrEchant != ""){
                    $templateProcessor->setValue('rrEchant', $request->rrEchant);
                }
                else {
                    $templateProcessor->setValue('rrEchant', '');
                }
                for ($i = 1; $i <= 10; $i++) {
                    if (isset($listreferences[$i-1])) {
                        $templateProcessor->setValue('ref'.$i , $listreferences[$i-1]);
                    } else {
                        $templateProcessor->setValue('ref'.$i , "");
                    }
                }

                // Stocker Demande
                $demande = new Demandes();
                $demande->id_chercheur = $request->idUser ;
                $demande->id_type_demande = $request->idDemande ;
                $demande->statu = 'NC' ;
                $demande->date_choix = $request->dc ;
                $demande->rapport = 'Pas de Rapport' ;
                $demande->id_secretaire = '1' ;
                $demande->doc_word = '' ;
                $res = $demande->save();
                $demande->doc_word = $demande->id.'_'.$td->fichier_word ;
                $res = $demande->save();
                $reservation = new Reservations();
                $reservation->datechoix = $request->dc ;
                $reservation->id_machine = $td->id_machine ;
                $reservation->save();

                // Envoyer email 
                $modifiedPath = public_path('./demandes_effectuees/'.$demande->id.'_'.$td->fichier_word);
                $templateProcessor->saveAs($modifiedPath);
                // Mail::to('recipient@example.com')->send(new ModifiedDocumentEmail($chercheur->id.''.$td->fichier_word));
                session(['demEnr' => 'Demande Effectué Avec Succès !']); 
                break ;

            default : 
                return back();
                break;
        }
        return redirect('profile');
    }

}



// $demande = new Demandes();
// $demande->id_chercheur = $request->idUser ;
// $demande->id_type_demande = $request->idDemande ;
// $demande->statu = 'NC' ;
// $demande->date_choix = $request->dc ;
// $demande->nbr_echant = $request->nbrEchan ;
// $demande->nbr_rep= $request->nbrRep ;
// $demande->nature_echant = $request->natureEcha ;
// $demande->toxicite = $request->toxicite ;
// $demande->nbr_demande = $demande->nbr_demande + 1 ;
// $demande->nbr_realisation = 0 ;
// $demande->rapport = 'Pas de Rapport' ;
// $demande->id_secretaire = '1' ;
// $res = $demande->save();

// $td = typeDemande::where('id','=',$request->idDemande)->first();
// $chercheur = Chercheur::where('id','=',$request->idUser)->first();
// echo $td->id_machine ;
// $reservation = new Reservations();
// $reservation->datechoix = $request->dc ;
// $reservation->id_machine = $td->id_machine ;
// $reservation->save();


// // $template = new TemplateProcessor(storage_path('app/'.$td->fichier_word));
// // $template->setValue('nom', $chercheur->nom);
// // $template->setValue('prenom', $chercheur->prenom);
// // $template->setValue('email', $chercheur->email);
// // $template->setValue('datechoix', $request->dc);
// // $template->setValue('telephone', $chercheur->telephone);

// Mail::to($chercheur->email)->send(new emailDemande($chercheur->email,$td->label,$chercheur->nom));
// session(['demEnr' => 'Demande Effectué Avec Succès !']);
// return redirect('profile');
