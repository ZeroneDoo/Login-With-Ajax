<?php 
include "koneksi.php";




if(isset($_POST['username']) && isset($_POST['pass'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    
    $query = $koneksi->query("SELECT * FROM users WHERE status = 'up' AND username = '$username' AND pass = '$pass'");
    
    if(mysqli_num_rows($query) > 0){

        $row = $query->fetch_assoc();
        
        if($username == $row['username'] && $pass == $row['pass']){
            $_SESSION['user'] = $_POST['username']; //mendeklarasikan session user
            
            echo "data berhasil";
        }
    }else{
        echo "data gagal";
    }
    
}

?>