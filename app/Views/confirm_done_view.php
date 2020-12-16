<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CIT</title>
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
<div class="container">

<center>
<br>
    <h4>บันทึกข้อมูลการจองเรียบร้อยแล้ว</h4>

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
                <th>ราคา</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $numreserved = count($seats);
                $total_price = 0;
                for($i = 0; $i < $numreserved; $i++) {
                  echo "<tr>";
                  echo "<td>" . $seats[$i] . "</td>";                  
                  echo "<td>" . $seatprice[$i] . "</td>";
                  echo "</tr>";
                  $total_price += $seatprice[$i];
                }                
            ?>
            <tr><td colspan='4'><center>รวมยอดขำระ: <?php echo $total_price; ?> บาท</center></td></tr>
        </tbody>
    </table>
    
    <br>
    <table  class="table table-bordered dt-responsive nowrap" style="width:90%"><tr><td>
    &nbsp;&nbsp;&nbsp;&nbsp;ระบบได้จัดส่งข้อมูลการจองไปยัง Email ของท่านแล้ว กรุณาดำเนินการตามขั้นตอนดังนี้
    <ul>
    <li> บันทึกหน้าจอข้อมูลตารางการจองนี้ไว้ </li>
    <li> กรุณาชำระเงินภายใน 24 ชั่วโมง ที่<br>    
    <b>บัญชี:</b> <span class="text-primary">907-7-48515-0</span><br>
      <b>ธนาคาร:</b> <span class="text-primary"> กรุงเทพ</span><br>
      <b>สาขา:</b> <span class="text-primary"> ม. เทคโนโลยีพระจอมเกล้าพระนครเหนือ</span><br>
      <b>ชื่อบัญชี:</b> <span class="text-primary"> นายสมิตร ส่งพิริยะกิจ, นายสุริยัณต์ ผู้อุตส่าห์ และนายชลธรรม์ ธรรมจารี</span>
    </li>
    <li> เพิ่ม LINE @citkmutnb<br>
    <img src='<?php echo base_url("line.jpg")?>' class='img-fluid'>
    </li>
    <li> ส่งภาพข้อมูลการจองในหน้าจอนี้ พร้อมหลักฐานการชำระเงิน ไปยัง LINE @citkmutnb</li>
    </ul>
    </td></tr></table>
    
    <p class="text-danger"><b>หากท่านไม่ส่งหลักฐานการชำระเงินภายใน 24 ชั่วโมง  ระบบจะยกเลิกสถานะการจองโต๊ะ</b></p><br>
    
    <a href="<?php echo site_url('home'); ?>" class="btn btn-primary">กลับหน้าหลัก</a></p></center>
    

</div>
</body>
<html>