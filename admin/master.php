<?php
include 'header.php';
require 'method.php';

$hasil = query("SELECT * FROM jabatan "); //memanggil fungsi query untuk mengambil data jabatan
$negara = query("SELECT * FROM negara "); //memanggil fungsi query untuk mengambil data negara
$barang = query("SELECT * FROM jenis_barang "); //memanggil fungsi query untuk mengambil data jenis Barng
$dokument = query("SELECT * FROM jenis_dokumen "); //memanggil fungsi query untuk mengambil data jenis dokument
$katalog = query("SELECT * FROM katalog_barang "); //memanggil fungsi query untuk mengambil data jenis dokument

?>

<!-- Modal JABATAN-->
<div class="modal fade" id="tambahjabatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jabatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" action="tambah.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label>Id Jabatan</label>
                        <input class="form-control" id="email1" placeholder="01" type="text" name="idjabatan" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Nama Jabatan</label>
                        <input class="form-control" id="exampleInputPassword1" placeholder="Admin" type="text" name="namajabatan" required>
                    </div>
                </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="submitJabatan" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal UbahJABATAN-->
<div class="modal fade" id="ubahjabatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Jabatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" action="ubah.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label>Id Jabatan</label>
                        <input class="form-control" id="hasilidjab"  type="text" name="idjabatan" readonly > 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Nama Jabatan</label>
                        <input class="form-control" id="hasilnamajab"  type="text" name="namajabatan" required>
                    </div>
                </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="ubahjab" class="btn btn-primary">Ubah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Negara-->
<div class="modal fade" id="tambahnegara" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Negara</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" action="tambah.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label>Id Negara</label>
                        <input class="form-control" id="email1" placeholder="ne01" type="text" name="idnegara">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Nama Negara</label>
                        <input class="form-control" id="exampleInputPassword1" placeholder="Indonesia" type="text" name="namanegara">
                    </div>
                </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="submitNegara" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal UBAH Negara-->
<div class="modal fade" id="ubahnegara" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Negara</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" action="ubah.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label>Id Negara</label>
                        <input class="form-control" id="hasilidneg" placeholder="ne01" type="text" name="idnegara" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Nama Negara</label>
                        <input class="form-control" id="hasilnamaneg" placeholder="Indonesia" type="text" name="namanegara">
                    </div>
                </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="ubahnegara" class="btn btn-primary">Ubah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal jenisbarang-->
<div class="modal fade" id="tambahbarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" action="tambah.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label>Id Barang</label>
                        <input class="form-control" id="email1" placeholder="01" type="text" name="idbarang">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Nama Barang</label>
                        <input class="form-control" id="exampleInputPassword1" placeholder="Alat Makan" type="text" name="namabarang">
                    </div>
                </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="tambahbarang" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal UBAH JENIS BARANG-->
<div class="modal fade" id="ubahjenisbarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Jenis Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" action="ubah.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label>Id Jenis Barang</label>
                        <input class="form-control" id="hasilidbarang" placeholder="ne01" type="text" name="idjenisbarang" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Nama Jenis</label>
                        <input class="form-control" id="hasilnamabarang" placeholder="Indonesia" type="text" name="idnamasbarang">
                    </div>
                </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="ubahjenisbarang" class="btn btn-primary">Ubah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Tambah Dokument-->
<div class="modal fade" id="tambahdokumen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Dokumen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" action="tambah.php" method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <div class="col-sm-12">
                        <label>Id Dokumen</label>
                        <input class="form-control" id="email1" placeholder="01" type="text" name="iddokumen">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Nama Dokumen</label>
                        <input class="form-control" id="exampleInputPassword1" placeholder="Paper" type="text" name="namadokumen">
                    </div>
                </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary" name="tambahdok">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal UBAH JENIS Dokuemnt-->
