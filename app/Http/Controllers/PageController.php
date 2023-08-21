<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
	public function login()
	{
		return view('pages.index');
	}
}