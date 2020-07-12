<!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"></div><strong>Jumlah Admin</strong>
                    </div>
                    <div class="number dashtext-1"><?php echo $total_user; ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 30%" aria-valuenow="<?php echo $total_user; ?>" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i></i></div><strong>Jumlah Customer</strong>
                    </div>
                    <div class="number dashtext-3"><?php echo $total_customer; ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 55%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"></div><strong>Jumlah Product</strong>
                    </div>
                    <div class="number dashtext-2"><?php echo $total_product; ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 70%" aria-valuenow="<?php echo $total_product; ?>" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i></i></div><strong>Jumlah Order</strong>
                    </div>
                    <div class="number dashtext-3"><?php echo $total_order; ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 55%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<section class="no-padding-bottom">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Customer</h5>
                <br>
                <p class="card-text">
                  Jumlah total : <?php echo $total_customer; ?>
                </p>

                <a href="<?php echo base_url('backend/Customer')?>" class="card-link">Lihat</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Product</h5>

                <p class="card-text">
                  Jumlah total : <?php echo $total_product; ?>
                </p>
                <a href="<?php echo base_url('backend/Product')?>" class="card-link">Lihat</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Converse</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Kategori Product Converse</h6>

                <p class="card-text">Total Product : <?php echo $total_converse; ?></p>
                <a href="<?php echo base_url('backend/Category/converse')?>" class="btn btn-primary">Lihat</a>
              </div>
            </div>
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Running</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Kategori Product Running</h6>

                <p class="card-text">Total Product : <?php echo $total_running; ?></p>
                <a href="<?php echo base_url('backend/Category/running')?>" class="btn btn-primary">Lihat</a>
              </div>
            </div>
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Boots</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Kategori Product Boots</h6>

                <p class="card-text">Total Product : <?php echo $total_boots; ?></p>
                <a href="<?php echo base_url('backend/Category/boots')?>" class="btn btn-primary">Lihat</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</section>