<div class="modal fade" id="ubahdok" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Jenis Dokument</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form role="form" class="form-horizontal" action="ubah.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label>Id Jenis Document</label>
                        <input class="form-control" id="hasiliddok" placeholder="ne01" type="text" name="idjenisdok" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                    <label>Nama Document</label>
                        <input class="form-control" id="hasilnamadok" placeholder="Indonesia" type="text" name="namadok">
                    </div>
                </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" name="ubahjenisdokumen" class="btn btn-primary">Ubah</button>
      </div>
      </form>
    </div>
  </div>
</div>

    <div class="main-panel">
    <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Tabel Master</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Table</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Table Master </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabel Jabatan</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Id Jabatan</th>
                            <th>Nama Jabatan</th>
                            <th>Menu</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($hasil as $jabatan) : ?>
                                <tr>
                                    <td><?= $jabatan['id_jabatan']?></td> 
                                    <td><?= $jabatan['nama_jabatan']?></td>
                                    <td>
                                          <a id="ujabatan" data-bs-toggle="modal" data-bs-target="#ubahjabatan" onclick="idjab('<?= $jabatan['id_jabatan']?>', '<?= $jabatan['nama_jabatan']?>')" >
                                            <button type="submit" name="jab"  class="btn btn-secondary"> <i class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Edit </button>
                                          </a>
                                          <a href="hapus.php?idjabatan=<?= $jabatan["id_jabatan"]; ?>" onclick="return confirm('Yakin Mau Menghapus Jabatan <?= $jabatan['nama_jabatan'] ?> ?');">
                                            <button type="button" class="btn btn-danger"> <i class="mdi mdi-alert btn-icon-prepend"></i> Hapus </button>
                                          </a>
                                    </td>
                                </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="template-demo">
                          <button type="button" data-bs-toggle="modal" data-bs-target="#tambahjabatan" class="btn btn-success"><i class="mdi mdi-plus-circle btn-icon-prepend"></i> Tambah </button>
                  </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabel Negara</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Id Negara</th>
                            <th>Nama Negara</th>
                            <th>Menu</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($negara as $dataa) : ?>
                          <tr>
                            <td><?= $dataa['id_negara']?></td>
                            <td><?= $dataa['nama_negara']?></td>
                            <td>
                              
                                  <a id="ujabatan" data-bs-toggle="modal" data-bs-target="#ubahnegara" onclick="idneg('<?= $dataa['id_negara']?>', '<?= $dataa['nama_negara']?>')">
                                    <button type="submit" name="jab"  class="btn btn-secondary"> <i class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Edit </button>
                                  </a>
                                  <a href="hapus.php?idnegara=<?= $dataa['id_negara']; ?>" onclick="return confirm('Yakin Mau Menghapus Negara <?= $dataa['nama_negara']?> ?');">
                                            <button type="button" class="btn btn-danger"> <i class="mdi mdi-alert btn-icon-prepend"></i> Hapus </button>
                                  </a>
                              
                              </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="template-demo">
                      <button type="button" data-bs-toggle="modal" data-bs-target="#tambahnegara" class="btn btn-success btn-icon-text"><i class="mdi mdi-plus-circle btn-icon-prepend"></i> Tambah </button>
                    </div>
                  </div>
                </div>
              </div>

            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabel Jenis Barang</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Id Jenis</th>
                            <th>Nama Jenis Barang</th>
                            <th>Menu</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($barang as $bar) : ?>
                                <tr>
                                    <td><?= $bar['id_jenis']?></td>
                                    <td><?= $bar['nama_jenis']?></td>
                                    <td>
                                        
                                    <a  data-bs-toggle="modal" data-bs-target="#ubahjenisbarang" onclick="barang('<?= $bar['id_jenis']?>', '<?= $bar['nama_jenis']?>')">
                                    <button type="submit" name="jab"  class="btn btn-secondary"> <i class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Edit </button>
                                  </a>
                                        <a href="hapus.php?idjenisbarang=<?= $bar['id_jenis']; ?>" onclick="return confirm('Yakin Mau Menghapus Jenis Barang <?= $bar['nama_jenis']?> ?');">
                                            <button type="button" class="btn btn-danger"> <i class="mdi mdi-alert btn-icon-prepend"></i> Hapus </button>
                                        </a>
                                    </td>
                                </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="template-demo">
                      <button type="button" data-bs-toggle="modal" data-bs-target="#tambahbarang" class="btn btn-success btn-icon-text"><i class="mdi mdi-plus-circle btn-icon-prepend"></i> Tambah </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabel Jenis Document</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Id Jenis Document</th>
                            <th>Nama Document</th>
                            <th>Menu</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($dokument as $doc) : ?>
                          <tr>
                            <td><?= $doc['id_jenis_dokumen']?></td>
                            <td><?= $doc['nama_dokumen']?></td>
                            <td>
                                <a id="ujabatan" data-bs-toggle="modal" data-bs-target="#ubahdok" onclick="dok('<?=$doc['id_jenis_dokumen']?>', '<?= $doc['nama_dokumen']?>')" >
                                    <button type="submit" name="jab"  class="btn btn-secondary"> <i class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Edit </button>
                                </a>
                                <a href="hapus.php?iddokumen=<?= $doc['id_jenis_dokumen']?>" onclick="return confirm('Yakin Mau Menghapus Dokument <?= $doc['nama_dokumen']?> ?');">
                                      <button type="button" class="btn btn-danger"> <i class="mdi mdi-alert btn-icon-prepend"></i> Hapus </button>
                                </a>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="template-demo">
                      <button type="button" data-bs-toggle="modal" data-bs-target="#tambahdokumen" class="btn btn-success btn-icon-text"><i class="mdi mdi-plus-circle btn-icon-prepend"></i> Tambah </button>
                    </div>
                  </div>
                </div>
              </div>


              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tabel Katalog Barang</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Id Karalog</th>
                            <th>Nama katalog Barang</th>
                            <th>File</th>
                            <th>Menu</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($katalog as $kat) : ?>
                                <tr>
                                    <td><?= $kat['id_katalog']?></td>
                                    <td><?= $kat['nama_katalog']?></td>
                                    <td><button type="button" class="btn btn-primary btn-icon-text">
                                            <i class="mdi mdi-file-check btn-icon-prepend"></i> File Katalog 
                                        </button></td>
                                    <td>
                                        <button type="button" class="btn btn-secondary"> <i class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Edit </button>
                                        <button type="button" class="btn btn-danger"> <i class="mdi mdi-alert btn-icon-prepend"></i> Hapus </button>
                                    </td>
                                </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="template-demo">
                      <button type="button" data-bs-toggle="modal" data-bs-target="#tambahbarang" class="btn btn-success btn-icon-text"><i class="mdi mdi-plus-circle btn-icon-prepend"></i> Tambah </button>
                    </div>
                    
                  </div>
                  <br><br><br>
                </div>
                          <br><br><br>
            </div>





    <!-- //method untuk ubah jabatan -->
    <script>
    function idjab(idjab, namajab){
    document.querySelector("#hasilidjab").value = idjab;
    document.querySelector("#hasilnamajab").value = namajab;
    }
    </script>


    <script>
    function idneg(idneg, namaneg){
    document.querySelector("#hasilidneg").value = idneg;
    document.querySelector("#hasilnamaneg").value = namaneg;
    }
    </script>

    <script>
    function barang(idneg, namaneg){
    document.querySelector("#hasilidbarang").value = idneg;
    document.querySelector("#hasilnamabarang").value = namaneg;
    }
    </script>

    <script>
    function dok(idneg, namaneg){
    document.querySelector("#hasiliddok").value = idneg;
    document.querySelector("#hasilnamadok").value = namaneg;
    }
    </script>

<?php include 'footer.php'; ?>