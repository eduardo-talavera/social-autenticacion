<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
// use Illuminate\Support\Facades\DB;
use Socialite;

class SocialAuthController extends Controller
{
   public function redirectToProvider($provider)
   {
        return Socialite::driver($provider)->redirect();
   } 

   public function handleProviderCallback($provider)
   {
       try {

           
            $user = Socialite::driver($provider)->user();
           
                $userName = $user->getName();
                $userEmail = $user->getEmail();

            $userQ = User::where('email', $user->getEmail())->first();

    
         if ($userQ) {
                auth()->login($userQ);

                return redirect()
                    ->route('home')
                    ->with('flash', "Bienvenido $userQ->name");
         } else{
            return redirect()
                ->route('register',compact('userName','userEmail'))
                ->with('flash', 'El usuario '.$user->getEmail().' aun no ha sido registrado');
         }


       } catch (\GuzzleHttp\Exception\ClientException $e) {
           dd($e);
       }
   }
}
