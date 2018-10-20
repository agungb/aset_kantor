<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Login Aplikasi Inventaris Aset Kantor</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="<?php echo base_url("assets/css/font-awesome.css"); ?>" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" />

</head>
<body>
  <div class="container">
    <div class="row ">
      <br><br><br><br>

      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">

            <center><strong>  Form Login Aplikasi Inventaris Aset </strong> </center> 
          </div>
          <div class="panel-body">
            <form method="post">
              <br />
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                <input name="username" type="text" class="form-control" placeholder="Masukkan Username " />
              </div>
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                <input name="password" type="password" class="form-control"  placeholder="Masukkan Password" />
              </div>
              <button class="btn btn-primary btn-md btn-block">Login </button>
              <hr>

            </form>
          </div>

        </div>
      </div>


    </div>
  </div>
  
  <!-- JQUERY SCRIPTS -->
  <script src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
  <!-- BOOTSTRAP SCRIPTS -->
  <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

</body>
</html>
