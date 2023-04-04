<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
  </head>
  <body>
    <form method="POST" action="process_form.php">
      <label for="firstname">First Name:</label>
      <input type="text" id="firstname" name="firstname"><br>

      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname" name="lastname"><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br>

      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br>

      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password"><br>

      <input type="submit" value="Submit">
    </form>
  </body>
</html>
