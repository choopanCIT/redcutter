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
  <h2>The red cutter day</h2>
  <p>The way walk you home.</p>
</div>
<div class="container">
<?php
    if (isset($error)) {
?>
        <div class="alert alert-danger" role="alert">
            Username หรือ รหัสผ่าน ไม่ถูกต้อง
        </div>
<?php
        unset($error);    
    }
?>
    <div class="row">
        <div class="col-md-12 min-vh-20 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="<?php echo site_url('admin/verify');?>">
                                <div class="form-group">
                                    <label for="uname1">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="username" id="uname1" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password" name="password">
                                    <div class="invalid-feedback">Enter your password too!</div>
                                </div>
                                <div>
                                    <label class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>