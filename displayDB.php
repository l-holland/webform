<!DOCTYPE html>
<html>
<body>

<?php
	$server = "localhost";
	$username = "id6131400_root";
	$password = "root2";
	$dbname = "id6131400_mydb";
	
	$conn = mysqli_connect($server, $username, $password, $dbname);
	
	// get data
	$sql = "SELECT * FROM Reg ORDER BY dateDB DESC";
	$result = $conn->query($sql);
	
	// display data
	echo "<table>";
	
	while ($row = mysqli_fetch_array($result))
	{
		echo "<tr><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['address1']
			 ."</td><td>".$row['address2']."</td><td>".$row['cityDB']."</td><td>".$row['stateDB']
			 ."</td><td>".$row['zipDB']."</td><td>".$row['countryDB']."</td><td>".$row['dateDB']
			 ."</td></tr>";
	}
	
	echo "</table>";
	$conn->close();
?>

</body>
</html>