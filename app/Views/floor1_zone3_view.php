<!doctype html>

<html>
	<head>
		<title>JSC Demo</title>
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
	<h2>The red cutter day</h2>
	<p>The way walk you home.</p>
	<a href="<?php echo site_url('home'); ?>" class="btn btn-primary">กลับหน้าหลัก</a></p>
	</div>
		<div class="container">
			<div class="row justify-content-center">
			<div class="col-4 col-sm-2">
				<div class="row justify-content-center">
					<div class="col-5 col-sm-8 d-flex justify-content-center justify-content-md-center" id="Zone3-1" name="201">201</div>
					<div class="w-100"></div>
					<div class="col-5 col-sm-8 d-flex justify-content-center justify-content-md-center" id="Zone3-1" name="204">204</div>
					<div class="w-100"></div>
					<div class="col-5 col-sm-8 d-flex justify-content-center justify-content-md-center" id="Zone3-1" name="207">207</div>
					<div class="w-100"></div>
					<div class="col-5 col-sm-8 d-flex justify-content-center justify-content-md-center" id="Zone3-1" name="210">210</div>
      </div>
		</div>
		<div class="col-4 col-sm-2">
			<div class="row justify-content-center">
				<div class="col-5 col-sm-8 d-flex justify-content-center justify-content-md-center" id="Zone3-1" name="222">222</div>
				<div class="w-100"></div>
				<div class="col-5 col-sm-8 d-flex justify-content-center justify-content-md-center" id="Zone3-1" name="219">219</div>
				<div class="w-100"></div>
				<div class="col-5 col-sm-8 d-flex justify-content-center justify-content-md-center" id="Zone3-1" name="216">216</div>
				<div class="w-100"></div>
				<div class="col-5 col-sm-8 d-flex justify-content-center justify-content-md-center" id="Zone3-1" name="213">213</div>
		</div>
	</div>
	<div class="col-4 col-sm-2">
		<div class="row justify-content-center">
			<div class="col-5 col-sm-8 d-flex justify-content-center justify-content-md-center" id="Zone3-1" name="225">225</div>
			<div class="w-100"></div>
			<div class="col-5 col-sm-8 d-flex justify-content-center justify-content-md-center" id="Zone3-1" name="228">228</div>
			<div class="w-100"></div>
			<div class="col-5 col-sm-8 d-flex justify-content-center justify-content-md-center" id="Zone3-1" name="231">231</div>
			<div class="w-100"></div>
			<div class="col-5 col-sm-8 d-flex justify-content-center justify-content-md-center" id="Zone3-1" name="234">234</div>
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
<div class="col-8 col-sm-6" id="detail">
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
		<form>
<div class="form-group">
 <p></p>
 <label for="recipient-name" class="col-form-label">ชื่อ:</label>
 <input type="text" class="form-control" id="recipient-name">
 <label for="recipient-name" class="col-form-label">นามสกุล:</label>
 <input type="text" class="form-control" id="recipient-surename">
 <label for="recipient-name" class="col-form-label">รหัสรุ่น:</label>
 <input type="text" class="form-control" id="recipient-id">
 <label for="recipient-name" class="col-form-label">เบอร์โทร:</label>
 <input type="text" class="form-control" id="recipient-phone">
</div>
</form>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
		<button type="button" class="btn btn-primary" id="submit">ยืนยันการจอง</button>
		</div>
	</div>
</div>
</div>
	<script>
	$(document).ready(function() {
		//$('div[id*="Zone"]').seatcheack("1");
	   $("#checkout").attr("data-target","#ModalCenter");
		$('#clear').click(function(){
			location.reload(true);
		});
	   $('#submit').click(function(){
		   var results= $(this).submitdata({});
		   console.log(results);
	   });
   });
	</script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="<?php echo base_url('seatchart/jquery.seat-charts.js')?>"></script>
<?php 
//print_r($tabinfo);

foreach ($tabinfo as $row)
{
   if ($row->status == 2) {
	   echo "<script>
			$('div[name=\"$row->id\"]').seatconfirm({});
			</script>";
   }
   if ($row->status == 1) {
	   echo "<script>
			$('div[name=\"$row->id\"]').seatwaitconfirm({});
			</script>";
   }
   if ($row->status == 0) {
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
</body>
</html>
