<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Business;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function __construct()
        {
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:business')->except('logout');
            $this->middleware('guest:user')->except('logout');
        }

    public function index()
    {
        return view('auth.login');
    }  
        public function showBusinessLoginForm()
    {
        return view('auth.login', ['url' => 'business']);
    }

    public function BusinessLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('business')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/business');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
        public function showUserLoginForm()
    {
        return view('auth.login', ['url' => 'user']);
    }

    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/user');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showBusinessRegisterForm()
    {
        return view('auth.register', ['url' => 'business']);
    }

    public function showUserRegisterForm()
    {
        return view('auth.register', ['url' => 'user']);
    }
    protected function createBusiness(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $business = Business::create([
            'first_name' => $request['name'],
            'last_name' => $request['last_name'],
            'city' => $request['city'],
            'phone_number' => $request['phone_number'],
            'street' => $request['street'],
            'postal_code' => $request['postal_code'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/business');
    }
    protected function createUser(Request $request)
    {
                $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/user');
    }









    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('auth.registration');
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}