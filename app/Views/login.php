<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="bg-success">
  <div class="container">
    <div class="row g-0 vh-100 align-items-center justify-content-center">
      <div class="col-6 h-75">
        <img src="/assets/img/GREEN-GROCERY-logos_transparent.png" class="img-fluid">
      </div>
      <div class="col-1 mx-0 px-0 py-3 align-self-stretch">
        <div class="vr h-100"></div>
      </div>
      <div class="col-4">
        <div class="card rounded-3">
          <div class="card-body">
            <h5 class="card-title text-center mb-3">Login</h5>
            <form class="row row-cols-1 g-0" method="POST">
              <div class="col mb-3">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
              </div>
              <div class="col mb-4">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
              </div>
              <div class="col">
                <button type="submit" class="btn btn-success w-100">Masuk</button>
              </div>
              <div class="col my-2 d-flex">
                <div class="col-5">
                  <hr>
                </div>
                <div class="col-2 text-center">ATAU</div>
                <div class="col-5">
                  <hr>
                </div>
              </div>
              <div class="col">
                <a class="btn btn-outline-secondary w-100" href="/Register/">Daftar</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>