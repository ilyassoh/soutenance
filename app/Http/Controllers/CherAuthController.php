<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chercheur;
use Mail;
Use App\Mail\MailNotify;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Session;

class CherAuthController extends Controller
{

    // public function codeVerificationEmail(){
    //     $code = rand(100000,999999);
    //     return $code;
    // }

    // Page de connexion 
    public function connexion(){
        return view("pages.auth.connexion");
    }
    // Page d'inscription 
    public function inscription(){
        return view("pages.auth.inscription");
    }
    //Profile de chercheur  
    
    //Profile de chercheur 
    public function emailVerification(){
        return view("pages.auth.email_verification");
    }


    public function codeEmail(){
        $data = [
            'subject'=>'CAC : Code de vérification de Email !',
            'body'=>'Voici Le code de verification de votre email '.$this->code_verification_email
        ];
        try {
            Mail::to('azawbadr@gmail.com')->send(new MailNotify($data));
            return response()->json(['Great, Check your Mail box']);
        } catch (\Exception $th) {
            return response()->json(['Sorry, something went Wrong']);
        }
    }



    // Enregistrer un nouveau chercheur 
    public function inscriptionChercheur(Request $request){
        // Valider les coordonnées 
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'email'=>'required|email|ends_with:uca.ac.ma|unique:chercheurs',
            'image'=>'mimes:png,jpeg',
            'structure'=>'required',
            'status'=>'required',
            'encadrant'=>Rule::requiredIf(fn () => ($request->status == 'Etud_D'||$request->status == 'Etud_M'||$request->status == 'Etud_L')),
            'password'=>'required',
            'password_confirmation'=>'required|same:password',
            'biographie'=>'required'
        ]);
        // Affectation 
        $chercheur = new Chercheur();
        $chercheur->code_verification = rand(100000,999999);
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
        $chercheur->structure = $request->structure;
        $chercheur->encadrant = $request->encadrant;
        // $chercheur->password = Hash::make($request->password);
        $chercheur->password = $request->password;
        $chercheur->biographie = $request->biographie;
        // Enregistrer dans la base de données 
        $res = $chercheur->save();
        if ($res){
            // Enregistrement avec succès 
            return view("/pages.auth.connexion");
            $this->codeEmail();
        }
        else {
            // Problème dans l'enregistrement 
            return view("/index");
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
                Session::put('loginId',$chercheur->id);
                return redirect('profile');
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
            $data = Chercheur::where('id','=',Session::get('loginId'))->first();
            return view('pages.auth.chercheur',compact('data'));
        }
        return back(); 
    }

    // Fontion pour se déconnecter 
    public function deconnexion(){
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect('connexion');
        }
    }
}
