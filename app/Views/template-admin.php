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
  <header class="navbar navbar-expand-md navbar-dark bg-success sticky-top">
    <div class="container-xxl flex-wrap flex-md-nowrap">
      <a class="navbar-brand" href="/">
        <img src="/assets/img/GREEN-GROCERY-logos.jpeg" height="46">
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">

          <li class="nav-item" title="Penjualan">
            <a class="nav-link active" href="/Admin">Penjualan</a>
          </li>

          <li class="nav-item" title="Produk">
            <a class="nav-link active" href="/Admin/produk">Produk</a>
          </li>

          <li class="nav-item" title="Keluar">
            <a class="nav-link active" href="/Logout">Keluar</a>
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