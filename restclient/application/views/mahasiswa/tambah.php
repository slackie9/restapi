<div class="container">
    <div class="row mt-3">
        <div class="col-md-6"> 
            <div class="card">
                <h5 class="card-header">Form Tambah Data Mahasiswa</h5>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" autocomplete="off" name="nama">
                            <small  class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">Nim</label>
                            <input type="text" class="form-control" id="nrp" autocomplete="off" name="nrp">
                            <small  class="form-text text-danger"><?= form_error('nrp') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" autocomplete="off" name="email">
                            <small  class="form-text text-danger"><?= form_error('email') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Computer Science">Computer Science</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Statistics">Statistics</option>
                                <option value="Chemical">Chemical</option>
                                <option value="Pharmacy">Pharmacy</option>
                                <option value="Physics">Physics</option>
                            </select>
                        </div>    
                        <button type="submit" class="btn btn-primary float-right" name="tambah">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>