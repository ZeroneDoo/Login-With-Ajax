<?php 
include "koneksi.php";

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pass'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = $koneksi->query("INSERT INTO users VALUES ('', '$username', '$pass', 'up')");

    if($query){
        $_SESSION['user'] = $_POST['username'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['pass'] = $_POST['pass'];
        echo "data berhasil";
    }else{
        echo "data gagal";
    }
}
?>