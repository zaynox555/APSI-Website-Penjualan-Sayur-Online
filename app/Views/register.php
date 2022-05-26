<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="bg-success">
  <div class="row g-0 min-vh-100 justify-content-center align-items-center">
    <div class="col-6">
      <div class="card rounded-3">
        <div class="card-body">
          <h4 class="card-title text-center mb-3">Pendaftaran</h4>
          <form class="row row-cols-1 row-cols-lg-2 g-4" method="POST" action="/Register/processing">

            <div class="col">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" value="<?= old('email') ?>">
              <div class="form-text text-danger"><?= (isset($error['email'])) ? $error['email'] : '' ?></div>
            </div>

            <div class="col">
              <label for="nohp" class="form-label">Nomor Telepon</label>
              <div class="input-group">
                <span class="input-group-text" id="countryNumber">+62</span>
                <input type="text" class="form-control" name="nohp" id="nohp" value="<?= old('nohp') ?>" aria-describedby="countryNumber">
              </div>
              <div class="form-text text-danger"><?= (isset($error['nohp'])) ? $error['nohp'] : '' ?></div>
            </div>

            <div class="col">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
              <div class="form-text text-danger"><?= (isset($error['password'])) ? $error['password'] : '' ?></div>
            </div>

            <div class="col">
              <label for="confirmation" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="confirmation" id="confirmation">
              <div class="form-text text-danger"><?= (isset($error['confirmation'])) ? $error['confirmation'] : '' ?></div>
            </div>

            <div class="col w-100">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" id="nama" value="<?= old('nama') ?>">
              <div class="form-text text-danger"><?= (isset($error['nama'])) ? $error['nama'] : '' ?></div>
            </div>

            <div class="col w-100">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea class="form-control" name="alamat" id="alamat" rows="3"><?= old('alamat') ?></textarea>
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