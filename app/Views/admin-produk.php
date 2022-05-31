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
          <tr class="text-center">
            <th>ID Produk</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <form method="post">
            <tr>
              <td class="p-0" colspan="2"><input class="form-control" type="file" name="foto" placeholder="Foto Produk"></td>
              <td class="p-0"><input class="form-control" type="text" name="nama" placeholder="Nama Produk"></td>
              <td class="p-0"><input class="form-control" type="number" name="harga" placeholder="Harga"></td>
              <td class="p-0"><input class="form-control" type="number" name="stok" placeholder="Stok"></td>
              <td class="p-0"><input class="form-control" type="text" name="nama" placeholder="Kategori"></td>
              <td class="p-0"><a class="btn btn-sm btn-success">Tambah Produk</a></td>
            </tr>
          </form>
          <?php for ($i = 0; $i < 6; $i++) : ?>
            <tr class=" text-center align-middle">
              <td><?= $i ?></td>
              <td><img src="/assets/img/sayuran/wortell.jpg" alt="Foto Produk" height="100"></td>
              <td><?= 'Lorem ipsum dolor sit amet.' ?></td>
              <td><?= number_to_currency(999999, 'IDR', 'id_ID') ?></td>
              <td><?= 999 ?></td>
              <td><?= 'Lorem ipsum dolor sit amet.' ?></td>
              <td>
                <a href="<?= base_url('/admin/produk/edit/' . $i) ?>" class="btn btn-success">Edit</a>
                <a href="<?= base_url('/admin/produk/delete/' . $i) ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php endfor; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection() ?>