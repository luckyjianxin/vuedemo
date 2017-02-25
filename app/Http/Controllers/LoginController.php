<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
	use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $username = 'username';
    protected $redirectTo = '/dashboard';  
    protected $guard = 'web';  

    public function getLogin()
    {
    	# code...
    	if (Auth::guard('web')->check()) {
    		return redirect()->route('dashboard');
    	}
    	return view('login');
    }

    public function postLogin(Request $request) 
    {
    	$auth = Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password, 'active' => 1]);

    	if ($auth) {
    		return redirect()->route('dashboard');
    	}
    	return  redirect()->route('/');
    }

	public function getLogout() 
    {
    	Auth::guard('web')->logout();
    	
    	return  redirect()->route('/');
    }

}
