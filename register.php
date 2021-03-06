<?php
  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");

  $account = new Account($con);

  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");

  function getInputValue($name) {
    if (isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Spotify</title>
    <link rel="stylesheet" href="assets/css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
  </head>
  <body>
    <?php
      if (isset($_POST['registerButton'])) {
        echo '<script>
          $(document).ready(function() {
            $("#loginForm").hide();
            $("#registerForm").show();
          });
        </script>';
      } else {
        echo '<script>
          $(document).ready(function() {
            $("#loginForm").show();
            $("#registerForm").hide();
          });
        </script>';
      }
     ?>

    <div id="background">
      <div id="loginContainer">
        <div id="inputContainer">
          <form id="loginForm" action="register.php" method="post">
            <h2>Log into your account</h2>
            <p>
              <!-- Shows this error even when the issue comes from somewhere else like a typo in the code-->
              <?php echo $account->getError(Constants::$loginFailed); ?>
              <label for="loginUsername">Username</label>
              <input type="text" id="loginUsername" name="loginUsername" placeholder="JaneDoe77" value="<?php getInputValue('loginUsername') ?>" required>
            </p>
            <p>
              <label for="loginPassword">Password</label>
              <input type="password" id="loginPassword" name="loginPassword" required>
            </p>

            <button type="submit" name="loginButton">Log in!</button>

            <div class="hasAccountText">
              <span id="hideLogin">Don't have an account yet? Sign up here.</span>
            </div>

          </form>


          <form id="registerForm" action="register.php" method="post">
            <h2>Create your account</h2>
            <p>
              <?php echo $account->getError(Constants::$usernameLength); ?>
              <?php echo $account->getError(Constants::$usernameTaken); ?>
              <label for="username">Username</label>
              <input type="text" id="username" name="username" placeholder="JaneDoe77" value="<?php getInputValue('username') ?>" required>
            </p>

            <p>
              <?php echo $account->getError(Constants::$firstNameLength); ?>
              <label for="firstName">First name</label>
              <input type="text" id="firstName" name="firstName" placeholder="Jane" value="<?php getInputValue('firstName') ?>" required>
            </p>
            <p>
              <?php echo $account->getError(Constants::$lastNameLength); ?>
              <label for="lastName">Last name</label>
              <input type="text" id="lastName" name="lastName" placeholder="Doe" value="<?php getInputValue('lastName') ?>" required>
            </p>

            <p>
              <?php echo $account->getError(Constants::$emailsDontMatch); ?>
              <?php echo $account->getError(Constants::$emailInvalid); ?>
              <?php echo $account->getError(Constants::$emailTaken); ?>
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="janedoe77@gmail.com" value="<?php getInputValue('email') ?>" required>
            </p>
            <p>
              <label for="email2">Email</label>
              <input type="email" id="email2" name="email2" placeholder="janedoe77@gmail.com" value="<?php getInputValue('email2') ?>" required>
            </p>

            <p>
              <?php echo $account->getError(Constants::$passwordsDontMatch); ?>
              <?php echo $account->getError(Constants::$passwordLettersAndNumbers); ?>
              <?php echo $account->getError(Constants::$passwordLength); ?>
              <label for="password">Password</label>
              <input type="password" id="password" name="password" required>
            </p>
            <p>
              <label for="password2">Confirm password</label>
              <input type="password" id="password2" name="password2" required>
            </p>

            <button type="submit" name="registerButton">Sign up!</button>

            <div class="hasAccountText">
              <span id="hideRegister">Already have an account? Log in here.</span>
            </div>

          </form>
        </div>

        <div id="loginText">
          <h1>Get great music, right now</h1>
          <h2>Listen to lots of songs for free</h2>
          <ul>
            <li>Discover music you fall in love with</li>
            <li>Create your own playlists</li>
            <li>Follow artists to keep up to date</li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
