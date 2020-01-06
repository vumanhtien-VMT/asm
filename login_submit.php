<?php 

	session_start();
	include 'funtion.php';
	if (isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != '	'){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$password = md5($password);
		$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
		$user = mysqli_query($conn, $sql);

		if (mysqli_num_rows($user) > 0){
			echo " Dang nhap thanh cong";

		}else {
			echo "Ban da nhap sai username hoac password";
		}

	} else {
		header ("location: login.php");
	}

	// function get_user($username, $password){
	// 	$con = mysqli_connect('localhost', 'root', '','db');
	// 	if(!$con){
	// 		die('Could not connect: '.mysqli_error());
	// 	};
	// 	$sql = mysqli_query($con,"SELECT * FROM user WHERE username= '$username' AND password= '$password'")

	// 	if(mysqli_num_rows($sql) > 0){

	// 		$row = mysqli_fetch_array($sql, MYSQLI_ASSOC );
	// 		echo "<p>ỉn a tat ca" .$row['username'].'cua nguoi dung</p>';
	// 		echo "<p>ỉn a tat ca" .$row['password'].'cua nguoi dung</p>';
	// 		$_SESSION['currUser'] = $row['username'];
	// 		echo "<p>ỉn a tat ca" .$_SESSION['currUser'].'cua nguoi dung</p>';
	// 		echo "<p>ỉn a tat ca" .$row['role'].'cua nguoi dung</p>';
 // 			if ($row['role'] == 1) {
 // 				$_SESSION['currAdmin'] = $row['role'];
 // 				echo "<p>ỉn a tat ca" .$_SESSION['currAdmin'].'cua nguoi dung</p>';
 // 				header("location:admin.php");
 // 		} 
 // 		else if($row['role'] == 2){
 // 			$_SESSION['currAdmin'] = $row['role'];
 // 			echo "<p>ỉn a tat ca" .$_SESSION['currAdmin'].'cua nguoi dung</p>';
 // 			header("location:user.php");

	// 	} else {
	// 			$_SESSION["Thongbao"]= "Sai ten dang nhap hoac mat khau";
	// 			header ('location: login.php');
	// 			}
	// 	} else {
	// 		$_SESSION["Thongbao"] = "Vui long nhap day du thong tin";
	// 		header("location: login.php");
	// 	}
	// }


?>