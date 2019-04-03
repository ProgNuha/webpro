<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbakademik";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Create connection

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    if(isset($_POST['update'])){    
        $nim  = $_POST['nim'];
        $nama  = $_POST['nama'];
        $umur  = $_POST['umur'];
        echo "If";
    }
    else{
        echo "else";
    }

    $sql = "UPDATE mahasiswa SET nama='$nama',umur='umur' WHERE nim='$nim'";
    $result = mysqli_query($conn, $sql);
    // if($row = mysqli_fetch_assoc($result)){
    //     $nama = $row["nama"];
    //     $umur = $row["umur"];
    // }


    echo $nama;
    // echo  $umur;
    // $retval = mysqli_query($conn,$sql);

    // if(! $retval ) {
    //     die('Could not update data: ');
    //  }
    //  echo "Updated data successfully\n";
?>