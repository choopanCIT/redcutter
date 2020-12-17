<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CIT :: The Red Cutter Day</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"><</script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('seatchart/style.css')?>">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">

  </head>
	<body>
	<div class="jumbotron text-center">
	<h2>The Red Cutter Day</h2>
	<p>The way walk you home.</p>
	<a href="<?php echo site_url('home'); ?>" class="btn btn-primary">กลับหน้าหลัก</a></p>
	</div>
  <div class="container">
  
    <center>
    <h4>ยืนยันข้อมูลการจอง</h4>

    <table class="table table-bordered" style="width:90%">
        
          <tr><td><b>ชื่อผู้จอง:</b></td><td><?php echo $name; ?></td></tr>
          <tr><td><b>รุ่น:</b></td><td><?php echo $groupname; ?></td></tr>
          <tr><td><b>เบอร์โทรศัพท์:</b></td><td><?php echo $phone; ?></td></tr>
          <tr><td><b>Email:</b></td><td><?php echo $email; ?></td></tr>
        
    </table>
     
    <br>
    <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="width:90%">
        <thead>
            <tr>
                <th>#โต๊ะ</th>
                <th>ชั้น</th>
                <th>โซน</th>
                <th>ราคา</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $numreserved = count($seat);
                $total_price = 0;
                for($i = 0; $i < $numreserved; $i++) {
                  echo "<tr>";
                  echo "<td>" . $seat[$i] . "</td>";                  
                  echo "<td>" . $floor[$i] . "</td>";
                  echo "<td>" . $zone[$i] . "</td>";
                  echo "<td>" . $seatprice[$i] . "</td>";
                  echo "</tr>";
                  $total_price += $seatprice[$i];
                }                
            ?>
            <tr><td colspan='4'><center>รวมยอดชำระ: <?php echo $total_price; ?> บาท</center></td></tr>
        </tbody>
    </table>
    <form action="<?php echo site_url('home/confirm'); ?>" method="POST">
      <input type="hidden" name="name" value="<?php echo $name; ?>">
      <input type="hidden" name="groupname" value="<?php echo $groupname; ?>">
      <input type="hidden" name="phone" value="<?php echo $phone; ?>">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
      <input type="hidden" name="seats" value='<?php echo serialize($seat); ?>'>
      <input type="hidden" name="seatprice" value='<?php echo serialize($seatprice); ?>'>

      <button class="btn btn-lg btn-success">ยืนยันข้อมูลการจอง</button>
    </form>
    

    </center>
  </div>
  </body>
</html>

