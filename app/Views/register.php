<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="bg-success">
  <div class="row g-0 min-vh-100 justify-content-center align-items-center">
    <div class="col-6">
      <div class="card rounded-3">
        <div class="card-body">
          <h4 class="card-title text-center mb-3">Pendaftaran</h4>
          <form class="row row-cols-1 row-cols-lg-2 g-4" method="POST">

            <div class="col">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>">
              <div class="form-text text-danger"><?= (isset($error['email'])) ? $error['email'] : '' ?></div>
            </div>

            <div class="col">
              <label for="nohp">Nomor Telepon</label>
              <input type="text" class="form-control" id="nohp" name="nohp" value="<?= old('nohp') ?>">
              <div class="form-text text-danger"><?= (isset($error['nohp'])) ? $error['nohp'] : '' ?></div>
            </div>

            <div class="col">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
              <div class="form-text text-danger"><?= (isset($error['password'])) ? $error['password'] : '' ?></div>
            </div>

            <div class="col">
              <label for="confirmation">Confirm Password</label>
              <input type="password" class="form-control" id="confirmation" name="confirmation">
              <div class="form-text text-danger"><?= (isset($error['confirmation'])) ? $error['confirmation'] : '' ?></div>
            </div>

            <div class="col w-100">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama') ?>">
              <div class="form-text text-danger"><?= (isset($error['nama'])) ? $error['nama'] : '' ?></div>
            </div>

            <div class="col w-100">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= old('alamat') ?></textarea>
              <div class="form-text text-danger"><?= (isset($error['alamat'])) ? $error['alamat'] : '' ?></div>
            </div>

            <div class="col w-100">
              <button type="submit" name="register" class="btn btn-success w-100">Daftar</button>
            </div>

            <div class="col w-100">
              <p class="text-center">Sudah punya akun? <a href="/Login">Login</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>