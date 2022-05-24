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
              <input type="email" name="email" class="form-control" id="email" required>
            </div>

            <div class="col">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" required>
            </div>

            <div class="col">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" required>
            </div>

            <div class="col">
              <label for="nohp" class="form-label">Nomor Telepon</label>
              <input type="text" name="nohp" class="form-control" id="nohp" required>
            </div>

            <div class="col w-100">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea name="alamat" class="form-control" id="alamat" rows="3" required></textarea>
            </div>

            <div class="col w-100">
              <button type="submit" class="btn btn-success w-100">Simpan Perubahan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>