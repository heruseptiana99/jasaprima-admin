<h4 class="mb-3">Data Admin</h4>

<div class="srolling-horizontal mb-3">
    <a href="<?= base_url(); ?>admin/aksi" class="btn btn-primary" style="margin-right: 15px;"><i class="fa-solid fa-plus" style="margin-right: 15px;"></i>Tambah Admin Baru</a>
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
                <a href="" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                <a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
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