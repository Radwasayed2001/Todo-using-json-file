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
    <div class="container mt-5 bg-white p-lg-5 p-md-4">
<?php if (isset($_SESSION['success'])):?>
<div class="alert alert-success fs-3 text-center">
  <?php
    echo $_SESSION['success'];
  unset($_SESSION['success']);
  ?>
  <i class="fa-solid fa-check ms-1"></i>
</div>
<?php endif;?>
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Task</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  
<?php
    $allData = json_decode(file_get_contents('./data2.json'),true);
    if (!empty($allData[$_SESSION['auth']['username']])):
    foreach($allData[$_SESSION['auth']['username']] as $key=>$value):
?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $key + 1 ?></th>
      <td><?php echo $value ?></td>
      <td>
        <a href="update.php?id=<?php echo $key?>" class="btn btn-info">Edit</a>
        <a href="delete.php?id=<?php echo $key?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
  </tbody>
  <?php endforeach;endif; ?>
</table>
</div> 
</div> 
</div>
<?php
include('inc/footer.php');