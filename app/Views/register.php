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
              <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="col">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="col">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="col">
              <label for="nohp">Nomor Telepon</label>
              <input type="text" class="form-control" id="nohp" name="nohp" required>
            </div>

            <div class="col w-100">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>

            <div class="col w-100">
              <button type="submit" name="register" class="btn btn-success w-100">Daftar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>