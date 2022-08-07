<h4 class="mb-3">Data Kantor</h4>

<div class="srolling-horizontal mb-3">
    <button class="btn btn-primary" style="margin-right: 15px;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus" style="margin-right: 15px;"></i>Tambah Admin Baru</button>
    <a href="" class="btn btn-success" style="margin-right: 15px;"><i class="fa-solid fa-print" style="margin-right: 15px;"></i>Cetak Tabel</a>
</div>

<div class="capsul">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Item 1</th>
        <th scope="col">Item 2</th>
        <th scope="col">Item 3</th>
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
            <td>Desc Item 2</td>
            <td>Desc Item 3</td>
            <td>Desc Item 3</td>
            <td>
                <a href="<?= base_url(); ?>kantor/ubah" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                <a href="<?= base_url(); ?>kantor/ubah" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
            </td>
        </tr>
    </tbody>
    </table>

    <div class="between">
        <div class="mb-3">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cari Sesuatu ....">
        </div>
        <div>
            <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                <span class="page-link">Previous</span>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
            </nav>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kantor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <!-- start -->
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
        <!-- end -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-arrow-left" style="margin-right: 15px;"></i>Batal</button>
        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cloud-arrow-down" style="margin-right: 15px;"></i>Simpan</button>
      </div>
    </div>
  </div>
</div>