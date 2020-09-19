<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
    public function index()
    {
        return view('users.auth.register');
    }

    public function signup(Request $request)
    {
        //dd($request->all());
        $rules = array(
            'name' => ['required', 'max:255'],
            'email' => ['required', 'unique:users,email', 'max:255', 'email'],
            'password' => ['required', 'confirmed', 'min:8', 'max:16', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!%*#?&+-]/'],
            'password_confirmation' => ['required'],
        );
        $fieldNames = array(
            'name'                  => 'Full Name',
            'email'                 => 'Email',
            'password'              => 'Password',
            'password_confirmation' => 'Confirm Password',
        );
        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($fieldNames);
        if ($validator->fails()) {
            Session::flash('warning', 'Please check the form again!');
            return back()->withErrors($validator)->withInput();
        } else {
            User::create([
                'name'            => $request->name,
                'email'                 => $request->email,
                'password'              => Hash::make($request->password),
            ]);
            Session::flash('success', 'Registered Successfully');
            return redirect('login');
            echo 'good';
        }
    }
}
