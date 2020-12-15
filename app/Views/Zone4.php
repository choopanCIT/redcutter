<!doctype html>

<html>
	<head>
		<title>JSC Demo</title>
		<meta charset="UTF-8">
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="jquery.seat-charts.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('seatchart/style.css')?>">
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-primary">
			<div class="container">
			<a class="navbar-brand" href="index.html">Seat</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="main_nav">
			<ul class="navbar-nav">
				<li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
				<li class="nav-item"><a class="nav-link" href="#"> Search </a></li>
				<li class="nav-item"><a class="nav-link" href="#"> Login </a></li>
			</ul>
			</div> <!-- navbar-collapse.// -->
		</div><!-- container //  -->
		</nav>
		<div class="container">
			<div class="row justify-content-center">
			<div class="col-5 col-sm-4">
			<div class="col-10 col-sm-12">
				<div class="row justify-content-center">
					<div class="col-5 col-sm-4 d-flex justify-content-center justify-content-md-center" id="Zone2-2" >301</div>
					<div class="col-5 col-sm-4 d-flex justify-content-center justify-content-md-center" id="Zone2-2" >331</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-4 col-sm-4 d-flex justify-content-center justify-content-md-center" id="Zone2-2" >304</div>
					<div class="col-5 col-sm-4 d-flex justify-content-center justify-content-md-center" id="Zone2-2" >328</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-5 col-sm-4 d-flex justify-content-center justify-content-md-center" id="Zone2-2" >307</div>
					<div class="col-5 col-sm-4 d-flex justify-content-center justify-content-md-center" id="Zone2-2" >325</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-5 col-sm-4 d-flex justify-content-center justify-content-md-center" id="Zone2-2" >310</div>
					<div class="col-5 col-sm-4 d-flex justify-content-center justify-content-md-center" id="Zone2-2" >322</div>
				</div>
			</div>
		</div>
		<div class="col-5 col-sm-4">
		<div class="col-10 col-sm-11">
			<div class="row justify-content-center">
				<div class="col-5 col-sm-4 d-flex justify-content-center justify-content-md-center" id="Zone2-1" >334</div>
			</div>
			<div class="row justify-content-center" style="margin-top: 30%;">
				<div class="col-5 col-sm-4 d-flex justify-content-center justify-content-md-center" id="Zone2-1" >338</div>
			</div>
			<div class="row justify-content-center" style="margin-top: 30%;">
				<div class="col-5 col-sm-4 d-flex justify-content-center justify-content-md-center" id="Zone2-1" >341</div>
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
		 $('div[id*="Zone"]').seatcheack({});
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
	</body>
</html>
