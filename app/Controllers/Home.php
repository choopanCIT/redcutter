<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$db = db_connect();
		$query = $db->query("SELECT floor, count(*) as freetable FROM tableinfo WHERE status = 0 or (status = 1 and DATEDIFF(NOW(), resvtime) > 0) GROUP BY floor");
		$results = $query->getResult();
		
		$data = array();
		foreach ($results as $row) {
			if ($row->floor == 1) {
				$data['floor1_freetable'] = $row->freetable;
			} else {
				$data['floor2_freetable'] = $row->freetable;
			}
		}
		
		return view('floor_view', $data);
	}

	public function floor1()
	{
		$db = db_connect();
		$query = $db->query("SELECT zone, count(*) as freetable FROM tableinfo WHERE floor = 1 and (status = 0 or (status = 1 and DATEDIFF(NOW(), resvtime) > 0)) GROUP BY zone");
		$results = $query->getResult();
		
		$data = array();
		foreach ($results as $row) {
			switch($row->zone) {
				case 1: $data['zone1_freetable'] = $row->freetable; break;
				case 2: $data['zone2_freetable'] = $row->freetable; break;
				case 3: $data['zone3_freetable'] = $row->freetable; break;
				case 4: $data['zone4_freetable'] = $row->freetable; break;
				case 5: $data['zone5_freetable'] = $row->freetable; break;
				case 6: $data['zone6_freetable'] = $row->freetable; break;
				case 7: $data['zone7_freetable'] = $row->freetable; break;
				case 8: $data['zone8_freetable'] = $row->freetable; break;
			}
		}

		return view('floor1_view', $data);
	}

	public function floor2()
	{
		$db = db_connect();
		$query = $db->query("SELECT zone, count(*) as freetable FROM tableinfo WHERE floor = 2 and (status = 0 or (status = 1 and DATEDIFF(NOW(), resvtime) > 0)) GROUP BY zone");
		$results = $query->getResult();
		
		$data = array();
		foreach ($results as $row) {
			switch($row->zone) {
				case 1: $data['zone1_freetable'] = $row->freetable; break;
				case 2: $data['zone2_freetable'] = $row->freetable; break;
				case 3: $data['zone3_freetable'] = $row->freetable; break;
				case 4: $data['zone4_freetable'] = $row->freetable; break;
				case 5: $data['zone5_freetable'] = $row->freetable; break;
				case 6: $data['zone6_freetable'] = $row->freetable; break;
			}
		}
		return view('floor2_view', $data);
	}

	public function tablelayout($floor=1, $zone=1) {
		$db = db_connect();
		$query = $db->query("SELECT *, DATEDIFF(NOW(), resvtime) as numday_pass FROM tableinfo WHERE zone=$zone and floor=$floor");
		$results = $query->getResult();
		$data = array();
		$data['tabinfo'] = $results;
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

	public function checkout(){
		$request = service('request');
		$seats = $request->getVar('seats');
		$name = $request->getVar('name');
		$groupname = $request->getVar('groupname');
		$phone = $request->getVar('phone');
		$email = $request->getVar('email');

	}
}
