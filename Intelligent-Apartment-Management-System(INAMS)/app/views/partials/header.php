<link rel="stylesheet" href ="<?= ROOT ?>/assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href ="<?= ROOT ?>/assets/css/public-header.css">
<title><?= APP_NAME ?></title>

<!------------------------------------------------HEADER--------------------------------------------------------->
<!--<div class="header-container px-5">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="#">
          <img src="assets/images/logo.png" width="200" height="100" alt="">
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 fs-3">
        <li class ="list"><a href="#" class="nav-link px-2 text-light">Home</a></li>
        <li class ="list"><a href="#" class="nav-link px-2 text-light">Features</a></li>
        <li class ="list"><a href="#" class="nav-link px-2 text-light">Pricing</a></li>
        <li class ="list"><a href="#" class="nav-link px-2 text-light">FAQs</a></li>
        <li class ="list"><a href="#" class="nav-link px-2 text-light">About</a></li>
      </ul>

      <div class="col-md-3 text-end text-light">
        <button type="button" class="btn btn-success me-2 shadow-lg">Login</button>
        <button type="button" class="btn btn-success shadow-lg">Sign-up</button>
      </div>
    </header>
  </div>-->

  <header class="p-3 mb-3 border-bottom sticky-top" style ="background-color: #004643;">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="<?= ROOT ?>/home" class="d-flex align-items-center mb-2 mb-lg-0 me-5 link-body-emphasis text-decoration-none">
        <img src="assets/images/logo.png" width="200" height="100" alt="">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?= ROOT ?>/home" class="pub-menu px-2 text-light">Home</a></li>
          <li><a href="<?= ROOT ?>/apartment" class="pub-menu px-2 text-light">Apartments</a></li>
          <li><a href="<?= ROOT ?>/tasks" class="pub-menu px-2 text-light">List of Task</a></li>
          <li><a href="<?= ROOT ?>/location" class="pub-menu px-2 text-light">Locations</a></li>
          <li><a href="<?= ROOT ?>/tenants" class="pub-menu px-2 text-light">Log in</a></li>
        </ul>


        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="assets/images/user1.png" style = "height:40px; width:40px; object-fit-contain;" alt="">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="<?= ROOT ?>/tenants">Log in as Tenant</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?= ROOT ?>/admin">Log in as Admin</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>