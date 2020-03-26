<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
           $createUser = User::firstOrcreate([
               'email' => $user->getEmail()
           ],[
              'name' => $user->getName()
           ]);

           auth()->login($createUser);

        return redirect()
            ->route('home')
            ->with('flash', "Bienvenido $createUser->name");

       } catch (\GuzzleHttp\Exception\ClientException $e) {
           dd($e);
       }
   }
}
