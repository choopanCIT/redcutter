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

	public function tablelayout($floor=1, $zone=1) {
		$db = db_connect();
		$query = $db->query("SELECT * FROM tableinfo WHERE zone=$zone and floor=$floor");
		$results = $query->getResult();
		$data = array();
		$data['tabinfo'] = $results;
		if($floor == 1) {
			switch($zone) {
				case 1: return view('floor1_zone1_view', $data);
				case 2: return view('floor1_zone2_view', $data);
				case 3: return view('floor1_zone3_view', $data);
			}
		
		} else {

		}
	
	}
}
