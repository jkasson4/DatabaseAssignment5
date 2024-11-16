/* getdata.php */
<?php
	$username = $_GET['Username'];
	$oldpassword = $_GET['OldPassword'];
	$newpassword = $_GET['NewPassword'];

	$conn = new mysqli("localhost", "root", "PASS", "db_homework_5");
	$sql = "UPDATE employee
		SET pass_word='$newpassword'
		WHERE username='$username' and pass_word='$oldpassword'";

	$result = $conn->query($sql);

	$conn->close();
?>