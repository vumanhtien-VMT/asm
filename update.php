<?php
    require_once './index.php';
    require_once './database.php';
    $connect = mysqli_connect($hostname, $username, $password, $dbname);
    
    if(isset($_GET['id'])){
    $id = $_GET["id"];
    }
    $sql = "SELECT * FROM trainer WHERE ID=" .$id;
    $rows = query($sql);
    for($i=0; $i<count($rows); $i++)
    
    {
?>

    <form action="" method="POST">
            <h2>UPPDATE NEW USER</h2>
        <table width="50%" border="0">
              <div>
        <tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" value="<?= $rows[$i][1] ?>" name="username"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="text" value="<?= $rows[$i][2] ?>" name="password"></td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td>
                        <select value="<?= $rows[$i][3] ?>" name="gender" >
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit"></td>
                </tr>
            
        </div>
      </table>
    </form>  
<?php 
}   
?>
        </table>
        </form>

<?php 

    if(isset($_POST["submit"]))
        {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $gender = $_POST["gender"];

            if ($username=="" ||$password=="" ||$gender=="") 
                {
                    echo "Please fill the blank!";
                }
            elseif ($username=="username" ||$password=="" ||$gender=="") {
                echo "Please fill the blank!";
            }
            elseif ($username=="username" ||$password=="password" ||$gender=="") {
                echo "Please fill the blank!";
            }
            else
                {
                    $sql = "select * from trainer where ID= '$id'";
                    $sql = "UPDATE trainer SET username='$username', password='$password', Gender='$gender' WHERE ID=" . $id;
                    $result = mysqli_query($connect,$sql);
                    if($result == true){
                        header("location: admin.php");      
                    }

                }

        }
?>  
    </div>