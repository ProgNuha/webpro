<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbakademik";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM login WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        
        if($count>=1){
            session_start();
            $_SESSION["username"] == $username;
            $_SESSION["password"] == $password;
            header('location:../template.php?page=php/home');
            // if(!isset($_GET['page'])) header('location:../template.php?page=php/home');
            echo "Login";
        }
        else{
            echo "Username atau password salah";
        }
    }
?>