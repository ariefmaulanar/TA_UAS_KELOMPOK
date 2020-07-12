      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Data Product</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('backend/Admin')?>">Home</a></li>
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
                          <table class="table table-striped text-nowrap table-responsive">
                            <font color="#ffffff">
                            <thead class="text-white" style="font-size: 15px;">
                              <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Tgl Hapus</th>
                                <th>User</th>
                              </tr>
                            </thead>
                            <tbody class="text-white" style="font-size: 14px;">
                              <?php 
                                  foreach($products as $u){ 
                                  ?>
                              <tr>
                                <td><?php echo ++$start ?></td>
                                <td><?php echo $u->nama_produk ?></td>
                                <td>Rp. <?php echo number_format($u->harga,0,",",".");?></td>
                                <td><?php echo $u->deskripsi ?></td>
                                <td><?php echo $u->nama_kategori ?></td>
                                <td><?php echo $u->tgl_hapus ?></td>
                                <td><?php echo $u->user ?></td>
                              </tr>
                              <?php } ?>
                             <div class="mx-auto">
                              <?php  echo $pagination ?>
                          </div>
                            </tbody>
                            </font>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>\
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>