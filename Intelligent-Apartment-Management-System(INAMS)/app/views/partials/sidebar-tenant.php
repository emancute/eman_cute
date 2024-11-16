<link rel="stylesheet" href ="<?= ROOT ?>/assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href ="<?= ROOT ?>/assets/bootstrap/css/dashboard.css">
<title><?= APP_NAME ?></title>


<div class="d-flex flex-column flex-shrink-0 p-3 border rounded-end-5" style="width: 280px; height:100%; background-color: #004643">
    <a href="<?= ROOT ?>/tenants" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
     <img src="assets/images/logo.png" class = "img-crop" alt="">
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="<?= ROOT ?>/tenants" class="nav-link link-body-emphasis">
            <img src="assets/images/user.png" alt="" class="small-logo">
          Profile
        </a>
      </li>
      <hr>
      <li>
        <a href="<?= ROOT ?>/maintenance" class="nav-link link-body-emphasis">
            <img src="assets/images/optimizing.png" alt="" class="small-logo">
          Maintenance
        </a>
      </li>
      <hr>
      <li>
        <a href="<?= ROOT ?>/payment" class="nav-link link-body-emphasis">
            <img src="assets/images/cash-on-delivery.png" alt="" class="small-logo">
          Payment
        </a>
      </li>
      <hr>
      <li>
        <a href="<?= ROOT ?>/message" class="nav-link link-body-emphasis">
            <img src="assets/images/comments.png" alt="" class="small-logo">
          Messages
        </a>
      </li>
      <hr>
    </ul>
    <div class="container my-3">
    <div class="name my-3 fs-5 text-light">
      Deniel D. Gaudiel
    </div>
    
    <hr>
    <a href="<?= ROOT ?>/home" class="outmenu">Log out</a>
   </div>
  </div>
