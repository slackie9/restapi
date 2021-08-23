<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Mahasiswa
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $mahasiswa['nama']; ?> </h5>
                <h6 class="card-title"><?= $mahasiswa['nrp']; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></h6>
                <h6 class="card-title"><?= $mahasiswa['jurusan']; ?></h6>
                <a href="<?= base_url(); ?>mahasiswa/index" class="btn btn-primary">Kembali</a>
                
            </div>
            </div>
        </div>
    </div>
</div>