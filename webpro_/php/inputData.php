<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbakademik";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

?>

<tr>
    <td class="padding border-bottom bg-color center" colspan="5">
        <form method="post" action="php/inputData.php">
            NIM    : <input type="text" name="nim" /><br />
            Nama : <input type="text" name="nama" /><br />
            Umur : <input type="text" name="umur" /><br />
            <input type="submit" value="Submit" name="submit" />
        </form>
    </td>
</tr>
<!-- </table> -->

<?php
    if(isset($_POST['submit'])){    
    
        $nama  = $_POST['nama'];
        $nim  = $_POST['nim'];
        $umur  = $_POST['umur'];

        $mysqli  = "INSERT INTO mahasiswa (nama, nim, umur) VALUES ('$nama', '$nim', '$umur')";
        $result  = mysqli_query($conn, $mysqli);
        if ($result) {
            echo "Input berhasil";
        } else {
            echo "Input gagal";
        }
        mysqli_close($conn);
        // header('location: template.php?page=dataMahasiswa');
    }


?>
