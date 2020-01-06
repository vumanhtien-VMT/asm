
<?php 
 require("funtion.php");
 echo "<p>ỉn a tat ca" .$_SESSION['currUser'].'cua nguoi dung</p>';
 echo "<p>ỉn a tat ca" .$_SESSION['currAdmin'].'cua nguoi dung</p>';
 if (!isset($_SESSION['currUser'])) {
 	header("location:login.php");
 }
 else{
 if(!isset($_SESSION['currAdmin'])){
	header("location:index.php");
 } else{
  	echo "Xin chao: ".$_SESSION['currUser'];
 	echo "<a href='logout.php'>Thoat</a>";
 }
	// 	echo "xin chao";
}



?>




<h1>Userrrrrrrrrr</h1>