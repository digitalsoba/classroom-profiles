<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
    protected $redirectTo = '/home';
    protected $username = 'username';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function attemptLogin()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->all('username', 'password');
        if (auth()->attempt($credentials)==true) {
            // Successful login. Get the user instance.
            $user = auth()->user();
            $request->session()->flash('level', 'success');
            return redirect('index')->with('try');
        } else {
            $request->session()->flash('message', 'Invalid username or password');
            $request->session()->flash('level', 'danger');
            return view('pages.index');
        }
//        $credentials = $request->all('username', 'password');
//        if (auth()->attempt($credentials)) {
//            return redirect()->route('home');
//        }
//        return view('pages.index')->withErrors(['Login Failed']);

    }
}
