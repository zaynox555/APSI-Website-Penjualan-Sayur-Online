<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="my-5 mx-4">
  <h1 class="text-center mb-4">LAPORAN PENJUALAN</h1>

  <table>
    <thead>
      <tr>
        <th>Tanggal</th>
        <th>Kode Pesanan</th>
        <th>Nama produk</th>
        <th>Jumlah Pembelian</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i = 0; $i < 20; $i++) : ?>
        <tr>
          <td><?= date('d-m-Y') ?></td>
          <td><?= 'XXXX-XXXX-XXXX-XXXX' ?></td>
          <td><?= 0 ?></td>
          <td><?= 999 ?></td>
          <td><?= number_to_currency(999999, 'IDR', 'id_ID') ?></td>
        </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</div>
<?= $this->endSection() ?>