<?php
session_start();
if (isset($_POST['submit'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = $_POST['password'];

    if($username == 'ligma' && $password == 'password'){
      $_SESSION['username'] = $username ;
      header('Location: /php-procjets/Touching basics/extras/dashboard.php');
    } else {
      echo 'ligma balls';
    }
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