<!DOCTYPE html>
<html>
<head>
	<title> Employee Registration </title>
	<style>
			body {background-color: powderblue;}
	</style>
	<meta name="author" content="Bill Maggs">
</head>

<body>
<nav>
	<a href="index.php">Home</a> |
	<a href="contact.php">Contact Us</a> |
	<a href="login.php">Login</a> |
</nav>

<h1> Welcome to the Employee Registration Page </h1>
<h2> Please enter the following data fields

<form method="POST" action="addReg.php">
  <p>Email: <input type="text" name="p_email"></p>
  <p>Password: <input type="text" name="p_password"></p>
  <p>First Name: <input type="text" name="p_fname"></p>
  <p>Last Name: <input type="text" name="p_lname"></p>
  <p>Address: <input type="text" name="p_address"></p>
  <p>Phone: <input type="text" name="p_phone"></p>
  <p>Salary: <input type="number" name="p_salary"></p>
  <p>SSN: <input type="text" name="p_ssn"></p>
  <input type="submit">
  <input type="reset">
</form>
</h2>
</body>
</html>