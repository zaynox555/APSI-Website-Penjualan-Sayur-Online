<?= $this->extend('template-navbar') ?>

<?= $this->section('content') ?>
<div class="container py-5">
  <div class="row g-0 row-cols-1 justify-content-center align-items-center">
    <div class="col">
      <div class="card rounded-3 shadow-lg">
        <div class="card-body">
          <h4 class="card-title text-center mb-3">Pengaturan Akun</h4>
          <form class="row row-cols-1 row-cols-lg-2 g-4" method="POST">

            <div class="col">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email" value="<?= $user['email'] ?>">
              <div class="form-text text-danger"><?= (isset($error['email'])) ? $error['email'] : '' ?></div>
            </div>

            <div class="col">
              <label for="nohp" class="form-label">Nomor Telepon</label>
              <input type="text" name="nohp" class="form-control" id="nohp" value="<?= $user['nohp'] ?>">
              <div class="form-text text-danger"><?= (isset($error['nohp'])) ? $error['nohp'] : '' ?></div>
            </div>

            <div class="col">
              <label for="password" class="form-label">Password Baru</label>
              <input type="password" name="password" class="form-control" id="password">
              <div class="form-text text-danger"><?= (isset($error['password'])) ? $error['password'] : '' ?></div>
            </div>

            <div class="col">
              <label for="confirmation" class="form-label">Konfirmasi Password Baru</label>
              <input type="password" name="confirmation" class="form-control" id="confirmation">
              <div class="form-text text-danger"><?= (isset($error['confirmation'])) ? $error['confirmation'] : '' ?></div>
            </div>

            <div class="col w-100">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" value="<?= $user['nama'] ?>">
              <div class="form-text text-danger"><?= (isset($error['nama'])) ? $error['nama'] : '' ?></div>
            </div>

            <div class="col w-100">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea name="alamat" class="form-control" id="alamat" rows="3"><?= $user['alamat'] ?></textarea>
              <div class="form-text text-danger"><?= (isset($error['alamat'])) ? $error['alamat'] : '' ?></div>
            </div>

            <div class="col w-100">
              <button type="submit" name="save" class="btn btn-success w-100">Simpan Perubahan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>