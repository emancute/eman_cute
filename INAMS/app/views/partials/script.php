<script src="<?=ROOT ?>/assets/js/sweetalert.min.js"></script>

<?php
  if(isset($_SESSION['stat']) && $_SESSION['stat'] !='')
  {
    ?>
    <script>
      swal({
        title: "<?php echo $_SESSION['stat'];?>",
        icon: "<?php echo $_SESSION['status_code'];?>",
        button: "OK!",
   
      });
    </script>
    <?php
    unset($_SESSION['stat']);
   
  }

?>