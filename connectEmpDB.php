<!DOCTYPE html>
<html>
<head>
	<title> Week2 Interactive </title>
	<meta name="author" content="Bill Maggs">
</head>

<body>
<?php

/* ------------------ function to connect to schema ---------------- */
function myConnect($sname) {
	
echo $sname;	
$host = 'localhost'; //host name
$user = 'bmaggsjr'; //user name
$passwd = 'passme'; //password
$schema = $sname;
$con = new mysqli($host, $user, $passwd, $schema); //oop connection
/* Did connection succeed? */
if (!is_null($con->connect_error))
{
	echo 'connection failed<br>';
	echo 'error number: ' . $con->connect_errno . '<br>';
	echo 'error message: ' . $con->connect_error . '<br>';
	die();
}
echo ' connection successfull! </br>';
return $con;
}

/* The “executeSelectQuery” function will execute SQL queries against 
the database, and the “executeQuery” will insert data to the databases, 
update data in the database, or delete data from the database.

/* ---------------- executeSelectQuery function ---------------------- */
function executeSelectQuery($con,$sql)
{
$result = mysqli_query($con,$sql);
//echo $result, '<br/>';
return $result;
}

/* ---------------- executeQuery function ---------------------- */
function executeQuery($con,$sql)
{
if (mysqli_query($con,$sql)){
  echo "New record created successfully<br/>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

/* --------------- display table function ----------------------- */
function displayTable ($result)
{
echo 'returned rows are: ' . $result -> num_rows . '</br>';
while ($row = mysqli_fetch_row($result)) {
	echo $row[0].' '.$row[1].' '.$row[2].'<br/>';
	}
	echo '<br/>';
}

/* ----------- running script, test by executing queries */
$sname = 'employeeportal';							// Temp hardcode the schema name
$con=myConnect($sname); 							// Call the connect function and assign to $con

$sql = "SELECT * FROM tbluser"; 					// Set the $sql variable
$result = executeSelectQuery($con, $sql); 			// Call the executeSelectQuery function
echo "initial table <br/>";
displayTable($result);								// Display the table

$sql = "INSERT INTO tbluser VALUES ('02','jsmith@gmail.com','passme','John','Smith','123 1st St Anywhere USA','(123) 365-2727','115000.87','987-87-0987')";
executeQuery($con,$sql);

$sql = "SELECT * FROM tbluser"; 					// Set the $sql variable
$result = executeSelectQuery($con, $sql); 			// Call the executeSelectQuery function
echo "updated table<br/>";
displayTable($result);								// Display the updated table

/* Housekeeping */
mysqli_free_result($result);
echo 'memory freed </br>';
mysqli_close($con);
echo 'connection closed </br> goodbye';

?>

</html>

