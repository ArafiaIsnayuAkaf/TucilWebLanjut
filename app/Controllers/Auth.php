<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function index()
	{
		return view('auth/index/index');
	}

    public function login()
	{
		return view('auth/login/login');
    }
    public function register()
	{
		return view('auth/register/register');
	}
	 public function admin()
	{
		return view('auth/layout/admin');
	}
	 public function logout()
	{
		return view('auth/login');
	}
	 public function exo()
	{
		return view('auth/exo/exo');
	}
	public function about()
	{
		return view('auth/about/about');
	}
	//--------------------------------------------------------------------

}