<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$db = db_connect();
		$query = $db->query("SELECT floor, count(*) as freetable FROM tableinfo WHERE status = 0 or (status = 1 and TIMESTAMPDIFF(minute, resvtime, NOW()) > 1440) GROUP BY floor");
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
		$query = $db->query("SELECT zone, count(*) as freetable FROM tableinfo WHERE floor = 1 and (status = 0 or (status = 1 and TIMESTAMPDIFF(minute, resvtime, NOW()) > 1440)) GROUP BY zone");
		$results = $query->getResult();
		$data = array();
		
		$data['zone1_freetable'] = 0;
		$data['zone2_freetable'] = 0;
		$data['zone3_freetable'] = 0;
		$data['zone4_freetable'] = 0;
		$data['zone5_freetable'] = 0;
		$data['zone6_freetable'] = 0;
		$data['zone7_freetable'] = 0;
		$data['zone8_freetable'] = 0;
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
		$query = $db->query("SELECT zone, count(*) as freetable FROM tableinfo WHERE floor = 2 and (status = 0 or (status = 1 and TIMESTAMPDIFF(minute, resvtime, NOW()) > 0)) GROUP BY zone");
		$results = $query->getResult();
		
		$data = array();
		$data['zone1_freetable'] = 0;
		$data['zone2_freetable'] = 0;
		$data['zone3_freetable'] = 0;
		$data['zone4_freetable'] = 0;
		$data['zone5_freetable'] = 0;
		$data['zone6_freetable'] = 0;
		
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
		$query = $db->query("SELECT *, TIMESTAMPDIFF(minute, resvtime, NOW()) as numday_pass FROM tableinfo WHERE zone=$zone and floor=$floor");
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
		$seat = explode(",", $seats);
		
		//Only extract data -> send to payment_view
		$numseat = count($seat);
		$data = array();

		if($numseat > 1) {
			$db = db_connect();
			$data['name'] = $request->getVar('name');
			$data['groupname'] = $request->getVar('groupname');
			$data['phone'] = $request->getVar('phone');
			$data['email'] = $request->getVar('email');

			$seatno = array();
			$seatprice = array();
			$floors = array();
			$zones = array();
			for($i = 1; $i < $numseat; $i++) {
				//Check if seat is still available
				$query = $db->query("SELECT price, floor, zone from tableinfo WHERE id = " . $seat[$i]);
				$results = $query->getResult();	
				$seatno[$i - 1] = $seat[$i];		
				$seatprice[$i - 1] = $results[0]->price;
				$floors[$i - 1] = $results[0]->floor;
				$zones[$i - 1] = $results[0]->zone;
			}
			$data['seat'] = $seatno;
			$data['seatprice'] = $seatprice;
			$data['floor'] = $floors;
			$data['zone'] = $zones;
			
			
			return view('payment_view', $data);

		} else {
			die ("Error");
		}		
	}


	public function confirm(){
		$request = service('request');		
		$data = array();
		$data['seats'] = unserialize($request->getVar('seats'));
		$data['seatprice'] = unserialize($request->getVar('seatprice'));
		$data['name'] = $request->getVar('name');
		$data['groupname'] = $request->getVar('groupname');
		$data['phone'] = $request->getVar('phone');
		$data['email'] = $request->getVar('email');

		//CHECK before SAVE
		
		$db = db_connect();

		$numseat = count($data['seats']);
		//Check
		for($i = 0; $i < $numseat; $i++) {
			$query = $db->query("SELECT status, TIMESTAMPDIFF(minute, resvtime, NOW()) as daypass from tableinfo WHERE id = " . $data['seats'][$i]);
			$results = $query->getResult();	
			if(!($results[0]->status == 0 or ($results[0]->status == 1 and $results[0]->daypass > 1440))) {
				return view("confirm_error_view");
			}
		}
		
		//Save
		for($i = 0; $i < $numseat; $i++) {
			$sql = "UPDATE tableinfo SET name='" . $data['name'] . "', resvtime=NOW(), groupname='" . $data['groupname'] . "', email ='". $data['email'] ."', phone='" . $data['phone'] . "', status = 1 WHERE id = " . $data['seats'][$i];
			$query = $db->query($sql);
			$results = $query->getResult();	
		}		
		
		//send email information
		$message = "<h4>ข้อมูลการจอง</h4>" .
				   "<b>ชื่อผู้จอง:</b> " . $data['name'] . "<br>" .  
			  		"<b>รุ่น:</b> ". $data['groupname'] . "<br>" .
			        "<b>เบอร์โทรศัพท์:</b> " . $data['phone'] . "<br>" .
			  		"<b>Email:</b> " . $data['email'] . "<br><br>" .
					"<table border=1><thead><tr><th>#โต๊ะ</th><th>ราคา</th></tr></thead><tbody>";
	
		$total_price = 0;
		for($i = 0; $i < $numseat; $i++) {
			$message = $message . "<tr><td>" . $data['seats'][$i] . "</td><td>" . $data['seatprice'][$i] . "</td></tr>";
			$total_price += $data['seatprice'][$i];
		}                
		$message = $message . "<tr><td colspan='2'><center>รวมยอดขำระ: " . $total_price . " บาท</center></td></tr></tbody></table><br>";
		$message = $message . "กรุณาดำเนินการตามขั้นตอนดังนี้<br><ul><li> กรุณาชำระเงินภายใน 24 ชั่วโมง ที่<br><b>บัญชี:</b> 907-7-48515-0<br>" .
		  "<b>ธนาคาร:</b> กรุงเทพ</span><br><b>สาขา:</b>  ม. เทคโนโลยีพระจอมเกล้าพระนครเหนือ<br>" .
		  "<b>ชื่อบัญชี:</b>  นายสมิตร ส่งพิริยะกิจ, นายสุริยัณต์ ผู้อุตส่าห์ และนายชลธรรม์ ธรรมจารี</li><li> เพิ่ม LINE @citkmutnb</li>" .
		  "<li> ส่งภาพข้อมูลการจองในหน้าจอนี้ พร้อมหลักฐานการชำระเงิน ไปยัง LINE @citkmutnb</li></ul>" .
		  "<font color='red'><b>หากท่านไม่ส่งหลักฐานการชำระเงินภายใน 24 ชั่วโมง  ระบบจะยกเลิกสถานะการจองโต๊ะ</b></font>";

		$gmail = \Config\Services::email();
		$gmail->setFrom('no-reply@cit.kmutnb.ac.th');
		$gmail->setTo($data['email']);
		$gmail->setSubject("ยืนยันการจองโต๊ะเข้าร่วมงาน The Red Cutter Day");
		$gmail->setMessage($message);
		$gmail->send();

		return view('confirm_done_view', $data);
	}
}
