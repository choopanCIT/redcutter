<!doctype html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>CIT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"><</script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('seatchart/style.css')?>">
	</head>

	<body>
	<div class="jumbotron text-center">
<h1>The red cutter day</h1>
  <h5>The way walk you home</h5>
  <a href="<?php echo site_url('home'); ?>" class="btn btn-primary">กลับหน้าหลัก</a></p>
</div>

<div class="container">
<center>
<h6> จองโต๊ะ (ชั้น 2) : กรุณาเลือก Zone ที่ต้องการจองโต๊ะ</h6>
</center><br>

			<div class="col-9 col-sm-8" id="front-indicator">STAGE</div>
			<div class="row justify-content-center justify-content-sm-center">
			<div class="col-10 col-sm-8">
			<div class="row justify-content-center justify-content-sm-center">
		    <div class="col-1 col-sm-1 d-flex justify-content-center justify-content-sm-center" id="Zone6" onclick="location.href='<?php echo site_url('home/tablelayout/2/1'); ?>';">ZONE1<br>ว่าง: <?php echo $zone1_freetable; ?></div>
				<div class="col-1 col-sm-1 d-flex justify-content-center justify-content-sm-center" id="Zone6" onclick="location.href='<?php echo site_url('home/tablelayout/2/2'); ?>';">ZONE2<br>ว่าง: <?php echo $zone2_freetable; ?></div>
				<div class="col-3 col-sm-3">
					<div class="row justify-content-center">
				<div class="col-12 col-sm d-flex justify-content-center justify-content-sm-center" id="front-indicator2">2 FLOOR</div>
			</div>
		</div>
		<div class="col-1 col-sm-1 d-flex justify-content-center justify-content-sm-center" id="Zone6" onclick="location.href='<?php echo site_url('home/tablelayout/2/3'); ?>';">ZONE3<br>ว่าง: <?php echo $zone3_freetable; ?></div>
		<div class="col-1 col-sm-1 d-flex justify-content-center justify-content-sm-center" id="Zone6" onclick="location.href='<?php echo site_url('home/tablelayout/2/4'); ?>';">ZONE4<br>ว่าง: <?php echo $zone4_freetable; ?></div>
		<div>
		</div>
				<div class="w-100"></div>
			<div class="col-4 col-sm-4">
				<div class="row">
					<div class="col col-sm d-flex justify-content-center justify-content-md-center" id="Zone6" onclick="location.href='<?php echo site_url('home/tablelayout/2/5'); ?>';">ZONE5<br>ว่าง: <?php echo $zone5_freetable; ?></div>
				</div>
				<div class="row" style="white-space: pre-wrap;">
					<div class="col d-flex justify-content-center justify-content-md-center" id="Zone4" onclick="location.href='<?php echo site_url('home/tablelayout/2/6'); ?>';">ZONE6<br>ว่าง: <?php echo $zone6_freetable; ?></div>
				</div>
		</div>
		 </div>
		 <div class="w-100"></div>
		 <div class="row justify-content-center">
		 <div class="col-12" id="detail">
			 <div class="row row justify-content-center">
				 <div class="col-1" id="Zoneyellow"></div><span>&nbsp 6 ที่นั่ง&nbsp</span>
			 <div class="col-1" id="Zonered"></div><span> &nbsp 6 ที่นั่ง(HUMBURG)&nbsp</span>
		 </div>
	 </div>
		 </div>
		 </div>
	</div>
		<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	</body>
</html>
