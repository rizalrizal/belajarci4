<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data =[
			'title' => 'Home',
			'menu' => 'home',
		];
		return view('pages/home',$data);
	}

	public function about()
	{
		$data =[
			'title' => 'About',
			'menu' => 'about', 
		];
		return view('pages/about',$data);
	}

	public function contact()
	{
		$data =[
			'title' => 'Contact Us' ,
			'menu' => 'contact',
			'alamat' => [
				[
					'tipe' => 'Rumah',
					'alamat' => 'Tempelsari'
				],
				[
					'tipe' => 'Kantor',
					'alamat' => 'Sambilegi'
				]

			]
		];
		return view('pages/contact',$data);
	}

	
}
