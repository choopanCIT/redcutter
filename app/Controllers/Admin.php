<?php namespace App\Controllers;

use CodeIgniter\HTTP\IncomingRequest;


class Admin extends BaseController
{
	public function index()
	{
		return view('login_view');
	}

	public function verify() {
		$request = service('request');
		$username = $request->getVar('username');
		$password = $request->getVar('password');
		if ($username == 'admin' && $password == 'CITredcutter') {
			$session = session();
			$session->set('username', 'admin');
			return redirect()->to(site_url('admin/home'));
		} else {
			$data = array();
			$data['error'] = 1;
			return view('login_view', $data);
		}	
	}
	public function cancel_reserv_status($tablenumber=null) {
		$session = session();
		if($session->get('username') != 'admin') {
			die("No permission");
		}
		if ($tablenumber != null) {
			$db = db_connect();
			$query = $db->query("UPDATE tableinfo SET status = 1 WHERE id = $tablenumber");
			$query->getResult();
			return redirect()->to(site_url('admin/home'));
		} else {
			die("Error");
		}
	}
	public function delete_status($tablenumber=null) {
		$session = session();
		if($session->get('username') != 'admin') {
			die("No permission");
		}
		if ($tablenumber != null) {
			$db = db_connect();
			$query = $db->query("UPDATE tableinfo SET status = 0 WHERE id = $tablenumber");
			$query->getResult();
			return redirect()->to(site_url('admin/home'));
		} else {
			die("Error");
		}
	}
	public function changestatus($tablenumber=null) {
		$session = session();
		if($session->get('username') != 'admin') {
			die("No permission");
		}
		if ($tablenumber != null) {
			$db = db_connect();
			$query = $db->query("UPDATE tableinfo SET status = 2 WHERE id = $tablenumber");
			$query->getResult();
			return redirect()->to(site_url('admin/home'));
		} else {
			die("Error");
		}
	}


	//TODO : Add condition status = 1 and now()-resv_time < 24h
	public function home() {
			// Get summary
			$data = array();
			$data['free'] = 0;
			$data['reserved'] = 0;
			$data['paid'] = 0;
			$data['earn'] = 0;

			$db = db_connect();
			$query = $db->query("SELECT * FROM tableinfo WHERE status = 1 and DATEDIFF(NOW(), resvtime) = 0");
			$results = $query->getResult();
			$data['reserved_list'] = $results;
			$realreserved = count($data['reserved_list']);

			$query = $db->query("SELECT * FROM tableinfo WHERE status = 1 and DATEDIFF(NOW(), resvtime) > 0");
			$results = $query->getResult();			
			$overduereserved = count($results);
			


			$query = $db->query("SELECT status, count(*) as numtable FROM tableinfo group by status");
			$results = $query->getResult();
			foreach( $results as $row) {
				if($row->status == 0)
					$data['free'] = $row->numtable + $overduereserved;
				elseif($row->status == 1)
					$data['reserved'] = $realreserved;
				else
					$data['paid'] = $row->numtable;
			}
			
			$query = $db->query("SELECT sum(price) as total_earn FROM tableinfo WHERE status = 2");
			$results = $query->getResult();
			$data['earn'] = $results[0]->total_earn;


			$query = $db->query("SELECT * FROM tableinfo WHERE status = 2");
			$results = $query->getResult();
			$data['paid_list'] = $results;

			return view('admin_home_view', $data);
	}

	public function logout() {
		$session = session();
		$session->destroy();
		return view('login_view');
	}

}
