<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CIT :: The Red Cutter Day</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"><</script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <style>
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>


</head>
<body>

<div class="jumbotron text-center">
  <h1>The Red Cutter Day</h1>
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
<br><br>
<h4>แผนผังโต๊ะ</h4>
<center>
<table>
<tr>
<td><center>
<img id="myImg" src="<?php echo base_url('floor1.jpg'); ?>" alt="floor 1" style="width:80%;max-width:300px"><br>
ชั้น 1</center></td>
<td><center>
<img id="myImg2" src="<?php echo base_url('floor2.jpg'); ?>" alt="floor 2" style="width:80%;max-width:300px"><br>
ชั้น 2</center></td>

</tr></table>
&nbsp;&nbsp;&nbsp;;&nbsp;
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption">ชั้น 1</div>
</div>
<div id="myModal2" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img02">
  <div id="caption">ชั้น 2</div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
}
var modal2 = document.getElementById("myModal2");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img2 = document.getElementById("myImg2");
var modalImg2 = document.getElementById("img02");
img2.onclick = function(){
  modal2.style.display = "block";
  modalImg2.src = this.src;
}


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
var span2 = document.getElementsByClassName("close")[1];

// When the user clicks on <span> (x), close the modal
span2.onclick = function() { 
  modal2.style.display = "none";
}
</script>



<br>

<a href='<?php echo site_url('home/tablelist'); ?>' class="btn btn-success"><i class="fas fa-search"></i>&nbsp; ค้นหารายชื่อผู้จองโต๊ะ</a>
<br><br>
<h6>ในกรณีที่มีปัญหากรุณาติดต่อ แจ้งปัญหาได้ที่ LINE: @citkmutnb</h6>
</center>


</body>
</html>