<!DOCTYPE html>
<html>

<?php
	$server = "localhost";
	$username = "id6131400_root";
	$password = "root2";
	$dbname = "id6131400_mydb";
	
	$conn = mysqli_connect($server, $username, $password, $dbname);
	
	// create table if needed
	$sql = "CREATE TABLE IF NOT EXISTS Reg(
	id INT(10) AUTO_INCREMENT PRIMARY KEY,
	fname VARCHAR(30) NOT NULL,
	lname VARCHAR(30) NOT NULL,
	address1 VARCHAR(50) NOT NULL,
	address2 VARCHAR(50),
	cityDB VARCHAR(30) NOT NULL,
	stateDB VARCHAR(30) NOT NULL,
	zipDB VARCHAR(30) NOT NULL,
	countryDB VARCHAR(30) NOT NULL,
	dateDB DATETIME)";
	if ($conn->query($sql) === FALSE)
		echo "Error: ".$conn->error;
	
	// set data and double-check emptiness
	$tempFirst = "";
	$tempLast = "";
	$tempAdd1 = "";
	$tempAdd2 = "";
	$tempCity = "";
	$tempState = "";
	$tempZip = "";
	$tempCountry = "";	
	$date = date('Y-m-d G:i:s');
	
	if (isset($_POST['first']))
		$tempFirst = $_POST['first'];
	else
		echo "<p>Error: First name cannot be blank</p>";
	
	if (isset($_POST['last']))
		$tempLast = $_POST['last'];
	else
		echo "<p>Error: Last name cannot be blank</p>";
	
	if (isset($_POST['add1']))
		$tempAdd1 = $_POST['add1'];
	else
		echo "<p>Error: Address 1 cannot be blank</p>";
	
	// add2 can be blank
	if (isset($_POST['add2']))
		$tempAdd2 = $_POST['add2'];
	else
		$tempAdd2 = "n/a";
	
	if (isset($_POST['city']))
		$tempCity = $_POST['city'];
	else
		echo "<p>Error: City cannot be blank</p>";
	
	if (isset($_POST['state']))
		$tempState = $_POST['state'];
	else
		echo "<p>Error: State cannot be blank</p>";
	
	if (isset($_POST['zip']))
		$tempZip= $_POST['zip'];
	else
		echo "<p>Error: Zip cannot be blank</p>";
	
	if (isset($_POST['country']))
		$tempCountry = $_POST['country'];
	else
		echo "<p>Error: Country cannot be blank</p>";
	
	// prepare to add to db
	$sql = "INSERT INTO Reg (fname, lname, address1, address2, cityDB, stateDB, zipDB,
			countryDB, dateDB) VALUES ('$tempFirst', '$tempLast', '$tempAdd1', '$tempAdd2',
			'$tempCity', '$tempState', '$tempZip', '$tempCountry', '$date')";
	
	// submit query
	if ($conn->query($sql) === FALSE)
		echo "Error: ".$conn->error;
	else
		echo "Thank you for registering!";
	
	$conn->close();
?>

</html>