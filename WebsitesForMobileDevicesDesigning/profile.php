<?php 
  include_once 'header.php';
?>
<?php
    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword= "";
    $dBName = "phpproject";
    
    
    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dBName);
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            if (isset($id) || isset($sqlImg) || isset($resultImg)){
                $id = $row ['usersid'];
                $sqlImg = "SELECT * FROM profileimg WHERE userid= '$id'";
                $resultImg = mysqli_query($conn, $sqlImg);
                while ($rowImg = mysqli_fetch_assoc($resultImg)){
                    echo "<div>";
                        if ($rowImg['status'] == 0){
                            echo "<img src='uploads/profile".$id.".jpg'";
                        }
                        else{
                            echo "<img src='uploads/profiledefault.jpg'";
                        }
                    echo "</div>";
    
                }
            }
            
            
            
            
        }
    }
    else{
        echo "There are no users yet";
    }
?>
<section>
    <?php
        if(isset($_SESSION["userid"])){
            echo "<p>Welcome " . $_SESSION["useruid"] . "</p>";
        }
        echo "<form action='upload.php' method = 'Post' enctype = 'multipart>/form-data'>
        <input type = 'file' name= 'file'>
        <button type = 'submit' name= 'submit'>UPLOAD</button>
    </form>";
    ?>
    
</section>