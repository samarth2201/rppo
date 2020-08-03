<?php namespace App\Controllers;

class Maincontroller extends BaseController
{
	public function index()
	{

		return view('login');
	}
	public function show($page='home')
	{

		if($page=='login')
		{
			return view('login');
		}
		else
		{

			echo view('templates/navigation');  
			echo view($page);
 

		}

	}
}
