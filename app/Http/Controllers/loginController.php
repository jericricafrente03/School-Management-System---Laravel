<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;
use Validator;
use Auth;

class loginController extends Controller
{
	public function login()
    {
        return view('frontend.partial.content.login');
    }
    public function user()
    {
        return view('backend.layouts.content.user');
    }
    
    public function checklogin(Request $request)
    {
    	$this->validate($request,[
    		'email'		=> 'required|email',
    		'password'	=>	'required|alphaNum|min:3',
    	]);
    	$user_data = array(
    		'email'			=>	$request->get('email'),
    		'password'		=>	$request->get('password')		
    	);

    	if (Auth::attempt($user_data)) 
    	{
            
    		return redirect('/user/dashboard');
    	}
    	else
    	{
    		return back()->with('error','Wrong Login Details');
    	}
    }
    public function successlogin()
    {
    	return view('backend.layouts.content.dashboard');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');

    }
    public function register()
    {
        return view('frontend.partial.content.register');
    }
    public function blog()
    {
        return view('backend.layouts.content.blog');
    }


    public function store(Request $request)
    {
         $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'min:8|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:8'
        ]);
        
        $data = new User;
        $data->name = $request->username;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->save();
        
        return redirect('/login');
    }

}
