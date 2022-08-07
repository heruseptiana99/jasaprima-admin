<h4 class="mb-3">Ubah Data Kantor</h4>

<!-- start -->
<div class="col-sm-8">
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Kantor</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi Kantor</label>
            <input type="text" class="form-control" id="lokasi">
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Alamat Kantor</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="kode" class="form-label">Kode Kantor</label>
            <input type="text" class="form-control" id="kode">
        </div>
</div>
        <!-- end -->

<div class="srolling-horizontal mb-3">
    <a href="<?= base_url(); ?>kantor" class="btn btn-danger" style="margin-right: 15px;"><i class="fa-solid fa-arrow-left" style="margin-right: 15px;"></i>Batal</a>
    <a href="" class="btn btn-primary" style="margin-right: 15px;"><i class="fa-solid fa-cloud-arrow-down" style="margin-right: 15px;"></i>Simpan</a>
</div>