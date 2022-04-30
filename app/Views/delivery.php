<?= $this->extend('template-navbar') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row g-2 mt-3">
    <?php for ($i = 0; $i < 6; $i++) : ?>
      <div class="card mb-3 shadow-sm">
        <div class="card-body">
          <div class="row g-0">
            <div class="col-2 d-flex align-items-center">
              <img src="/assets/img/sayuran/terong.jpg" class="img-fluid rounded-start">
            </div>
            <div class="col-10 ps-3 row g-0 align-items-center">
              <div class="col-12 fs-5 text-truncate"><?= 'Barang ' . ($i + 1) ?></div>
              <div class="col-12 h5 mb-0"><?= 'Rp. XXX.XXX' ?></div>
              <div class="col-6">Jumlah: <?= 'x' ?></div>
              <div class="col-6 text-muted">Status: <?= 'Sedang dikirim ke alamat tujuan' ?></div>
            </div>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</div>
<?= $this->endSection() ?>