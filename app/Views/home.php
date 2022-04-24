<?= $this->extend('template-navbar') ?>

<?= $this->section('content') ?>
<div class="container">

  <!-- bootstrap card -->
  <div class="row row-cols-2 row-cols-md-3 m-2 g-3">

    <div class="w-100 my-3 text-center h4">SAYURAN UMBI</div>

    <?php for ($i = 0; $i < 5; $i++) : ?>
      <div class="col">
        <div class="card h-100 shadow-lg">
          <div class="card-body row row-cols-2 g-0 mb-2">
            <img src="/assets/img/sayuran/kentang.jpg" class="card-img-top mb-2">
            <p class="card-title text-truncate col-8 mb-2">Kentang 1 Kg</p>
            <h5 class="card-text col-4 mb-2"><?= number_to_currency(24000, 'IDR', 'id_ID') ?></h5>
            <button class="btn btn-outline-success col-2 me-2">
              <i class="fa fa-cart-plus" aria-hidden="true"></i>
            </button>
            <button class="btn btn-success flex-grow-1">Beli Sekarang</button>
          </div>
        </div>
      </div>
    <?php endfor; ?>

  </div>

</div>
<?= $this->endSection() ?>