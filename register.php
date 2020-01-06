<?php
	require ('./index.php')
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Dang ky thanh vien</title>
</head>
<body>
	<h3>dang ky thanh vien</h3>
	<p>
		<?php 
			if (isset($_SESSION["Thongbao"]) ){
				echo $_SESSION["Thongbao"];
				session_unset("Thongbao");
			}
		?>
	</p>
	<form action="register_submit.php" method="POST">
		<table>
			<tr>
				<td>Ten dang nhap</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Mat khau</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Nhap lai mat khau</td>
				<td><input type="password" name="repassword"></td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit" name="submit">Dang ky</button>
					<button type="reset">lam moi</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>