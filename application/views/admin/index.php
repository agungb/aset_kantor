<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aplikasi Inventatis Aset Kantor</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="<?php echo base_url("assets/css/font-awesome.css"); ?>" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" />
</head>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url("admin/hardware"); ?>">Inventaris Aset</a>
      </div>
      <div style="color: white;
      padding: 15px 50px 5px 50px;
      float: right;
      font-size: 16px;"> <a href="<?php echo base_url("login/logout"); ?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

          <li  >
            <a  href="<?php echo base_url("admin/hardware"); ?>"><i class="fa fa-table"></i> Tabel Aset</a>
          </li>
          <li>
            <a  href="<?php echo base_url("admin/kategori"); ?>"><i class="fa fa-table"></i> Tabel Kategori</a>
          </li>
          <li>
            <a  href="<?php echo base_url("admin/pegawai"); ?>"><i class="fa fa-table"></i> Tabel Pegawai</a>
          </li>
          <li>
            <a  href="<?php echo base_url("admin/departemen"); ?>"><i class="fa fa-table"></i> Tabel Departemen</a>
          </li>
        </ul>

      </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
      <div id="page-inner">
        <div class="row">
          <div class="col-md-12">

            <h2><?php echo $konten ?></h2>
          </div>
        </div>
        <!-- /. ROW  -->
        <hr />

      </div>
      <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
  </div>
  <!-- /. WRAPPER  -->
  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
  <!-- BOOTSTRAP SCRIPTS -->
  <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

<!-- Karya agung budidoyo kunjungi saya di github.com/agungb -->
</body>
</html>
