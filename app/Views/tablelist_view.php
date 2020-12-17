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

  <script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</head>
<body>

<div class="jumbotron text-center">
  <h2>The Red Cutter Day</h2>
  <p>The way walk you home.</p>
  <a href="<?php echo site_url('home'); ?>" class="btn btn-primary">กลับหน้าหลัก</a></p>
</div>

<div class="container">
<center>
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:90%">
        <thead>
            <tr>
                <th>#โต๊ะ</th>
                <th>รุ่น</th>
                <th>ชื่อผู้จอง</th>
                <th>ชั้น</th>
                <th>โซน</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($tabinfo as $row) {
                    echo "<tr>";
                    echo "<td>" . $row->id . "</td>";
                    echo "<td>" . $row->groupname . "</td>";
                    echo "<td>" . $row->name . "</td>";
                    echo "<td>" . $row->floor . "</td>";
                    echo "<td>" . $row->zone . "</td>";
                    echo "</tr>";
                }      
            ?>
        </tbody>
    </table>
</center>
</div>
</body>
</html>
