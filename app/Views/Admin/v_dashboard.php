<div class="container">
    <br>
    <h1 class="text-center">halaman admin</h1>
    <br>
    <div class="alert alert-primary" role="alert">
        <p>anda login sebagai <?php echo(session()->get('username')); ?>, dan ststus anda <?php echo(session()->get('statusadmin')); ?></p>
        <div class="text-right">
            <a class="btn btn-info" href="/Admin/logout">logout</a>
            <a class="btn btn-success" href="/Excel/export_all_data">Export to Excel</a>
        </div>
    </div>
    <br>
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Hasil Pemilihan Divisi Untuk</h5>
            <ul class="list-group">
                <li class="list-group-item"><div class="d-flex justify-content-between"><p>Semua data yang masuk</p> <a class="btn btn-primary" href="/Admin/semua_data/">lihat</a></div></li>
                <li class="list-group-item"><div class="d-flex justify-content-between"><p>Hanya data kelas 10</p> <a class="btn btn-primary" href="/Admin/data_kelas/10">lihat</a></div></li>
                <li class="list-group-item"><div class="d-flex justify-content-between"><p>Hanya data kelas 11</p> <a class="btn btn-primary" href="/Admin/data_kelas/11">lihat</a></div></li>
                <li class="list-group-item"><div class="d-flex justify-content-between"><p>Hanya data divisi pemrograman</p> <a class="btn btn-primary" href="/Admin/data_divisi/1">lihat</a></div></li>
                <li class="list-group-item"><div class="d-flex justify-content-between"><p>Hanya data divisi aeromodelling</p> <a class="btn btn-primary" href="/Admin/data_divisi/2">lihat</a></div></li>
                <li class="list-group-item"><div class="d-flex justify-content-between"><p>Hanya data divisi civil</p> <a class="btn btn-primary" href="/Admin/data_divisi/3">lihat</a></div></li>
            </ul>
        </div>
    </div>
</div>
