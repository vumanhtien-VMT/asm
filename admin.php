<?php 
require_once ('./index.php');
 require("funtion.php");


 $sql = "SELECT * FROM trainer";
 $result = $conn -> query($sql);	
 if ($result->num_rows > 0){
 	 $count = 0;
 	 while ($row = $result->fetch_assoc()){
 	 	$count++;	
 	 }
 }

echo "Your course: ".$count;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Trang quan tri vien</title>
</head>
<body>
	<h2 data-aos="fade-left">LIST USER</h2>
    <input class="form-control" id="myInput" type="text" placeholder="Search.."><br>

	<table border="1"><br>
		<thead>
			<tr class="table">
                <th class="column2">Username</th>
                <th class="column2">Password</th>
                <th class="column2">Gender</th>
                <th class="column2">Edit</th>
                <th class="column2">Delete</th>
                <th class="column2">Add</th>
			</tr>
		</thead>
	    <tbody id="myTable">
			
			<?php 
			    require_once './database.php';
			            $sql = "SELECT * from trainer";
			            $rows = query($sql);
			            $count=0;
			            for($i=0; $i<count($rows); $i++)
			            {
			              $count++;
			?>
			<div>
			    <tr>
			        <td><?= $rows[$i][1] ?></td>	
			        <td><?= $rows[$i][2] ?></td>
			        <td><?= $rows[$i][3] ?></td>
			        <td><a href="update.php?id=<?= $rows[$i][0] ?>">Edit</a></td>
			        <td><a href="delete.php?id=<?= $rows[$i][0] ?>" name="delete" onclick="return confirm('Are you sure?')">Delete</a></td>
			        <td><a href="adduser.php">Add</a></td>	

			    </tr>
			</div>
			        <?php 
			            }
			    ?><!-- require php -->
	      </tbody>
    </table>
</body>

<a href="logout.php">Logout</a>

