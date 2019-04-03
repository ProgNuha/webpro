<tr>
    <td align="center" class="padding border-bottom bg-color center" colspan="5">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dbakademik";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Create connection
            // $sql = "SELECT id, firstname, lastname FROM MyGuests";

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT nim, nama, umur FROM mahasiswa";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<table style='border-collapse : collapse' border='2'>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>";
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {?>
                    <tr align="left">
                        <td><?php echo $row["nim"]?>  </td>
                        <td><?php echo $row["nama"]?> </td>
                        <td><?php echo $row["umur"]?> </td>
                        <td>
                            <form action="" method="POST">
                                <input type="hidden" name="deleteItem" value="<?php echo $row["nim"];?>"/>
                                <input name="delete" type="submit"  value="Delete">
                            </form>
                        </td>
                        <td>
                            <form action="template.php?page=php/edit" method="POST">
                                <input type="hidden" name="updateItem" value="<?php echo $row["nim"];?>"/>
                                <input name="update" type="submit"  value="Update">
                            </form>
                        </td>
                    </tr>
                    
                <?php }
                echo "</table>";
            } else {
                echo "0 results";
            }
            

            if(isset($_POST['deleteItem'])){
                $delete=$_POST['deleteItem'];
                $sql="DELETE FROM mahasiswa WHERE nim=".$delete."";
                mysqli_query($conn,$sql);
                header("Location: template.php?page=php/dataMahasiswa");
               
            }
            mysqli_close($conn);
            ?>
    </td>
</tr>
