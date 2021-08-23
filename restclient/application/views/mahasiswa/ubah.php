<div class="container">
    <div class="row mt-3">
        <div class="col-md-6"> 
            <div class="card">
                <h5 class="card-header">Form Ubah Data Mahasiswa</h5>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" autocomplete="off" name="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small  class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">Nim</label>
                            <input type="text" class="form-control" id="nrp" autocomplete="off" name="nrp"  value="<?= $mahasiswa['nrp']; ?>">
                            <small  class="form-text text-danger"><?= form_error('nrp') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" autocomplete="off" name="email"  value="<?= $mahasiswa['email']; ?>">
                            <small  class="form-text text-danger"><?= form_error('email') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <?php foreach($jurusan as $j) : ?>
                                    <?php if ($j == $mahasiswa['jurusan']): ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>    
                        <button type="submit" class="btn btn-primary float-right" name="ubah">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>