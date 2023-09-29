<nav>
  
  <div id="lists">
    <i class="fa-solid fa-bars"></i>
  </div>
  <div class="mycontent">
  <ul>
    <li>
      <a href="index.php" id="home">
      <i class="fa-solid fa-house"></i>
        <span>Home</span>
      </a>
    </li>
    <?php if (isset($_SESSION['auth'])): ?>
    <li>
      <a href="./add.php">
      <i class="fa-solid fa-plus"></i>
        <span>Add Task</span>
      </a>
    </li>
    <li>
      <a href="./allTasks.php">
      <i class="fa-solid fa-list-check"></i>
        <span>All Tasks</span>
      </a>
    </li>
    <?php else:?>
    <li>
      <a href="./login.php">
      <i class="fa-solid fa-arrow-right-to-bracket"></i>
        <span>Login</span>
      </a>
    </li>
    <li>
      <a href="./register.php">
      <i class="fa-solid fa-user-plus"></i>
        <span>Register</span>
      </a>
    </li>
    <?php endif;?>
  </ul>
  <?php if (isset($_SESSION['auth'])): ?>
  <ul>
  <li>
      <a href="./logout.php" id="logout">
      <i class="fa-solid fa-right-from-bracket"></i>
        <span>Logout</span>
      </a>
    </li>
  </ul>
  <?php endif;?>
  </div>
  
</nav>