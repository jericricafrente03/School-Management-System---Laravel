<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Themes;

class themesController extends Controller
{
	public function themes()
	{
		$theme = Themes::paginate(6);
		 return view('backend.layouts.content.themes')->with('theme',$theme);
	}    
}
