<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class AdminHome extends BaseController
{

	public function index($nama = 'Admin')
	{
		return "test ".$nama;
	}
}
