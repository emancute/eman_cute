<?php include PATH . "partials/header.php" ?>

<!-- CONTENT -->
<div class = "justify-content container mt-5 ">

<form action = "" method = "POST" class = "w-50 mx-auto bg-success p-2 text-dark bg-opacity-75 rounded">
  
    <h1 class = "admin-title d-flex justify-content-center">Admin</h1>
    <?php if  (!empty($errors)) :?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      
        <?php foreach($errors as $error) : ?>
        
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4m.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
</svg>
          <?=$error . "<br>" ?>

        <?php endforeach; ?>
          
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      
    </div>

    <?php endif; ?>

   <div class="form-floating mb-3 ">
  <input type="text" class="form-control" name = "username"  value = "<?= get_var('username') ?>"placeholder="username">
  <label>Username</label>
  </div>

  <div class="form-floating mb-3">
  <input type="password" class="form-control" name = "password" placeholder="password">
  <label>Password</label>
  </div>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button type="submit" name = "login" class="login-button btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
</svg> Log In</button>
<!-- <button type="submit" name = "cancel" class="cancel-button btn btn-danger">Cancel</button> -->
</form>
</div>
<?php include PATH . "partials/footer.php" ?>
<?php include PATH . "partials/script.php" ?>
