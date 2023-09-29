<?php

include('inc/header.php');
include('core/functions.php');
if (isset($_SESSION['auth'])) {
  redirect('./index.php');
  die;
}
?>
<div class="new">
    <?php
        include('inc/navbar.php');
    ?>
    <form class="row g-3 needs-validation w-60 m-lg-5" novalidate method="post" action="./handelers/handelLogin.php">
  <div class="col-md-10">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input name="username" type="text" class="form-control <?php if(isset($_SESSION['errors']['username']))echo"is-invalid";?>" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="<?php if(isset($_SESSION['errors']['username']))echo"invalid-feedback";?>"><?php
      if(isset($_SESSION['errors']['username']))echo $_SESSION['errors']['username'];?>
      </div>
    </div>
  </div>
  
  <div class="col-md-10">
    <label for="validationCustom05" class="form-label">password</label>
    <input name="password" type="password" class="form-control <?php if(isset($_SESSION['errors']['password']))echo"is-invalid";?>" id="validationCustom05" required>
    <div class="<?php if(isset($_SESSION['errors']['password']))echo"invalid-feedback";?>">
    <?php if(isset($_SESSION['errors']['password']))echo $_SESSION['errors']['password'];
    unset($_SESSION['errors']);?>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary fw-bold" type="submit">Login</button>
  </div>
</form>
</div>
<?php
include('inc/footer.php');