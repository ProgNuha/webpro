<?php
    session_start();

    if(!isset($_SESSION["username"]) && !isset($_SESSION["password"])){
        header('location:php/login.php');
        // if(!isset($_GET['page'])) header('location: ?page=php/home');
        // echo "Login";
    }

    if(!isset($_GET['page'])) header('location: ?page=php/home');
?>
<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="css/template.css">
        <title>SMAN 1 GARUT</title>
    </head>
    <body>
        <table align="center" width="80%" cellspacing=0%>
            <!-- header -->
            <tr>
                <!-- Nav -->
                <tr>
                    <tr >
                        <td align="center" colspan="4">
                            <p><strong class="font-header">SMAN 1 GARUT</strong>
                            <br>Jln. Merdeka No.91, Jayaraga, Tarogong Kidul, Kabupaten Garut, Jawa Barat 44151</br> </p>
                        </td>
                        <td width="20%" align="center">
                            <img src="assets/sman1grt.jpg" width="100" height="100">
                        </td>
                    </tr>
                </tr>
                <!-- Menu -->
                <tr align="center" class="border-menu" height=50>
                    <td class="border-left" width="20%">
                        <a href="template.php?page=php/home">Home</a> 
                    </td>
                    <td class="border-left" width="20%">
                        <a href="template.php?page=php/berita">Berita</a> 
                    </td>
                    <td class="border-left" width="20%">
                        <a href="template.php?page=php/dataMahasiswa">Data Mahasiswa</td>
                    <td class="border-left" width="20%">
                        <a href="template.php?page=php/inputData">Input Data Mahasiswa</td>
                    <td class="border-left" width="20%">
                        <a href="template.php?page=php/searchData">Pencarian Data Mahasiswa</td>
                </tr>
            </tr>
            <!-- body -->
            <tr>
                <!-- News -->
                <div id="content">
                    <?php
                    if($_GET['page'])
                    {
                        $page = $_GET['page'];
                        $display = $page.'.php';
                        include($display);
                    }
                    else
                    {
                        echo 'try_Link';
                    };
                    ?>
                </div>
            </tr>
            
            <!-- footer -->
            <tr>
                <tr id="footer">
                    <td colspan="5" height="90" align="center">
                        Copyright - (171511050) Mufida Nuha Salimah
                    </td>
                </tr>
            </tr>
            
        </table>        
    </body>
</html>