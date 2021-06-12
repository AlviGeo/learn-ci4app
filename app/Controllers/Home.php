<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
		// echo view ('layouts/header');
		// echo view ('layouts/body');
		// echo view ('layouts/footer');
	}

	public function coba() {
		echo "$this->nama";
	}
}
