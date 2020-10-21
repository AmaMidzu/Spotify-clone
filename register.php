<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="inputContainer">
      <form id="loginForm" action="register.php" method="post">
        <h2>Log into your account</h2>
        <p>
          <label for="loginUsername">Username</label>
          <input type="text" id="loginUsername" name="loginUsername" placeholder="JaneDoe77" required>
        </p>
        <p>
          <label for="loginPassword">Password</label>
          <input type="password" id="loginPassword" name="loginPassword" required>
        </p>

        <button type="submit" name="loginButton">Log in!</button>
      </form>


      <form id="registerForm" action="register.php" method="post">
        <h2>Create your account</h2>
        <p>
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="JaneDoe77" required>
        </p>

        <p>
          <label for="firstname">First name</label>
          <input type="text" id="firstname" name="firstname" placeholder="Jane" required>
        </p>
        <p>
          <label for="lastname">Last name</label>
          <input type="text" id="lastname" name="lastname" placeholder="Doe" required>
        </p>

        <p>
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="janedoe77@gmail.com" required>
        </p>
        <p>
          <label for="email2">Email</label>
          <input type="email2" id="email2" name="email" placeholder="janedoe77@gmail.com" required>
        </p>

        <p>
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </p>
        <p>
          <label for="password2">Confirm password</label>
          <input type="password2" id="password2" name="password" required>
        </p>

        <button type="submit" name="registerButton">Sign up!</button>
      </form>
    </div>
  </body>
</html>
