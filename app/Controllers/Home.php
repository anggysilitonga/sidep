<?php

namespace App\Controllers;
use App\Models\M_user;


class Home extends BaseController
{
	public function index()
	{
		$session = session();
		$arr = [
			'username' => 'visitor',
			'type' => 'visitor'
		];
		$session->set($arr);
		return view('dashboardView');
	}
	public function loginPage()
	{
		return view('loginView');

	}
	public function login()
	{
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		$user = new M_user();
		$cek_login = $user->cek_login($username, $password)->getResultArray();

		if (!empty($cek_login)) {
			return redirect()->to('/home/dashboard');
		} else {
			echo "login tak berhasil";
		}
	}

	public function dashboard()
	{	
		$session = session();
		$arr = [
			'username' => 'anggi',
			'name' => 'Anggi Silitonga',
			'type' => 'admin'
		];
		// $_SESSION['username']  = 'Anggi Silitonga';
		// $_SESSION['type']     = 'admin';
		$session->set($arr);
		return view ('dashboardView');

	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		return view('loginView');
	}

}
