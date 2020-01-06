<?php
require_once './index.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Dang Nhap</title>
</head>
<body>
	<h3>Dang Nhap</h3>
	<p>
		<?php 
			require ("funtion.php");
			if ($_SERVER['REQUEST_METHOD']=='POST'){
				$username = $_POST['username'];
				$password = $_POST['password'];

				get_user($username, $password);
			}


			if ( isset($_SESSION["Thongbao"]) ){
				echo $_SESSION["Thongbao"];
				session_unset("Thongbao");
			}
		?>
	</p>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Username: </td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit" name="submit">Login</button>
					<button type="reset">Reset</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>