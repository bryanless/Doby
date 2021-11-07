<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
		$title = 'Doby';
		$pageTitle = 'Home';
		return view('home', compact('title', 'pageTitle'));
	}
}
