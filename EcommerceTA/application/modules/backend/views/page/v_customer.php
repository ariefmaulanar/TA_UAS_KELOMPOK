      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Data Customer</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('backend/Page/home')?>">Home</a></li>
            <li class="breadcrumb-item active"><?php echo $judul; ?>        </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                    <div class="row d-flex justify-content-center">
                      <div class="card card-primary">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          <table class="table table-responsive table-striped text-nowrap">
                            <thead class="text-white" style="font-size: 15px;">
                              <tr>
                                <th>No</th>
                                <th>Nama Customer</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Option</th>
                              </tr>
                            </thead>
                            <tbody class="text-white" style="font-size: 14px;">
                              <?php 
                                  $no = 1;
                                  foreach($customer as $u){ 
                                  ?>
                              <tr>
                                <td><?php echo ++$start ?></td>
                                <td><?php echo $u->nama ?></td>
                                <td><?php echo $u->email ?></td>
                                <td><?php echo $u->username ?></td>
                                <td width="120">
                                <?php echo form_open_multipart('backend/Crud/hapus_customer');?>
                                  <a href="<?php echo site_url('backend/Crud/hapus_customer/'.$u->id_user) ?>"
                                  class="badge badge-danger text-white"><b>Delete</b></a>
                                <?php echo form_close(); ?>
                                </td>
                              </tr>
                              <?php } ?>
                              <div class="mx-auto">
                              <?php  echo $pagination ?>
                          </div>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
