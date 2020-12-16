<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CIT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"><</script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

<div class="jumbotron text-center">
  <h1>The red cutter day</h1>
  <h5>The way walk you home</h5>
</div>

<div class="container">
<h4>จองโต๊ะ</h4>
<a href='<?php echo site_url('home/floor1'); ?>' class="btn btn-info btn-block">
	<b>ชั้น 1</b><br>
	(จำนวนโต๊ะว่าง : <?php echo $floor1_freetable; ?>)
</a>
<a href='<?php echo site_url('home/floor2'); ?>' class="btn btn-info btn-block">
	<b>ชั้น 2</b><br>
	(จำนวนโต๊ะว่าง : <?php echo $floor2_freetable; ?>)
</a>
<br><br><br>
<center>
<a href='<?php echo site_url('home/tablelist'); ?>' class="btn btn-success"><i class="fas fa-search"></i>&nbsp; ค้นหารายชื่อผู้จองโต๊ะ</a>
<br><br><br><br><br>
<h6>ในกรณีที่มีปัญหากรุณาติดต่อ แจ้งปัญหาได้ที่ LINE: @citkmutnb</h6>
</center>


</body>
</html>