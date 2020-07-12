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
                    <h1>Dashboard</h1>
                  </div>
                  <p>TUKUTUH.id</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form action="<?php echo base_url('Multiuser/Auth/login'); ?>" method="post" class="form-validate mb-4">
                    <div class="form-group">
                      <input id="login-username" type="text" required data-msg="Tolong masukan username" class="input-material" name="username">
                      <label for="login-username" class="label-material" name="username">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" required data-msg="Tolong masukan password" class="input-material" name="password">
                      <label for="login-password" class="label-material" name="password">Password</label>
                    </div>
                      <div class="icheck-primary">
                              <input type="checkbox" id="remember">
                              <label for="remember" class="text-white">
                                Remember Me
                              </label>
                            </div>
                            <br>
                    <button type="submit" class="btn btn-primary" value="login">Login</button>
                  </form><br>
                  <small>Belum Memiliki Akun? </small>
                  <a href="<?php echo base_url('Multiuser/Auth/register')?>">Daftar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
