<?php
include 'header.php';
require 'method.php';


$hasil = query("SELECT id_barang, nama_jenis, nama_barang, stok_barang, berat_barang, harga_jual 
FROM barang join jenis_barang on
(barang.id_jenis = jenis_barang.id_jenis) "); //memanggil fungsi query untuk mengambil data Baranng



?>
<!-- Modal Dokument-->
<div class="modal fade" id="modalbarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label>Id Barang</label>
                        <input class="form-control" id="hasilid"  type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Nama Barang</label>
                        <input class="form-control" id="nama"  type="text">
                    </div>
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="button" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>
<div class="main-panel">
<div class="content-wrapper">
<div class="row">
<div class="col-lg-12 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Barang</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id Barang</th>
                                <th>Nama Jenis</th>
                                <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Berat </th>
                                <th>Harga</th>
                                <!-- <th>Gender</th> -->
                                <!-- <th>Password</th> -->
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($hasil as $barang) : ?>
                            <tr>
                                <td><?= $barang['id_barang']?></td>
                                <td><?= $barang['nama_jenis']?></td>
                                <td><?= $barang['nama_barang']?></td>
                                <td><?= $barang['stok_barang']?> Pcs</td>
                                <td><?= $barang['berat_barang']?></td>
                                <td>Rp. <?= $barang['harga_jual']?> </td>
                                <!-- <td><?= $barang['jk_pegawai']?> </td> -->
                                <!-- <td><?= $barang['pass_pegawai']?> </td> -->
                                <td>
                                    <a href="" data-bs-toggle="modal" data-bs-target="#modalbarang" id="modbarang"  onclick="idbar('<?= $barang['id_barang']?>')" data-idbar="<?= $barang['id_barang']?>" data-namabar="<?= $barang['nama_barang']?>">
                                    <button type="button" class="btn btn-secondary"> <i class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Edit </button>
                                    </a>

                                    <button type="button" class="btn btn-danger"> <i class="mdi mdi-alert btn-icon-prepend"></i> Hapus </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
              <!-- <button type="button"  class="btn btn-success"><i class="mdi mdi-plus-circle btn-icon-prepend"></i> Tambah </button> -->

            </div>


<script>
  $(document).on("click", "#modbarang", function(){
    let idd = $(this).data('idbar');
    let namaa = $(this).data('namabar');

    $('.modal-body #id').val(idd);
    $('.modal-body #nama').val(namaa);
  })

  function idbar(id){
    document.querySelector("#hasilid").value = id;
  }
</script>

<?php include 'footer.php'; ?>