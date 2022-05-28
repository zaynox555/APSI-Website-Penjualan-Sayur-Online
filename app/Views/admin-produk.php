<?= $this->extend('template-admin') ?>

<?= $this->section('content') ?>
<div class="container-xxl">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Produk</h3>
    </div>
    <div class="card-body">
      <table class="table table-sm table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>ID Produk</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($produk as $p) : ?>
            <tr>
              <td><?= $p['id'] ?></td>
              <td><?= $p['nama'] ?></td>
              <td><?= number_to_currency($p['harga'], 'IDR', 'id_ID') ?></td>
              <td><?= $p['stok'] ?></td>
              <td><?= $p['kategori'] ?></td>
              <td>
                <a href="<?= base_url('/admin/produk/edit/' . $p['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="<?= base_url('/admin/produk/delete/' . $p['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection() ?>