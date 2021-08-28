<?php

namespace App\Controllers;
use App\Models\M_user;


class Home extends BaseController
{
	public function index()
	{
		return view('dashboardView');
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
		return view ('dashboardView');

	}

}
