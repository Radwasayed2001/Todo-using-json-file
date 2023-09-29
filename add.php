<?php

include('inc/header.php');
include('core/functions.php');
if (!isset($_SESSION['auth'])) {
  redirect('./index.php');
  die;
}
?>
<div class="new">
    <?php
        include('inc/navbar.php');
          ?>
    <form class="p-3 d-flex flex-column w-100 align-items-center" method="POST" action="./handelers/handelNewTask.php">
  <div class=" d-flex flex-column w-100 align-items-center mb-5">
    <?php
      if (isset($_SESSION['errors']['newTask'])):?>
        <div class="alert alert-danger text-center w-100 fs-5 fw-bold text-white">
          <?php
          echo $_SESSION['errors']['newTask'];
          ?>
        </div>
        <?php endif;
        unset($_SESSION['errors']);
        ?>
    <label id="add" for="newTask" class="form-label fw-bold mb-3 mt-5 fs-2">Add New Task</label>
    <input name="newTask" type="text" class="form-control" id="newTask">
  </div>
  <button type="submit" class="btn fw-bold" id="addbtn">Add</button>
</form>
</div>
<?php
include('inc/footer.php');