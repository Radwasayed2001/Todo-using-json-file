<?php
include('./core/functions.php');
include('inc/header.php');
if (!isset($_SESSION['auth'])) {
  redirect('./index.php');
  die;
}
if(isset($_GET['id'])):
$_SESSION['updateId'] = $_GET['id'];
?>
<div class="new">
    <?php
        include('inc/navbar.php');
          ?>
    <form class="p-3 d-flex flex-column w-100 align-items-center" method="POST" action="./handelers/handelUpdate.php">
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
    <label id="add" for="newTask" class="form-label fw-bold mb-3 mt-5 fs-2">Edit Task</label>
    <input name="editTask" type="text" class="form-control" id="newTask">
  </div>
  <button type="submit" class="btn fw-bold" id="addbtn">Edit</button>
</form>
</div>
<?php
else:
  redirect('./allTasks.php');
  die;
endif;

include('inc/footer.php');