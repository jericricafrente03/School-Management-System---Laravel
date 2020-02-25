<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Contact;
use DB;

class contactuspage extends Controller
{
    public function index()
    {
        if (session('success_message')) 
        {
         Alert::success('Success!',session('success_message'));   
        }
    	return view('welcome');
    }
    public function insert(Request $request)
    {

    	 $contact = new Contact([
            'fullname' => $request->get('username'),
            'email' => $request->get('email'),
            'number' => $request->get('number'),
            'message' => $request->get('message'),
        ]);
        $contact->save();
        return redirect('/')->withSuccessMessage('Successfully send your message');
    }
        	

}
