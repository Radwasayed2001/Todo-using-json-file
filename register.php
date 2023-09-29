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
    <form class="row g-3 needs-validation w-60" novalidate method="post" action="./handelers/handelRegister.php">
  <div class="col-md-10">
    <label for="validationCustom01" class="form-label">
      First name</label>
    <input name="fname" type="text" class="form-control <?php if(isset($_SESSION['errors']['fname']))echo"is-invalid";?>" id="validationCustom01" placeholder="Enter your first name" required>
    <div class="<?php if(isset($_SESSION['errors']['fname']))echo"invalid-feedback";?>">
      <?php 
      if(isset($_SESSION['errors']['fname']))echo $_SESSION['errors']['fname'];?>
    </div>
  </div>
  <div class="col-md-10">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input name="lname" type="text" class="form-control <?php if(isset($_SESSION['errors']['lname']))echo"is-invalid";?>" id="validationCustom02" placeholder="Enter your last name" required>
    <div class="<?php if(isset($_SESSION['errors']['lname']))echo"invalid-feedback";?>">
    <?php if(isset($_SESSION['errors']['lname']))echo $_SESSION['errors']['lname'];?>
    </div>
  </div>
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
    <label for="validationCustom03" class="form-label">Email</label>
    <input name="email" type="text" class="form-control <?php if(isset($_SESSION['errors']['email']))echo"is-invalid";?>" id="validationCustom03" required>
    <div class="<?php if(isset($_SESSION['errors']['email']))echo"invalid-feedback";?>">
    <?php 
    if(isset($_SESSION['errors']['email']))echo $_SESSION['errors']['email'];
    
    ?>
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
    <button class="btn btn-primary fw-bold" type="submit">Register</button>
  </div>
</form>
</div>
<?php
include('inc/footer.php');