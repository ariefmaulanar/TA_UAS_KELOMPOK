      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Edit Product</h2>
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
                <!-- Content Header (Page header) -->
                <!-- Main content -->
                  <div class="row d-flex justify-content-center">
                      <!-- left column -->
                      <div class="col-md-4">
                        <!-- general form elements -->
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Edit Data Product</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <?php foreach($user as $u){ ?>
                          <?php echo form_open_multipart('backend/Crud/update');?>
                            <div class="card-body">
                              <div class="form-group">
                                <input type="hidden" class="form-control" name="id_produk" value="<?php echo $u->id_produk ?>">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_produk" value="<?php echo $u->nama_produk ?>">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Deskripsi</label>
                                <textarea type="text" class="form-control" name="deskripsi" value="<?php echo $u->deskripsi?>"><?php echo $u->deskripsi?></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Harga</label>
                                <input type="text" class="form-control" name="harga" value="<?php echo $u->harga ?>">
                              </div>
                              <div class="form-group">
                                <label for="foto">Photo</label><br>
                                <img src="<?php echo base_url('gambar/product/'.$u->gambar) ?>" width="80"/><br><hr>
                                <input type="file" name="berkas" value="<?php echo $u->gambar ?>"/><br>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Kategori</label><br>
                                <input type="radio" name="kategori" value="1"
                                <?php if($u->kategori==1) echo "checked=checked";?>> Converse</input><br>
                                <input type="radio" name="kategori" value="2"
                                <?php if($u->kategori==2) echo "checked=checked";?>> Running</input><br>
                                <input type="radio" name="kategori" value="3"
                                <?php if($u->kategori==3) echo "checked=checked";?>> Boots</input><br><br>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Stok</label>
                                <input type="text" class="form-control" name="stok" value="<?php echo $u->stok ?>">
                              </div>
                              <input class="btn btn-primary" type="submit"value="Edit Produk" />
              
                          <?php echo form_close(); ?>
                        <?php } ?>  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
         <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Berhasil </h4>
            </div>
            <div class="modal-body">
              <h5 class="modal-title" id="exampleModalLabel">Produk Diedit </h5>
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

