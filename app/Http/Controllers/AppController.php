<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
  
class AppController extends Controller
{
 
 
   public function dahboard(){
	   
	   

	   
	    $mUser = Auth::user();
	   
	   
	   if($mUser->account_setup == 0){
		   
	
		    return redirect()->route('accountSetup');
		   
	   }else{
		   



		   return view('dashboard')->with('user', $mUser);
	   }
  
	   
   }
   
   
   
   public function accountSetup(){
	   
	   
	   return view('account-setup');
	   
   }
   
   
   public function accountSetupPost(Request $request){
	   
	   
	   
	   
	   $mUser = Auth::user();
	   
	   
	   $user = User::find($mUser->id);
	   
	   $user->first_name = $request->first_name;
	   $user->last_name = $request->last_name;
	   $user->dob = $request->dob;
	   $user->gender = $request->gender;
	   $user->anual_income = $request->annual_income;
	   $user->occupation = $request->occupation;
	   $user->family_type = $request->family_type;
	   $user->manglik = $request->manglik;
	   $user->account_setup = 1;
	   $user->save();
	   
	   
	  return redirect()->route('dashboard');
	   
	   
   }
 
 
 
}