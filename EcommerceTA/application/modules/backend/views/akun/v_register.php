<?php
?><!DOCTYPE html>
<html>
  <title>Admin - <?php echo $judul ?></title>
  <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css')?>">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font.css')?>">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.sea.css')?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css')?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('gambar/logo.png')?>">
</head>
<body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Registration</h1>
                  </div>
                  <p>LAKULAKU</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form action="<?php echo base_url('backend/Register'); ?>" method="post" class="form-validate mb-4">
                    <div class="form-group">
                      <input id="login-username" type="text" required data-msg="Tolong masukan username" class="input-material" name="username" value="<?php echo set_value('username'); ?>" >
                      <label for="login-username" class="label-material" name="username">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-email" type="email" required data-msg="Tolong masukan email" class="input-material" name="email" value="<?php echo set_value('email'); ?>">
                      <label for="login-email" class="label-material" name="username">E-mail</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" required data-msg="Tolong masukan password" class="input-material" name="password" value="<?php echo set_value('password'); ?>">
                      <label for="login-password" class="label-material" name="password">Password</label>
                    </div>
                      <div class="form-group">
                        <input id="login-repassword" type="password" required data-msg="Tolong masukan password" class="input-material" name="password_conf" value="<?php echo set_value('password_conf'); ?>">
                        <label for="login-repassword" class="label-material" name="password_conf">re-Password</label>
                      </div>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-isi="Web Master" value="login">Register</button>
                  </form><br>
                  <small>Sudah Memiliki Akun? </small>
                  <a href="<?php echo base_url('backend/Login')?>">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Berhasil </h5>
            </div>
            <div class="modal-body">
              <h6 class="modal-title" id="exampleModalLabel">Register Sukses</h6>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Oke</button>
            </div>
          </div>
        </div>
      </div>
<script type="text/javascript">
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('isi')
    var modal = $(this)
    modal.find('.modal-title').text('Submit Masukan Paket  ' + recipient)
    modal.find('.modal-body input').val(recipient)
  })</script>
    <!-- JavaScript files-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/popper.js/umd/popper.min.js')?>"> </script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery.cookie/jquery.cookie.js')?>"> </script>
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery-validation/jquery.validate.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/front.js')?>"></script>
  </body>
</html>