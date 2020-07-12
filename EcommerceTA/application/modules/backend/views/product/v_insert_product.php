      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Add Product</h2>
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
                            <h3 class="card-title">Add Product</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                        <?php echo form_open_multipart('backend/Crud/tambah_aksi');?>
                            <div class="card-body">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Nama Produk</label>
                                <input type="text" class="form-control" name="product_name" placeholder="Enter product name">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Deskripsi</label>
                                <textarea type="text" class="form-control" name="product_desc" placeholder="Enter product description"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Harga</label>
                                <input type="text" class="form-control" name="product_price" placeholder="Enter product price">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Kategori</label><br>
                                <input type="radio" name="category" value="1"> Converse</input><br>
                                <input type="radio" name="category" value="2"> Running</input><br>
                                <input type="radio" name="category" value="3"> Boots</input>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Stok</label>
                                <input type="text" class="form-control" name="stok" placeholder="Enter product stok">
                              </div>
                              <div class="form-group">
                            <label for="foto">Photo</label>
                                 <input type="file" name="berkas" /><br><br>
                                  <input class="btn btn-primary" type="submit" data-toggle="modal" data-target="#exampleModal" data-isi="Web Master" value="Tambah Produk" />
                          <?php echo form_close(); ?>
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
              <h5 class="modal-title" id="exampleModalLabel">Produk Ditambahkan </h5>
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
