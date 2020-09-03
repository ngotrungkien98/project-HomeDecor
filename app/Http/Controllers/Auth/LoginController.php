<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $userSocial = Socialite::driver('facebook')->user();


        $findUser = User::where('email',$userSocial->email)->first();
        
        if($findUser){
            Auth::login($findUser);

            return view('/home');

        }else{
            $user = new User;
            $user->name = $userSocial->name;

            $user->email = $userSocial->email;
            
            $user->password = bcrypt(123456);

            $user->save();

            Auth::login($user);

            return view('home');
            

        }
      
    }




    //google--login
     /**
     * Redirect the user to the google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider1()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback1()
    {
       
        $userSocial = Socialite::driver('google')->user();


        $findUser = User::where('email',$userSocial->email)->first();
        
        if($findUser){
            Auth::login($findUser);

            return view('/home');

        }else{
            $user = new User;
            $user->name = $userSocial->name;

            $user->email = $userSocial->email;
            
            $user->password = bcrypt(123456);

            $user->save();

            Auth::login($user);

           return view('home');

        }
    }
}
