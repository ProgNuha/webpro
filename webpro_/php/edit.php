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

    if(isset($_POST['updateItem'])){
        $nim = $_POST['updateItem'];
    }

    $sql = "SELECT nim, nama, umur FROM mahasiswa WHERE nim=".$nim."";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
        $nama = $row["nama"];
        $umur = $row["umur"];
    }
?>

<form action="template.php?page=php/updateAct" method="POST">
<!-- <form action="" method="POST">      -->
    <tr>
        <td align="center" border='1px'>
            NIM    : <input type="text" name="nim" value="<?php echo $nim?>" /><br />
        </td>
    <tr>
        <td  align="center">
            Nama : <input type="text" name="nama" value="<?php echo $nama?>"/><br />
        </td>
    </tr>
    <tr>
        <td  align="center">
            Umur : <input type="text" name="umur" value="<?php echo $umur?>"/><br />
        </td>
    </tr>
    <tr>
        <td  align="center">
           <input type="submit" value="Update" name="update" />
        
        </td>
    </tr>
    </form>



<?php
    // if(isset($_POST['update'])){    
    //     $nim  = $_POST['nim'];
    //     $nama  = $_POST['nama'];
    //     $umur  = $_POST['umur'];
    //     echo "If";
    // }
    // $sql = "SELECT nim, nama, umur FROM mahasiswa WHERE nim=".$nim."";
    // $result  = mysqli_query($conn, $sql);

    mysqli_query($conn,$sql);
?>