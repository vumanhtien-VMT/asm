<?php

$conn = mysqli_connect('localhost', 'root', '', 'db1');
if (!$conn){
	die ('could not connect : '.mysqli_error() );
}
$link = mysqli_connect('localhost', 'root', '', 'db1');
mysqli_set_charset($link, "utf8");

session_start();
function get_user($username, $password){
	$conn = mysqli_connect('localhost', 'root', '', 'db1');

	$sql = mysqli_query($conn,"SELECT * FROM account WHERE username= '$username' AND password= '$password'");
	if ( mysqli_num_rows($sql) > 0) {
		$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
		$_SESSION['currUser']= $row['username'];

		if ($row['Role']==1){
			$_SESSION['currAdmin']= $row['Role'];
			header('location: admin.php');

		} else {
			header ('location: index.php');

		}

	} else {
		echo "Ten dang nhap hoac mat khau khong dung";
	}

}

?>