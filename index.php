<?php

include('inc/header.php');
?>
<div class="new">
    <?php
        include('inc/navbar.php');
        if (isset($_SESSION['success'])):
    ?>
    <div id="registersuccess" class="alert alert-success fs-3 text-center mt-2">
  <?php
    echo $_SESSION['success'];
  unset($_SESSION['success']);
  ?>
  <i class="fa-solid fa-check ms-1"></i>
</div>

<?php
endif;
include('inc/footer.php');