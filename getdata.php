/* getdata.php */
<?php
	$username = $_GET['Username'];
	$password = $_GET['Password'];

	$conn = new mysqli("localhost", "root", "PASS", "db_homework_5");
	$sql = "SELECT SSN, firstname, lastname
		FROM employee
		WHERE username='$username' and pass_word='$password'";

	$result = $conn->query($sql);
	if ($result) {
		while ($row = $result->fetch_assoc()) {
			printf ("SSN: %s -- First Name: %s -- Last Name: %s\n",
				$row["SSN"], $row["firstname"], $row["lastname"]);
		}
		$result->free();
	}
	$conn->close();
?>