<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Validator;
use Session;


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

    //use LDAP branch to

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/login';
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

    public function getLogin()
    {
        return view('pages.login');
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);


        if ($validator->fails()) {
            $request->session()->flash('message', 'Your Username/Password is required!');
        return redirect()->intended($this->redirectPath());
        }
        $credentials = $request->all('username', 'password');
        if (auth()->attempt($credentials)==true) {

            return redirect('/')->with('try');
        } else {
            $request->session()->flash('message', 'Your Username/Password combination is incorrect');
            return view('pages.login');
        }

    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
