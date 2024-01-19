<?php
if (isset($_POST['submit'])) {

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
} ?>

  <!-- Pass data through a form -->
  <!-- php_self can be used for xss -->
  <form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="POST">
  <div>
    <label>Username: </label>
    <input type="text" name="username">
  </div>
  <br>
  <div>
  <label>Password: </label>
    <input type="password" name="password">
  </div>
  <br>
    <input type="submit" name="submit" value="Submit">
  </form>