<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CIT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css')?>" type="text/css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"><</script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('seatchart/jquery.seat-charts.css')?>">
</head>
<body>

<div class="jumbotron text-center">
  <h2>The red cutter day</h2>
  <p>The way walk you home.</p>
  <a href="<?php echo site_url('home'); ?>" class="btn btn-primary">กลับหน้าหลัก</a></p>
</div>

<div class="container">
<b>จองโต๊ะ (ชั้น 1) :</b> กรุณาเลือก Zone ที่ต้องการจองโต๊ะ<br><br>

			<div class="col-7" id="front-indicator">STAGE</div>
			<div class="row justify-content-center">
		    <div class="col-1 d-flex justify-content-center justify-content-sm-center" id="Zone2" onclick="location.href='Zone1.html';">ZONE1</div>
			<div class="col-7">
				<div class="row justify-content-around">
					<div class="col-2 col-sm d-flex justify-content-center justify-content-md-center" id="Zone1" onclick="location.href='Zone2.html';">ZONE2</div>
					<div class="col-4 col-sm d-flex justify-content-center justify-content-md-center" id="Zone1" onclick="location.href='Zone3.html';">ZONE3</div>
					<div class="col-2 col-sm d-flex justify-content-center justify-content-md-center" id="Zone1" onclick="location.href='Zone4.html';">ZONE4</div>
				</div>
				<div class="row">
					<div class="col d-flex justify-content-center justify-content-md-center" id="Zone1" onclick="location.href='Zone5.html';">ZONE5</div>
				</div>
		</div>
				<div class="col-1 d-flex justify-content-center justify-content-sm-center" id="Zone2" onclick="location.href='Zone6.html';">ZONE6</div>
				<div class="w-100"></div>
				<div class="col-1 d-flex justify-content-center justify-content-sm-center" id="vertical-text">ENTRANCE</div>
			<div class="col-7">
				<div class="row">
					<div class="col col-sm d-flex justify-content-center justify-content-md-center" id="Zone3" onclick="location.href='Zone7.html';">ZONE7</div>
				</div>
				<div class="row">
					<div class="col d-flex justify-content-center justify-content-md-center" id="Zone4" onclick="location.href='Zone8.html';">ZONE8</div>
				</div>
		</div>
				<div class="col-1 d-flex justify-content-center justify-content-sm-center" id="ZoneBar">BAR</div>
		 </div>
		 <div class="row justify-content-center">
		 <div class="col-4 d-flex justify-content-center justify-content-md-center" id="Zone5">BAR</div>
	 </div>
		 <div class="w-100"></div>
		 <div class="row justify-content-center">
		 <div class="col-8" id="detail">
			 <div class="row row justify-content-center">
			 <div class="col-1" id="Zonegreen"></div><span>&nbsp 10 ที่นั่ง&nbsp</span>
			 <div class="col-1" id="Zoneyellow"></div><span>&nbsp 10 ที่นั่ง&nbsp</span>
			 <div class="col-1" id="Zonered"></div><span> &nbsp 6 ที่นั่ง&nbsp</span>
		 </div>
	 </div>
		 </div>
		 </div>
	</div>



</body>
</html>
