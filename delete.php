<?php 
require_once './database.php';
$connect = mysqli_connect($hostname, $username, $password, $dbname);
				
if(isset($_GET["id"]))
{	
    $id = $_GET["id"];
    $sql = "DELETE FROM trainer WHERE ID =" . $id;
    mysqli_query($connect,$sql);	
    if ($sql == true){
        header("location: admin.php");
    }				    
}
            
?>
