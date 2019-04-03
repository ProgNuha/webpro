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


    $nim = $row["nim"];
    $sql="DELETE FROM student WHERE nim='$nim'";
    mysqli_query($conn,$sql);
    header("Location: template.php?page=php/dataMahasiswa");
    mysqli_close($conn);
    
?>


