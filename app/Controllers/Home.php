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
		$data['age'] = 100;
		if($floor == 1) {
			switch($zone) {
				case 1: return view('floor1_zone1_view', $data);
				case 2: return view('floor1_zone2_view', $data);
				case 3: return view('floor1_zone3_view', $data);
				case 4: return view('floor1_zone4_view', $data);
				case 5: return view('floor1_zone5_view', $data);
				case 6: return view('floor1_zone6_view', $data);
				case 7: return view('floor1_zone7_view', $data);
				case 8: return view('floor1_zone8_view', $data);
			}
		
		} else {
			switch($zone) {
				case 1: return view('floor2_zone1_view', $data);
				case 2: return view('floor2_zone2_view', $data);
				case 3: return view('floor2_zone3_view', $data);
				case 4: return view('floor2_zone4_view', $data);
				case 5: return view('floor2_zone5_view', $data);
				case 6: return view('floor2_zone6_view', $data);
			}  
		}
	
	}

	public function tablelist() {
		$db = db_connect();
		$query = $db->query("SELECT * FROM tableinfo WHERE status=2");
		$results = $query->getResult();
		$data = array();
		$data['tabinfo'] = $results;
		return view('tablelist_view', $data);
	}
}
