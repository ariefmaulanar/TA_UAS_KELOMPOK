<div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Data <?php foreach ($nama_kategori as $row){
          echo $row ["nama_kategori"];}?></h2>
          </div>  
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('backend/Page/home')?>">Home</a></li>
            <li class="breadcrumb-item active">Category        </li>
            <li class="breadcrumb-item active"><?php foreach ($nama_kategori as $row){
          echo $row ["nama_kategori"];}?>       </li>
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
                          <table class="table table-striped text-nowrap">
                            <thead class="text-white" style="font-size: 15px;">
                              <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Stok</th>
                                <th>Option</th>
                              </tr>
                            </thead>
                            <tbody class="text-white" style="font-size: 14px;">
                              <?php 
                                  foreach($produk as $u){ 
                                  ?>
                              <tr>
                                <td><?php echo ++$start ?></td>
                                <td><img src="<?php echo base_url('gambar/product/'.$u->gambar) ?> "width="64"/></td>
                                <td><?php echo $u->nama_produk ?></td>
                                <td>Rp. <?php echo number_format($u->harga,0,",",".");?></td>
                                <td><?php echo $u->deskripsi ?></td>
                                <td><?php echo $u->stok ?></td>
                                <td width="120">
                                <?php echo form_open_multipart('backend/Crud/hapus');?>
                                  <a href="<?php echo site_url('backend/Crud/hapus/'.$u->id_produk) ?>"
                                  class="badge badge-sm badge-danger"> Delete</a>
                                <?php echo form_close(); ?>
                                  <a href="<?php echo site_url('backend/Crud/edit/'.$u->id_produk) ?>"
                                 class="badge badge-sm badge-warning"> Edit</a>
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
                     <center>
                      <?php
                          // Cek role user
                          if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
                           ?>
                          <div class="card-footer">
                            <a href="<?php echo base_url('backend/Crud/insert_product')?>">
                              <button type="submit" class="btn btn-primary">Tambah Produk</button>
                            </a>
                          </div>
                        <?php } ?>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
