<h4 class="mb-3">Data Area Pengurusan</h4>

<div class="srolling-horizontal mb-3">
    <button class="btn btn-primary" style="margin-right: 15px;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus" style="margin-right: 15px;"></i>Tambah Area Pengurusan</button>
    <a href="" class="btn btn-success" style="margin-right: 15px;"><i class="fa-solid fa-print" style="margin-right: 15px;"></i>Cetak Tabel</a>
</div>

<div class="capsul">
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
            <td>Desc Item 1</td>
            <td>Desc Item 2</td>
            <td>Desc Item 3</td>
            <td>
                <a href="<?= base_url(); ?>pengurusan/ubah" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                <a href="<?= base_url(); ?>pengurusan/ubah" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Area Pengurusan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <!-- start -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pengurusan</label>
            <input type="text" class="form-control" id="nama">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Pengurusan</label>
            <input type="text" class="form-control" id="harga">
        </div>
        <div class="mb-3">
            <label for="waktu" class="form-label">Waktu Pengurusan (Hari)</label>
            <input type="text" class="form-control" id="waktu">
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