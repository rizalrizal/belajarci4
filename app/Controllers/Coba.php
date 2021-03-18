<?php

namespace App\Controllers;

class Coba extends BaseController
{

	public function index($nama = 'Tanpa Nama')
	{
		return "test ".$nama;
	}
}
