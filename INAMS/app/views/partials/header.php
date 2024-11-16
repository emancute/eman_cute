<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php echo APP_NAME ?>
    </title>
    <link href="<?=ROOT ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ROOT ?>/assets/css/style.css" rel="stylesheet">
  </head>
  
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg" style="background-color: #7EA1FF">
  <div class="container-fluid ">
    <a class="studskd navbar-brand" href="#">StudSkd</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="bahay nav-item">
          <a class="nav-link active" aria-current="page" href="<?=ROOT ?>/home">Home</a>
        </li>
       
       

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            User
          </a>
          <ul class="dropdown-menu">

            <?php if (empty($_SESSION['ADMIN'])) :?>
            <li><a class="dropdown-item" href="<?=ROOT ?>/admins"> Admin</a></li>
            <?php endif; ?>

            <li><a class="dropdown-item" href="<?=ROOT ?>/students">Student</a></li>
            
            
          </ul>
        </li>
       
      </ul>
      <?php if(empty($_SESSION['ADMIN'])) :?>

     
      <?php else :?>
        <span class = "me-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg> <?=$_SESSION['ADMIN']-> username ?></span>

      <a href="<?=ROOT?>/logout" class = "btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
</svg> Log Out</a>
      
      <?php endif; ?>
    </div>
  </div>
</nav>