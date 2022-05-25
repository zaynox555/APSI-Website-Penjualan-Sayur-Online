<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Online Bootstrap, JQuery, Font Awesome 5 Kit -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/3ff9f42339.js" crossorigin="anonymous"></script>

  <!-- CSS  -->
  <link rel="stylesheet" href="<?= base_url("assets/css/home.css") ?>" />
  <?php if (isset($style)) {
    $style = explode(',', $style);
    foreach ($style as $css) {
      echo link_tag("assets/css/$css.css");
    }
    unset($css, $style);
  } ?>

  <!-- JQuery based Script -->
  <script type="text/javascript" src="<?= base_url('assets/js/main.js') ?>"></script>

  <title>Green Groceries</title>
</head>

<body>

  <!-- Navbar -->
  <header class="navbar navbar-expand-md navbar-dark bg-primary sticky-top">
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
            <a class="nav-link active" href="/Cart">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </a>
          </li>

          <li class="vr mx-2 text-white"></li>

          <li class="nav-item" title="Pengiriman">
            <a class="nav-link active" href="/Delivery">
              <i class="fa fa-truck" aria-hidden="true"></i>
            </a>
          </li>

          <li class="vr mx-2 text-white"></li>

          <li class="nav-item" title="Akun">
            <a class="nav-link active" href="/Account">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
            </a>
          </li>

          <li class="vr mx-2 text-white"></li>

          <li class="nav-item" title="Keluar">
            <a class="nav-link active" href="/Logout">
              <i class="fa fa-sign-out" aria-hidden="true"></i>
            </a>
          </li>

        </ul>

      </div>
    </div>
  </header>
  <!-- End Navbar -->

  <!-- Main Content -->
  <?= $this->renderSection('content') ?>

  <!-- Independent Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>