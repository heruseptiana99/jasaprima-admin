<h4 class="mb-3">Detail Transaksi</h4>

<!-- sedang diproses -->
<div class="col-sm-6 mb-3">
    <div class="capsul-no">
        <h6>Sedang diproses</h6>
        <div class="between mb-2">
            <div>
                Tanggal Transaksi
            </div>
            <div>
                <b>07 - Desember - 2022</b>
            </div>
        </div>
        <div class="between mb-2">
            <div>
                Nomor Bon
            </div>
            <div>
                <b>A-7201</b>
            </div>
        </div>
        <div class="between mb-2">
            <div>
                Kantor
            </div>
            <div>
                <b>Cabang/JP-04</b>
            </div>
        </div>
    </div>
</div>

<!-- data wp -->
<div class="col-sm-6 mb-3">
    <div class="capsul-no">
        <b>Data WP</b>
        <hr>
        <div class="between mb-2">
            <div>
                Nama Lengkap
            </div>
            <div>
                <b>Kemal Ramadhan</b>
            </div>
        </div>
        <div class="between mb-2">
            <div>
                Nomor Hp
            </div>
            <div>
                <b>08986004677</b>
            </div>
        </div>
        <div class="between mb-2">
            <div>
                Alamat
            </div>
            <div style="max-width: 50%; text-align: right;">
                <b>Kp.Cilebak Rt07 Rw03 Desa Rancamanyar Kecamatan Baleendah Kabupaten Bandung 20375</b>
            </div>
        </div>
    </div>
</div>

<!-- Detail Pengurusan -->
<div class="col-sm-6 mb-3">
    <div class="capsul-no">
        <h6>Detail Pengurusan</h6>
        <hr>
        <div class="between mb-2">
            <div>
                Nopol - a/n
            </div>
            <div>
                <b>D 2218 ZDM - Kemal Ramadhan</b>
            </div>
        </div>
        <div class="between mb-2">
            <div>
                Jenis Pengurusan
            </div>
            <div>
                <b>Perpanjang STNK 1 Tahun</b>
            </div>
        </div>
        <div class="between mb-2">
            <div>
                Wilayah
            </div>
            <div>
                <b>Kabupaten Bandung</b>
            </div>
        </div>
        <div class="between mb-2">
            <div>
                Syarat
            </div>
            <div>
                <b>STNK, KTP</b>
            </div>
        </div>
        <div class="between mb-2">
            <div>
                Lain-lain
            </div>
            <div>
                <b>-</b>
            </div>
        </div>
    </div>
</div>

<!-- Rincian Biaya -->
<div class="col-sm-6 mb-3">
    <div class="capsul-no">
        <h6>Rincian Biaya</h6>
        <hr>
        <div class="between mb-2">
            <div>
                Pajak Terlampir
            </div>
            <div>
                <b>Rp. 210.000 ,-</b>
            </div>
        </div>
        <div class="between mb-2">
            <div>
                Proses
            </div>
            <div>
                <b>Rp. 50.000 ,-</b>
            </div>
        </div>
        <hr>
        <div class="between mb-2">
            <div>
                Total
            </div>
            <div>
                <b>Rp. 260.000 ,-</b>
            </div>
        </div>
    </div>
</div>

<div class="capsul mb-3">
    <h5>Rincian Pembayaran</h5>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Item 1</th>
        <th scope="col">Item 2</th>
        <th scope="col">Item 3</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Desc Item 2</td>
            <td>Desc Item 3</td>
            <td>Desc Item 3</td>
            <td>
                <a href="<?= base_url(); ?>transaksi/detail" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                <a href="<?= base_url(); ?>transaksi/detail" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
            </td>
        </tr>
    </tbody>
    </table>
</div>

<div class="srolling-horizontal mb-3">
    <a href="<?= base_url(); ?>transaksi" class="btn btn-danger" style="margin-right: 15px;"><i class="fa-solid fa-arrow-left" style="margin-right: 15px;"></i>Batal</a>
    <a href="" class="btn btn-primary" style="margin-right: 15px;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-cloud-arrow-down" style="margin-right: 15px;"></i>Bayar</a>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Pembayaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <!-- start -->
          <div class="mb-3">
              <label for="nominal" class="form-label">Jumlah Pembayaran</label>
              <input type="text" class="form-control" id="nominal">
          </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Pembayaran</label>
            <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
        </div>
        <!-- end -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-arrow-left" style="margin-right: 15px;"></i>Batal</button>
        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cloud-arrow-down" style="margin-right: 15px;"></i>Simpan</button>
      </div>
    </div>
  </div>
</div>