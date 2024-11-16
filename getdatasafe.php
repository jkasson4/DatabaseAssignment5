/* getdatasafe.php */
<?php
	$username = $_GET['Username'];
	$password = $_GET['Password'];

	$conn = new mysqli("localhost", "root", "PASS", "db_homework_5");
	$sql = "SELECT SSN, firstname, lastname
		FROM employee
		WHERE username=? and pass_word=?";
	
	if ($stmt = $conn->prepare($sql)) {
		$stmt->bind_param("ss", $username, $password);
		$stmt->execute();

		$stmt->bind_result($ssn, $firstname, $lastname);
		while ($stmt->fetch()) {
			printf ("SSN: %s -- First Name: %s -- Last Name: %s\n",
				$ssn, $firstname, $lastname);
		}
	}
	$conn->close();
?>