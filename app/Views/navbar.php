<header class="navbar navbar-expand-md navbar-dark bg-success">
  <div class="container-xxl flex-wrap flex-md-nowrap">
    <a class="navbar-brand" href="/">
      <img src="/assets/img/GREEN-GROCERY-logos.jpeg" height="46">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <form class="d-flex w-50 me-auto">
        <div class="input-group">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search" aria-describedby="button-search">
          <button class="btn btn-light" id="button-search">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </div>
      </form>

      <ul class="navbar-nav mb-2 mb-lg-0 fs-5">

        <li class="nav-item" title="Keranjang">
          <a class="nav-link active" data-bs-toggle="modal" data-bs-target="#myCart">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          </a>
        </li>

        <li class="vr mx-2 text-white"></li>

        <li class="nav-item" title="Pengiriman">
          <a class="nav-link active" href="/Delivery/">
            <i class="fa fa-truck" aria-hidden="true"></i>
          </a>
        </li>

        <li class="vr mx-2 text-white"></li>

        <li class="nav-item" title="Akun">
          <a class="nav-link active" href="/Account/">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
          </a>
        </li>

      </ul>

    </div>
  </div>
</header>

<!-- Modal -->
<div class="modal fade" id="myCart" tabindex="-1" aria-labelledby="myCartLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header px-5">
        <h5 class="modal-title" id="myCartLabel">Keranjang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="/Checkout/" method="post" id="checkoutForm">
        <div class="container">
          <div class="row row-cols-2 g-2">

            <div class="col modal-body">

              <!-- Select All -->
              <div class="row">
                <div class="col me-auto form-check d-flex align-items-center">
                  <input class="form-check-input mt-0 ms-0 me-2" type="checkbox" id="selectAll" onclick="$('.item-check-group input:checkbox').prop('checked', this.checked);">
                  <label class="form-check-label" for="selectAll">Pilih Semua</label>
                </div>
                <div class="col text-end">
                  <button type="button" class="btn btn-outline-danger" onclick="$('.item-check-group input:checkbox').each(function(index, element){this.checked ? $(this).parents('.card').remove() : false});">
                    <i class="fa fa-trash" aria-hidden="true"></i> Hapus
                  </button>
                </div>
              </div>
              <hr>

              <!-- Items -->
              <div class="item-check-group">
                <?php for ($i = 0; $i < 5; $i++) : ?>
                  <div class="card mb-2 shadow-sm">
                    <div class="card-body">
                      <div class="form-check ps-0 d-flex align-items-center">
                        <div class="me-3">
                          <input class="form-check-input ms-0" type="checkbox" id="<?= 'item' . ($i + 1) ?>">
                          <input type="hidden" name="<?= $i ?>" value="<?= 'cookie' ?>">
                        </div>
                        <label class="form-check-label" for="<?= 'item' . ($i + 1) ?>">
                          <div class="row">
                            <div class="col-2">
                              <img src="/assets/img/sayuran/tomat.jpg" class="img-fluid">
                            </div>
                            <div class="col-10 row align-content-center">
                              <div class="col-12 fs-5 text-truncate"><?= 'Barang ' . ($i + 1) ?></div>
                              <div class="col-12 h5 mb-0"><?= 'Rp. XXX.XXX' ?></div>
                            </div>
                          </div>
                        </label>
                      </div>
                    </div>
                  </div>
                <?php endfor; ?>
              </div>

            </div>

            <div class="col modal-body row justify-content-center align-content-center">

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

    </div>
  </div>
</div>