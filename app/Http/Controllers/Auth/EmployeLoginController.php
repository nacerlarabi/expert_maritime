<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeLoginController extends Controller
{

	public function __construct()
   {
   	$this->middleware('guest:employe');
   }


     public function showLoginForm()
    {
    	return view('auth.employe-login');
    }

    public function login(Request $request){
 
         $validator = Validator::make($request->all(),[
         'username' => 'required|min:6|alpha_dash',
         'password' => 'required|min:6'
        ]);

      if($validator->fails()){

        return redirect()->back()->withInput($request->only('username'))->withErrors($validator);
      }
      
        // Attente d'authentification 
        if(Auth::guard('employe')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)){
         // Si c'est réussi, redirection vers le dashboard
           return redirect()->intended(route('employe.home'));
        }        
         // sinon redirection vers le login
           return redirect()->back()->withInput($request->only('username','remember'));
    }
   
}
