<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
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

    public function index()

    {
        return view('users.auth.login');
    }

    public function signin(Request $request)

    {
        //dd($request->all());
        $rules = array(
            'email' => ['required', 'email'],
            'password' => ['required'],
        );
        $fieldNames = array(
            'email'                 => 'Email',
            'password'              => 'Password',
        );
        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($fieldNames);
        if ($validator->fails()) {
            Session::flash('warning', 'Please check the form again!');
            return back()->withErrors($validator)->withInput();
        } else {
            $email = $request->email;
            $password = $request->password;
            $login = Auth::attempt(['email' => $email, 'password' => $password]);
            if ($login) {
                return redirect('dashboard');
            } else {
                Session::flash('error', 'Credentials not match!');
                return back();
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
