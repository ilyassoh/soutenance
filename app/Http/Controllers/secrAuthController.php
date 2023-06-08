<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth ;
use Validator ;


class secrAuthController extends Controller
{

public function connexion(){
        return view("pages.auth.connexion");
    }
public function connexionSecretaire(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
       
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ) ;
        
        if(Auth::attempt($user_data)) 
        {
            return redirect('main/successlogin') ;
        }
        else 
        {
            return back()->with('error','Wrong login details') ;
        }



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
   
    }
}

    ?>