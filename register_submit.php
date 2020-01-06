<?php
	session_start();
	include 'funtion.php';	
	if( isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] && $_POST["repassword"] != ''){
		//thuc hien xu li 
		$username = $_POST["username"];
		$password = $_POST["password"];
		$repassword = $_POST["repassword"];
		$role = 0;
		if ($password != $repassword){
			$_SESSION["Thongbao"]= "Password nhap lai khong chinh xac";
		 	header("location:register.php");
		 	die();
		}
		$sql = "SELECT * FROM user WHERE username='$username' ";
		$old = mysqli_query($conn,$sql);
		$password = md5($password);
		if ( mysqli_num_rows($old) > 0){
			$_SESSION["Thongbao"] = "Username da ton tai";
			header("location:register.php");
			die();
		} 
		$sql = "INSERT INTO user (username,password,role) VALUES ('$username','$password','$role')";
		mysqli_query($conn,$sql);
		$_SESSION["Thongbao"] = "Da dang ky thanh cong";
		header ('location: login.php');
		
	} else{
		$_SESSION["Thongbao"] = "Vui long nhap day du thong tin";
		header("location:register.php");
	}
?>