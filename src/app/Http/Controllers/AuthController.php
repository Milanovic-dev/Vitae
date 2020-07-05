<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthorizesRequests;

    protected $redirectTo = '/';

    public function redirectToProvider($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider){
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUserFromProvider($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }

    public function findOrCreateUserFromProvider($user, $provider){
        $authUser = User::where('provider_id', $user->id)->first();
        
        if($authUser){
            return $authUser;
        }

        return User::create([
            'id' => $user->id,
            'name'  => $user->name,
            'email' => $user->email,
            'provider' => strtoupper($provider),
            'provider_id' => $user->id
        ]);
    }

    public function attemptRegister(Request $request) {
        
        $this->validate($request, [
            'name' => 'required|name',
            'email'     =>  'required|email',
            'password'  =>  'required|alphaNum|min:6',
        ]);
        
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        
        $user->save();

        return redirect('/auth/login')->with('registerSuccess', 'success');
    }

    public function attemptLogin(Request $request) {

        $credentials = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')  
        );

        if(Auth::attempt($credentials)){
            return redirect('/dashboard');
        }
    
        return back()->with('error', 'Wrong Credentials');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
