<div class="container">
    <div class="mx-auto" style="width: 100%;margin-top:30px;margin-bottom:30px;">
        <h1 class="text-center judul">Pemilihan Divisi Sintech</h1>
    </div>
    <div class="card" style="box-shadow: 0px 4px 8px 0px #757575;border-radius: 0px">
        <div class="card-body">
            <div class="row">
                <?php foreach ($divisi as $key => $value) { ?>
                    <div class="col"><br>
                        <div class="d-flex justify-content-center">
                            <div class="card card1 item-card card-block" style="width: 18rem;">
                                <img src="/templates/img/<?= $value['path_foto']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $value['nama_divisi']; ?></h5>
                                    <p class="card-text"><?= $value['keterangan']; ?></p>
                                    <a href="<?= base_url('Vote/pilih_divisi/' .$value['id_divisi']) ?>" class="btn btn-primary" onclick="return confirm('Apakah anda yakin ingin memilih divisi ini?')">Pilih</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="bg-blue py-4">
        <div class="row px-3"> 
            <small class="ml-4 ml-sm-5 mb-2">Copyright Sintech &copy;2020. All rights reserved.</small>
        </div>
    </div>
    <br>
</div>
