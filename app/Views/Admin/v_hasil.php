<div class="container">
    <br>
    <h1 class="text-center"><?= $judul ?></h1>
    <br>
    <div class="row mb-3">
        <a class="btn btn-info mr-3" href="/Admin/dashboard">Kembali</a>
        <!-- <a class="btn btn-success mr-3" href="#">Import Excel</a> -->
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Divisi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($hasil as $key => $value) { ?>
                <tr>
                    <th><?= $no++; ?></th>
                    <td><?= $value['nama']; ?></td>
                    <td><?= $value['kelas']; ?></td>
                    <td><?= $value['nama_divisi']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>