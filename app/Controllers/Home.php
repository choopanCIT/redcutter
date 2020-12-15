<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('floor_view');
	}
	
	public function floor1()
	{
		return view('floor1_view');
	}

	public function floor2()
	{
		return view('floor2_view');
	}

	//--------------------------------------------------------------------

}
