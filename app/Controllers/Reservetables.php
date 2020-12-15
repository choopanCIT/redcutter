<?php namespace App\Controllers;

class Reservetables extends BaseController
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

	public function zone1()
	{
		return view('Zone1');
	}
	public function zone2()
	{
		return view('Zone2');
	}
	public function zone3()
	{
		return view('Zone3');
	}
	public function zone4()
	{
		return view('Zone4');
	}
	public function zone5()
	{
		return view('Zone5');
	}
	public function zone6()
	{
		return view('Zone6');
	}
	public function zone7()
	{
		return view('Zone7');
	}
	public function zone8()
	{
		return view('Zone8');
	}
	public function view($page = 'home')
	{
		
	}
	//--------------------------------------------------------------------

}
