<!doctype html>

<html>
	<head>
		<title>CIT :: The Red Cutter Day</title>
		<meta charset="UTF-8">
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('seatchart/style.css')?>">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"></script>
	</head>

	<body>
	<div class="jumbotron text-center">
	<h2>The Red Cutter Day</h2>
	<p>The way walk you home.</p>
	<a href="<?php echo site_url('home'); ?>" class="btn btn-primary">กลับหน้าหลัก</a></p>
	</div>
		<script src="jquery.seat-charts.js"></script>
		<div class="container">
		<center>
		<h6> จองโต๊ะ (ชั้น 2) zone5  : กรุณาเลือกโต๊ะเพื่อจอง</h6>
		<h7></h7>
		</center><br>
			<div class="row justify-content-center">
				<div class="col-12 col-sm-8" style="margin-top:5%">
					<div class="col-12 col-sm-12">
						<div class="row justify-content-center">
				<div class="col-1 col-sm-1 d-flex justify-content-center justify-content-md-center" id="Zone5-2" name="601">601</div>
				<div class="col-1 col-sm-1 d-flex justify-content-center justify-content-md-center" id="Zone5-2" name="603">603</div>
				<div class="col-1 col-sm-1 d-flex justify-content-center justify-content-md-center" id="Zone5-2" name="605">605</div>
				<div class="col-1 col-sm-1 d-flex justify-content-center justify-content-md-center" id="Zone5-2" name="607">607</div>
				<div class="col-1 col-sm-1 d-flex justify-content-center justify-content-md-center" id="Zone5-2" name="609">609</div>
			</div>
			</div>
			</div>
			<div class="col-sm">
 		 	<h4 class="d-flex justify-content-between align-items-center mb-3">
 		 	 <span class="text-muted">Your cart</span>
 		 	</h4>
 		 <ul class="list-group mb-3" id="cart">
 		 <li class="list-group-item d-flex justify-content-between">
 		  <span>Total (Bath)</span>
 		  <strong class="total">฿0</strong>
 		 </li>
 		 </ul>

 		 <form class="card p-2" id="fixedElement">
 		 <div class="col-12">
 		 	<div class="row justify-content-around">
 		 	 <button type="button" class="col-8 col-sm-8 btn btn btn-success" id="checkout" data-toggle="modal">Checkout(<strong class="total">฿0</strong>)</button>
 		 	 <button type="button" class="col-4 col-sm-4 btn btn btn-warning" id="clear">Clear</button>
 		 	</div>
 		 </div>
 		 </form>
 		 </div>
 		 </div>
		 <div class="row justify-content-center">
		 <div class="col-10 col-sm-10" id="detail">
			 <div class="row justify-content-center">
			 <div class="col-1" id="Zonegreen"></div><span>&nbsp ว่าง&nbsp</span>
			 <div class="col-1" id="Zoneyellow"></div><span>&nbsp จอง&nbsp</span>
			 <div class="col-1" id="Zonered"></div><span> &nbsp จ่ายเงินเเล้ว&nbsp</span>
		 </div>
		</div>
		 </div>
 		 </div>
 		 <!-- Modal -->
		  <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		 <div class="modal-dialog modal-dialog-centered" role="document">


		 <div class="modal-content">
		 	 <div class="modal-header">
		 		 <h5 class="modal-title" id="exampleModalLongTitle">ข้อมูลผู้จอง</h5>
		 		 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		 			 <span aria-hidden="true">&times;</span>
		 		 </button>
		 	 </div>
		 	 <div class="modal-body">
		<form action='<?php echo site_url('home/checkout'); ?>' method="POST">
		<input type="hidden" name="seats" id="seats">
		 <div class="form-group" id="datauser">
			<p></p>
		  <label for="recipient-name" class="col-form-label">ชื่อ-นามสกุล:</label>
		  <input type="text" class="form-control" id="recipient-name" name="name" required>
			<label for="recipient-name" class="col-form-label">รุ่น (เช่น PET 06):</label>
			<input type="text" class="form-control" id="recipient-id" name="groupname" required>
			<label for="recipient-name" class="col-form-label">เบอร์โทร:</label>
			<input type="text" class="form-control" id="recipient-phone" name="phone" required>
			<label for="recipient-name" class="col-form-label">Email:</label>
			<input type="email" class="form-control" id="recipient-surename" name="email" required>
			</div>
			<div class="form-group" id="user">
			 <p></p>
			 <label for="recipient-name" class="col-form-label">ชื่อ-นามสกุล:</label>
			 <input type="text" class="form-control" id="name">
			 <label for="recipient-name" class="col-form-label">รุ่น:</label>
			 <input type="text" class="form-control" id="id">
			 </div>
		 	 </div>
		 	 <div class="modal-footer">
		 		 <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
		 		 <button  class="btn btn-primary" id="submit">ยืนยันการจอง</button>
		 	 </div>
		  </div>
	</form>
		 </div>
		 </div>
		 	<script>
		 	$(document).ready(function() {
				$('#checkout').checkout({});
		 		$('#clear').click(function(){
		 			location.reload(true);
		 		});
			});
		 	</script>
		<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="<?php echo base_url('seatchart/jquery.seat-charts.js')?>"></script>
		<?php

foreach ($tabinfo as $row)
		{	
			echo "<script>
				     $('h7').text(\"โต๊ะราคา: \"+$row->price+\"บาท\");
					 </script>";
					 
            if ($row->status == 2) {
				echo "<script>
				     $('div[name=\"$row->id\"]').seatconfirm(\"$row->name\",\"$row->groupname\");
                     </script>";
			}
			if ($row->status == 1 and $row->numday_pass <= 1440) {
				echo "<script>
				     $('div[name=\"$row->id\"]').seatwaitconfirm(\"$row->name\",\"$row->groupname\");
                     </script>";
            }
			if ($row->status == 0 or ($row->status == 1 and $row->numday_pass > 1440)) {

				//echo $row->id;
				echo "<script>
				     $('div[name=\"$row->id\"]').seatavailable($row->price);
                     </script>";
            }

        	//echo $row->id;
        	//echo $row->zone;
        	//echo $row->floor;
        }
?>
<br>
	</body>
</html>