<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Login System</title>
  </head>
  <script type="text/javascript">
    function validate () {
      const password = document.getElementById("password").value;
      const password2 = document.getElementById("password2").value;

      if (password === password2) {
        return true;
      }
      else {
        document.getElementById("error").innerHTML = "Passwords must match.";
        return false;
      }
    }
  </script>
  <body>
    <div class="info">
      <form id="signupForm" action="signupProcess.php" method="post" onsubmit="return validate()">
        <label>Username</label><br>
        <input type="text" name="username" id="username" required/><br>
        <br>

        <label>Password</label><br>
        <input type="password" name="password" id="password" required/><br>
        <br>

        <label>Confirm Password</label><br>
        <input type="password" name="password2" id="password2" required/><br>

        <p id="error"></p>

        <input type="submit" name="signupButton" value="Sign Up"/>

        <p>Already have an account? <a href="index.php" id="link">Log in.</a></p>
      </form>
    </div>
  </body>
</html>
