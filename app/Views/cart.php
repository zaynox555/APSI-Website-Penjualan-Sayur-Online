<?= $this->extend('template-navbar') ?>

<?= $this->section('content') ?>
<form action="/Checkout/" method="post" id="checkoutForm">
  <div class="container">
    <div class="row mt-0 g-5 align-items-start">

      <div class="col-7 mt-4" style="overflow-y: scroll; height: 80vh;">

        <!-- Select All Checkbox -->
        <div class="row sticky-top bg-white">
          <div class="col me-auto form-check d-flex align-items-center">
            <input class="form-check-input mt-0 ms-0 me-2" type="checkbox" id="selectAll" onclick="$('.item-check-group input:checkbox').prop('checked', this.checked);">
            <label class="form-check-label" for="selectAll">Pilih Semua</label>
          </div>
          <div class="col text-end">
            <button type="button" class="btn btn-outline-danger" onclick="$('.item-check-group input:checkbox').each(function(index, element){this.checked ? $(this).parents('.card').remove() : false});">
              <i class="fa fa-trash" aria-hidden="true"></i> Hapus
            </button>
          </div>
          <hr class="my-2">
        </div>

        <!-- Items -->
        <div class="item-check-group">
          <?php for ($i = 0; $i < 10; $i++) : ?>
            <div class="card mb-2 shadow-sm">
              <div class="card-body">
                <div class="form-check ps-0 d-flex align-items-center">
                  <div class="me-3">
                    <input class="form-check-input ms-0" type="checkbox" id="<?= 'item' . ($i + 1) ?>" checked>
                  </div>
                  <label class="form-check-label" for="<?= 'item' . ($i + 1) ?>">
                    <div class="row g-0">
                      <div class="col-2 d-flex align-items-center">
                        <img src="/assets/img/sayuran/tomat.jpg" class="img-fluid">
                      </div>
                      <div class="col-10 row g-0 ps-3 align-items-center">
                        <div class="col-12 fs-5 text-truncate"><?= 'Barang ' . ($i + 1) ?></div>
                        <div class="col-7 h5 mb-0"><?= 'Rp. XXX.XXX' ?></div>
                        <div class="col-3 text-end">Jumlah</div>
                        <div class="col-2 px-2">
                          <input type="hidden" name="[<?= $i ?>]itemID" value="<?= '' ?>">
                          <input type="number" name="[<?= $i ?>]amount" class="form-control form-control-sm p-1 text-center" value="1" min="1" max="99">
                        </div>
                      </div>
                    </div>
                  </label>
                </div>
              </div>
            </div>
          <?php endfor; ?>
        </div>

      </div>

      <!-- Buy Form -->
      <div class="col-5 row mt-4 justify-content-center align-content-center">

        <div class="col-12">
          <div class="card shadow-sm mb-3">

            <!-- Address -->
            <div class="card-body">
              <div class="mb-3">
                <label for="address" class="form-labels">Alamat Pengiriman</label>
                <textarea class="form-control" rows="3" name="address" id="address"></textarea>
              </div>

              <div class="mb-3">
                <label for="phone" class="form-labels">Nomor Telepon</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="081234567890">
              </div>

              <div class="mb-3">
                <label for="note" class="form-labels">Catatan</label>
                <textarea class="form-control" name="note" id="note" rows="2"></textarea>
              </div>
            </div>

          </div>
        </div>

        <!-- Buy Now -->
        <div class="col-12">
          <button type="submit" class="btn btn-success w-100">Beli</button>
        </div>

      </div>

    </div>
  </div>
</form>
<?= $this->endSection() ?>