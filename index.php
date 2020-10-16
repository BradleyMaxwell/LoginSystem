<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Login System</title>
    </script>
    </head>
  <body>
    <div class="info">
      <form id="f" action="loginProcess.php" method="post">
        <label>Username</label><br>
        <input type="text" name="username" required/><br>
        <br>

        <label>Password</label><br>
        <input type="password" name="password" required/><br>
        <br>

        <input type="submit" name="button" id="button" value="Login"/>

        <p>Don't have an account? <a href="signup.php" id="link">Sign up.</a></p>
      </form>
    </div>
  </body>
</html>
