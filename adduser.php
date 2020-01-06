<form action="" method="POST">
			<h2>ADD NEW USER</h2>
		<table width="50%" border="0">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>

			<tr>
				<td>Gender</td>
				<td>
					<select name="gender">
						<option value=""></option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>
</form>

<?php
require_once './database.php';
$conn = mysqli_connect($hostname, $username, $password, $dbname);
				
if(isset($_POST["submit"]))
{
	$username = $_POST["username"];
	$password = $_POST["password"];
	$gender = $_POST["gender"];
    if ($username == ""|| $password == ""|| $gender == "") 
    {
        echo "Please fill the blank!";
    }else if($username =="username"|| $password == ""|| $gender == "") {
    	echo "Please fill the blank!";
    }else if ($username == "username"|| $password == "password"|| $gender =="") {
    	echo "Please fill the blank!";
    }
    else{
		$sql ="INSERT INTO trainer (username, password, gender) VALUES ('$username','$password','$gender')";
		$exc = mysqli_query($conn,$sql);
		if($exc == true){
             header("location: admin.php");   
		}
	}
}
?>





