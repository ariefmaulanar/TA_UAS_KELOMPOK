<?php
// Cek apakah terdapat session nama message
if($this->session->flashdata('message')){ // Jika ada
 echo '<div class="alert alert-danger">'.$this->session->flashdata('message').'</div>'; // Tampilkan pesannya
}
?>
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
                  <p>TUKUTUH.id</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form action="<?php echo base_url('MultiUser/Auth/register'); ?>" method="post" class="form-validate mb-4">
                    <div class="form-group">
                      <input id="login-username" type="text" required data-msg="Tolong masukan username" class="input-material" name="username" value="<?php echo set_value('username'); ?>" >
                      <label for="login-username" class="label-material" name="username">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-nama" type="text" required data-msg="Tolong masukan Nama" class="input-material" name="nama" value="<?php echo set_value('nama'); ?>" >
                      <label for="login-nama" class="label-material" name="username">Nama Lengkap</label>
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
                      <div class="form-group">
                        <label for="exampleInputEmail1">Role :</label><br>
                        <input type="radio" name="role" value="admin"> admin<br>
                        <input type="radio" name="role" value="operator"> operator<br>
                     </div>
                   <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-isi="Web Master" value="login">Register</button>
                  </form><br>
                  <small>Sudah Memiliki Akun? </small>
                  <a href="<?php echo base_url('Multiuser/Auth')?>">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 