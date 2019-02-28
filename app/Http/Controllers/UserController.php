<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
	public function index() {

		return view('admin.dashboard');

	}
	//
		public function list_user() {

		return view('admin.users.list_user');

	}
}
