<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<form method="POST" action="process.php">
		<label for="firstname">First Name:</label>
		<input type="text" name="firstname" required><br><br>

		<label for="lastname">Last Name:</label>
		<input type="text" name="lastname" required><br><br>

		<label for="email">Email:</label>
		<input type="email" name="email" required><br><br>

		<label for="username">Username:</label>
		<input type="text" name="username" required><br><br>

		<label for="password">Password:</label>
		<input type="password" name="password" required><br><br>

		<label for="confirm_password">Confirm Password:</label>
		<input type="password" name="confirm_password" required><br><br>

		<input type="submit" value="Register">
	</form>
</body>
</html>
