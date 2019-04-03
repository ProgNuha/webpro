<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbakademik";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['Submit'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];

        // include_once("config.php");

        $sql = "INSERT INTO mahasiswa (nim, nama, umur) VALUES ($nim,$nama,$umur)";

        $result = mysqli_query($conn, $sql);
    }
  
    mysqli_close($conn);
    header("location:dataMahasiswa.php");
?>