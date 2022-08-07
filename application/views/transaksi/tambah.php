<h4 class="mb-3">Tambah Transaksi</h4>

<div class="col-sm-8 mb-3">
    <div class="capsul-no">
        <h6>Data Wajib Pajak (WP)</h6>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                    <label for="no" class="form-label">Nomor Hp</label>
                    <input type="text" class="form-control" id="no">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="alamat" rows="5"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="capsul-no mb-3">
    <h6>Data Pengurusan</h6>
    <div class="row">
        <div class="col-sm-4 mb-3">
            <label for="bon" class="form-label">Nomor BON</label>
            <input type="text" class="form-control" id="bon">
        </div>
        <div class="col-sm-4 mb-3">
            <label for="jenis" class="form-label">Jenis Pengurusan</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-sm-4 mb-3">
            <label for="pajak" class="form-label">Pajak Terlampir</label>
            <input type="text" class="form-control" id="pajak">
        </div>
        <div class="col-sm-4 mb-3">
            <label for="nopol" class="form-label">Nomor Polisi</label>
            <input type="text" class="form-control" id="nopol">
        </div>
        <div class="col-sm-4 mb-3">
            <label for="nopol" class="form-label">Syarat Pengurusan</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="stnk">
                    <label class="form-check-label" for="stnk">
                        STNK Asli
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="fc">
                    <label class="form-check-label" for="fc">
                        STNK Fotocopy
                    </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="ktp">
                    <label class="form-check-label" for="ktp">
                        KTP Asli
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="ktpfc">
                    <label class="form-check-label" for="ktpfc">
                        KTP Fotocopy
                    </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-3">
            <label for="biaya" class="form-label">Biaya Proses</label>
            <input type="text" class="form-control" id="biaya">
        </div>
        <div class="col-sm-4 mb-3">
            <label for="wilayah" class="form-label">Wilayah</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-sm-4 mb-3">
            <label for="lain" class="form-label">Lain lain</label>
            <input type="text" class="form-control" id="lain">
        </div>
        <div class="col-sm-4 mb-3">
            <label for="total" class="form-label">Total Harga</label>
            <input type="text" class="form-control" id="total">
        </div>
    </div>
</div>

<div class="srolling-horizontal mb-3">
    <a href="<?= base_url(); ?>transaksi" class="btn btn-danger" style="margin-right: 15px;"><i class="fa-solid fa-arrow-left" style="margin-right: 15px;"></i>Batal</a>
    <a href="" class="btn btn-primary" style="margin-right: 15px;"><i class="fa-solid fa-cloud-arrow-down" style="margin-right: 15px;"></i>Simpan</a>
</div>