<?= $this->extend('template-admin') ?>

<?= $this->section('content') ?>
<div class="container-xxl">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Riwayat Pemesanan</h3>
    </div>
    <div class="card-body">
      <div class="mb-3">
        <form method="post">
          <button type="submit" name="SaveAsPdf" class="btn btn-sm btn-success">Save as PDF</button>
        </form>
      </div>
      <table class="table table-sm table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Tanggal</th>
            <th>Kode Pesanan</th>
            <th>ID produk</th>
            <th>Jumlah Pembelian</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i = 0; $i < 20; $i++) : ?>
            <tr>
              <td><?= date('d-m-Y, H:i:s') ?></td>
              <td><?= 'XXXX-XXXX-XXXX-XXXX' ?></td>
              <td><?= 0 ?></td>
              <td><?= 999 ?></td>
              <td><?= number_to_currency(999999, 'IDR', 'id_ID') ?></td>
            </tr>
          <?php endfor; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection() ?>