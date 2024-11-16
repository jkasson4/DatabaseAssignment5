/* getdata.php */
<?php
	$username = $_POST['Username'];
	$password = $_POST['Password'];

	$conn = new mysqli("localhost", "root", "seedubuntu", "dbtest");
	$sqp = "SELECT SSN, firstname, lastname
		FROM employee
		WHERE username='$username' and password='$password'

	$result = $conn->query($sql);
	if ($result) {
		while ($row = $result->fetch_assoc()) {
			printf ("SSN: %s -- First Name: %s -- Last Name: %s\n",
				%row["Name"], $row["Salary"], $row["SSN']);
		}
		$result->free();
	}
	$conn->close();
?>