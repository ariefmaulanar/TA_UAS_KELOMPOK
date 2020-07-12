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
                                <th>Gambar</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Option</th>
                              </tr>
                            </thead>
                            <tbody class="text-white" style="font-size: 14px;">
                              <?php 
                                  foreach($products as $u){ 
                                  ?>
                              <tr>
                                <td><?php echo ++$start ?></td>
                                <td><img src="<?php echo base_url('gambar/product/'.$u->gambar) ?> "width="64"/></td>
                                <td><?php echo $u->nama_produk ?></td>
                                <td>Rp. <?php echo number_format($u->harga,0,",",".");?></td>
                                <td><?php echo $u->deskripsi ?></td>
                                <td><?php echo $u->nama_kategori ?></td>
                                <td><?php echo $u->stok ?></td>
                                <td width=80>
                                <?php echo form_open_multipart('backend/Crud/hapus');?>
                                  <a href="<?php echo site_url('backend/Crud/hapus/'.$u->id_produk) ?>"
                                  class="badge badge-sm badge-danger"></i><b> Hapus</b></a>
                                <?php echo form_close(); ?>
                                  <a href="<?php echo site_url('backend/Crud/edit/'.$u->id_produk) ?>"
                                 class="badge badge-sm badge-warning"></i><b> Edit</b></a>
                                </td>
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
                    </div>
                    <center>
                      <?php
                          // Cek role user
                          if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
                           ?>
                          <div class="mx-auto">
                            <a href="<?php echo base_url('backend/Crud/insert_product')?>"><button type="submit" class="btn btn-success">Tambah Produk</button></a>&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo base_url('backend/Crud/hapus_produk')?>"><button type="submit" class="btn btn-primary">Produk Terhapus</button></a>
                          </div>
                        </center>
                      <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>