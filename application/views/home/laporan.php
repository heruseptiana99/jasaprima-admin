<h4 class="mb-3">Laporan Semua Transaksi</h4>

<div class="col-sm-8">
<div class="capsul mb-3">
    <div class="line">
        <div class="row">
            <div class="col-sm-4 mb-3">
                <label for="cari" class="form-label">Cari</label>
                <input type="email" class="form-control" id="cari">
            </div>
            <div class="col-sm-4 mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal">
            </div>
            <div class="col-sm-4 mb-3">
                <label for="cari" class="form-label">Kantor</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
    </div>
    <div class="line">
        <label for="" class="form-label" style="margin-right: 15px;">Status</label>
        <a href="" class="btn r-circle active">Semua</a>
        <a href="" class="btn r-circle">Diproses</a>
        <a href="" class="btn r-circle">Menunggu Pelunasan</a>
        <a href="" class="btn r-circle">Selesai</a>
    </div>
</div>
</div>

<div class="srolling-horizontal mb-3">
    <div class="box-normal">
        <div class="vertical">
            <div>
                <i>Pendapatan (Rp)</i>
            </div>
            <div>
                <h5>14</h5>
            </div>
        </div>
    </div>
    <div class="box-normal">
        <div class="vertical">
            <div>
                <i>Pendapatan (Rp)</i>
            </div>
            <div>
                <h5>140.000.000.000,-</h5>
            </div>
        </div>
    </div>
    <div class="box-normal">
        <div class="vertical">
            <div>
                <i>Pendapatan (Rp)</i>
            </div>
            <div>
                <h5>140.000.000.000,-</h5>
            </div>
        </div>
    </div>
    <div class="box-normal">
        <div class="vertical">
            <div>
                <i>Pendapatan (Rp)</i>
            </div>
            <div>
                <h5>140.000.000.000,-</h5>
            </div>
        </div>
    </div>
</div>

<div class="capsul mb-3">
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

<div class="srolling-horizontal mb-3">
    <a href="" class="btn btn-success" style="margin-right: 15px;"><i class="fa-solid fa-print" style="margin-right: 15px;"></i>Cetak Tabel</a>
</div>