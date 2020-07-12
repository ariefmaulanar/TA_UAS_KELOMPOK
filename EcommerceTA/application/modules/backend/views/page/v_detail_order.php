      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Detail Order</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('backend/Admin')?>">Home</a></li>
            <li class="breadcrumb-item active">Order        </li>
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
                          <table class="table table-striped text-nowrap">
                            <thead class="text-white" style="font-size: 15px;">
                              <tr>
                                <th>No</th>
                                <th>Produk</th>
                                <th>Qty</th>
                                <th>Harga</th>
                              </tr>
                            </thead>
                            <tbody class="text-white" style="font-size: 14px;">
                              <?php 
                                  $no = 1;
                                  foreach($user as $u){ 
                                  ?>
                              <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $u->nama_produk ?></td>
                                <td><?php echo $u->qty ?></td>
                                <td>Rp. <?php echo number_format($u->qty*$u->harga,0,",",".");?></td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                    <center>
                    <?php 
                                  $no = 1;
                                  foreach($jumlah_total as $j){ 
                                  ?>
                      <h5>Total Harga : Rp. <?php echo number_format($j,0,",",".");?></h5>
                    <?php } ?><br>
                                <td width="120">
                                  <a href="#"
                                 class="btn btn-success"  data-toggle="modal" data-target="#exampleModal" data-isi="Web Master"><b class="text-white">Proses</b></a>
                                <?php echo form_close(); ?>
                                </td>
                    </center>
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
              <h5 class="modal-title" id="exampleModalLabel">Produk Sedang Diproses </h5>
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
