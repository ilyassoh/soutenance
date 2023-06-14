<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chercheur;
use App\Models\Machine;
use App\Models\Reservations;
use App\Models\Demandes;
use App\Models\type_demande;
use App\Models\Structures;
use Illuminate\Support\Facades\Mail;
use PhpOffice\PhpWord\TemplateProcessor;
Use App\Mail\MailNotify;
use App\Mail\sendCodeMail;
use App\Mail\emailDemande;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Session;

// Hello World 

class CherAuthController extends Controller
{
    // Page de connexion 
    public function connexion(){
        // Session::flush();
        return view("pages.auth.connexion");
    }
    // Page d'inscription 
    public function inscription(){
        $structures = Structures::all();
        return view("pages.auth.inscription", compact('structures'));
    }
    // Enregistrer un nouveau chercheur 
    public function inscriptionChercheur(Request $request){
        // Valider les coordonnées 
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'email'=>'required|email|ends_with:uca.ac.ma|unique:chercheurs',
            'image'=>'required|mimes:png,jpeg',
            'structure'=>'required',
            'etablissement'=>'required',
            'status'=>'required',
            'encadrant'=>Rule::requiredIf(fn () => ($request->status == 'Etud_D'||$request->status == 'Etud_M'||$request->status == 'Etud_L')),
            'password'=>'required',
            'password_confirmation'=>'required|same:password',
            'biographie'=>'required'
        ]);

        // Affectation 
        $chercheur = new Chercheur();
        $code = rand(100000,999999);
        $chercheur->code_verification = $code;
        $chercheur->nom = $request->nom;
        $chercheur->prenom = $request->prenom;
        $chercheur->telephone = $request->telephone;
        $chercheur->email = $request->email;

        $image = $request->image;
        $name = time().rand(1,100).'.'.$image->extension();
        if ($image->move(public_path('images/chercheurs/'), $name)) {
            $files[] = $name;
            // $result = File::create(["fileName" => $name]);
        }
        $chercheur->image = $name;
        $chercheur->status = $request->status;
        $chercheur->structures_id = $request->structure;
        $chercheur->etablissement = strtoupper($request->etablissement);
        $chercheur->encadrant = $request->encadrant;
        // $chercheur->password = Hash::make($request->password);
        $chercheur->password = $request->password;
        $chercheur->biographie = $request->biographie;
        // Enregistrer dans la base de données 
        $res = $chercheur->save();
        if ($res){
            // Enregistrement avec succès
            session(['emailInscrit' => $request->email]);
            Mail::to($request->email)->send(new sendCodeMail($request->email,$code,$request->nom));
            return view('pages.auth.email_verification');
            // return redirect('connexion');
            //return $code;
        }
        else {
            // Problème dans l'enregistrement 
            return view("/index");
        }
    }

    public function emailValidationPage(){
        return view("pages.auth.email_verification");
    }

    public function resendCodeEmail(Request $request){
            $code = rand(100000,999999);
            $chercheur = Chercheur::where('email','=',$request->email)->where('email_verified','=',0)->first();
            if ($chercheur){
                $chercheur->code_verification = $code ;
                $chercheur->save();
                Mail::to($request->email)->send(new sendCodeMail($chercheur->email,$chercheur->code_verification,$chercheur->nom));
                return view("pages.auth.email_verification");
            }
            else {
                $this->emailValidationPage();
            }
        // }
        // else {
        //     return back();
        // }
        
    }

    public function EmailVerificationPage(){
        return view('pages.auth.email_verification');
    }

    public function validateCodeEmail(Request $request){
        $request->validate([
            'code' => 'required',
        ]);
        $chercheur = Chercheur::where('email','=',$request->email)->first();
        if ($chercheur){
            if ($chercheur->code_verification==$request->code){
                session()->forget('emailInscrit');
                if (session()->has('invalideCode')){
                    session()->forget('invalideCode');
                }
                if (session()->has('invalideEmail')){
                    session()->forget('invalideEmail');
                }
                $chercheur->email_verified = 1 ;
                $chercheur->save();
                Session::put('loginId',$chercheur->id);
                return redirect('profile');
            }
            else {
                session()->forget('emailNotVerified');
                session(['invalideCode' => 'Code entrée Invalide !']);
                return view('pages.auth.email_verification');
            }
        }
        else {
            session()->forget('emailNotVerified');
            session(['invalideEmail' => 'Email est Invalide !']);
            return view('pages.auth.email_verification');
        }
    }


    

    public function connexionChercheur(Request $request){
        $request->validate([
            'email' => 'required|email|ends_with:uca.ac.ma',
            'password' => 'required',
        ]);

        
        $chercheur = Chercheur::where('email','=',$request->email)->first();
        
        if ($chercheur){
            if ($chercheur->password==$request->password){
                // $request->session()->put('LoginId',$chercheur->id);
                if ($chercheur->email_verified){
                    Session::put('loginId',$chercheur->id);
                    return redirect('profile');
                }
                else {
                    session(['emailNotVerified' => "D'abord, Verifier Votre Email !"]);                  
                    session()->forget('invalideEmail');
                    session()->forget('invalideCode');
                    session(['emailInscrit' => $request->email ]);
                    return view('pages.auth.email_verification');
                }
            }
            else {
                return back()->with('fail','Mot de passe Entré Pas Valide !');
            }
        }  
        else {
            return back()->with('fail','Email Entré Pas Valide !');
        }
   
        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('dashboard')
        //                 ->withSuccess('Signed in');
        // }
        // return redirect("login")->withSuccess('Login details are not valid');
    }


    public function profile(){
        if (Session::has('loginId')){
            // Select Data 
            $reservations = Reservations::all();
            $machines = Machine::all();
            $data = Chercheur::where('id','=',Session::get('loginId'))->first();
            $demandes = Demandes::where('chercheurs_id','=',Session::get('loginId'))->get();
            $typesDemandes = type_demande::all();
            if ($data){
                return view('pages.auth.profile.index',compact('data','typesDemandes','machines','reservations','demandes'));
            }
            else {
                return back();  
            }
        }
        return back(); 
    }

    // Fontion pour se déconnecter 
    public function deconnexion(){
        if (Session::has('loginId')){
            header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
            session()->forget('loginId');
            return redirect()->back();
            return redirect('connexion');
        }
        else {
            return redirect('connexion');
        }
    }

    // Fonction d'édition de profile 
    function editProfile(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            // 'image'=>'required|mimes:png,jpeg',
            'structure'=>'required',
            'status'=>'required',
            'encadrant'=>Rule::requiredIf(fn () => ($request->status == 'Etud_D'||$request->status == 'Etud_M'||$request->status == 'Etud_L')),
            'password'=>'required',
            'password_confirmation'=>'required|same:password',
            'biographie'=>'required'
        ]);
        if (Session::has('loginId')){
            $chercheur = Chercheur::where('id','=',Session::get('loginId'))->first();

            $chercheur->nom = $request->nom;
            $chercheur->telephone = $request->telephone;
            $chercheur->prenom = $request->prenom;
            $chercheur->status = $request->status;
            $chercheur->biographie = $request->biographie;
    
            if ($request->image != ''){
                $image = $request->image;
                $name = time().rand(1,100).'.'.$image->extension();
                if ($image->move(public_path('images/chercheurs/'), $name)) {
                    $files[] = $name;
                    // $result = File::create(["fileName" => $name]);
                }
                $chercheur->image = $name;
            }
            
            // $chercheur->status = $request->status;é
            // $chercheur->structure = $request->structure;
                $chercheur->encadrant = $request->encadrant;
                // $chercheur->password = Hash::make($request->password);
                $chercheur->password = $request->password;
                // $chercheur->biographie = $request->biographie;
                // // Enregistrer dans la base de données 
                $chercheur->save();
            // if ($res){
                // Enregistrement avec succès
                // session(['emailInscrit' => $request->email]);
                // Mail::to($request->email)->send(new sendCodeMail($request->email,$code,$request->nom));
                return redirect('profile');
            }
            // else {
                // Problème dans l'enregistrement 
            //     return view("/index");
            // }
            else {
                return redirect('connexion');
            }
    }

    

    public function removeImageProfile(){
        if (Session::has('loginId')){
            $chercheur = Chercheur::where('id','=',Session::get('loginId'))->first();
            $originalPecture = $chercheur->image ;
            $chercheur->image = '';
            $chercheur->save();
            $imageToRemove = 'images/chercheurs/'.$originalPecture ;
            if (file_exists('images/chercheurs/'.$originalPecture)) {
                unlink('images/chercheurs/'.$originalPecture);
            }
            return redirect('profile');
        }
        else {
            return redirect('connexion');
        }
    }





    public function pageOubliMP(){
        return view('pages.auth.reset_password');
    }

    public function oublierMP(Request $request){
        $request->validate([
            'email'=>'required|email|ends_with:uca.ac.ma'
        ]);
        $chercheur = Chercheur::where('email','=',$request->email)->first();
        if ($chercheur){  
            session(['email' => $request->email]);
            $chercheur->code_verification = rand(100000,999999); ;
            $chercheur->save();
            Mail::to($request->email)->send(new sendCodeMail($chercheur->email,$chercheur->code_verification,$chercheur->nom));
            return back()
                ->with('success','Valid email');
        }
        else {
            return back()->with('fail','Mot de passe Entré Pas Valide !');
        }
    }



    public function validateCodeEmail2(Request $request){
        $request->validate([
            'code' => 'required',
        ]);
        $chercheur = Chercheur::where('email','=',$request->email)->first();
        if ($chercheur){
            if ($chercheur->code_verification==$request->code){
                $chercheur->email_verified = 1 ;
                $chercheur->save();
                session(['password' => 'xihaja']);
                return back();
            }
            else {
                session(['invalideCode' => 'Code entrée Invalide !']);
                session(['success' => '444']);
                return back();
            }
        }
        else {
            session()->forget('emailNotVerified');
            session(['invalideEmail' => 'Email est Invalide !']);
            return back();
        }
    }

    public function resetPW(Request $request){
        $request->validate([
            'password'=>'required',
            'password_confirmation'=>'required|same:password',
        ]);
        $chercheur = Chercheur::where('email','=',$request->email)->first();
        if ($chercheur){
            $chercheur->password = $request->password ;
            $chercheur->save();
            Session::flush();
            return redirect('connexion');
        }
        else {
            return redirect('connexion')->with('fail','Something Went Wrong, Please Try again');
        }
    }



    




}
