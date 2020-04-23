<!DOCTYPE html>
<head>
    <title>UTS WEB 2 - ILHAM DWI NUGRAHA</title>
</head>
<body>
    <form action="" method="get">
    <table  width="400">
        <tr>
            <td>Nama Wilayah</td>
            <td><select name="nama_wilayah">
                <option value="DKI Jakarta">DKI JAKARTA</option>
                <option value="Jawa Barat">JAWA BARAT</option>
                <option value="Banten">BANTEN</option>
                <option value="Jawa Tengah">JAWA TENGAH</option>
            </select></td>
        </tr>

        <tr>
            <td>Jumlah Positive</td>
            <td><input type="number" name="jumlah_positive"></td>
        </tr>

        <tr>
            <td>Jumlah Dirawat</td>
            <td><input type="number" name="jumlah_dirawat"></td>
        </tr>

        <tr>
            <td>Jumlah Sembuh</td>
            <td><input type="number" name="jumlah_sembuh"></td>
        </tr>

        <tr>
            <td>Jumlah Meninggal</td>
            <td><input type="number" name="jumlah_meninggal"></td>
        </tr>

        <tr>
            <td>Nama Operator</td>
            <td><input type="text" name="nama_operator"></td>
        </tr>

        <tr>
            <td>NIM Mahasiswa</td>
            <td><input type="text" name="nim_mahasiswa"></td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="KIRIM"></td>
        </tr>
    </table>
    </form>

    <?php
        date_default_timezone_set('Asia/Jakarta');
        $time = date("d M Y h:i:s");

        if(isset($_GET['submit'])){
            $wilayah = $_GET['nama_wilayah'];
            $jml_positive = $_GET['jumlah_positive'];
            $jml_dirawat = $_GET['jumlah_dirawat'];
            $jml_sembuh = $_GET['jumlah_sembuh'];
            $jml_meninggal = $_GET['jumlah_meninggal'];
            $nama = $_GET['nama_operator'];
            $nim = $_GET['nim_mahasiswa'];
            
            // $hasil = "<table border=1 width=600>
            //     <tr><td colspan=4 align='center'>Data Pemantaun Covid19 wilayah $wilayah</td></tr>
            //     <tr><td colspan=4 align='center'>Per $time </td></tr>
            //     <tr><td colspan=4 align='center'>$nama / $nim</td></tr>
            //     <tr><td align='center'>Positif</td>
            //         <td align='center'>Dirawat</td>
            //         <td align='center'>Sembuh</td>
            //         <td align='center'>Meninggal</td></tr>
            //     <tr><td align='center'>$jml_positive</td>
            //         <td align='center'>$jml_dirawat</td>
            //         <td align='center'>$jml_sembuh</td>
            //         <td align='center'>$jml_meninggal</td></tr>
            //     </table>";

            $hasil =
            "Data Pemantaun Covid19 wilayah $wilayah
    Per $time
    $nama / $nim

--------------------------------------------
| Positif | Dirawat | Sembuh | Meninggal   |
--------------------------------------------
|    $jml_positive   |    $jml_dirawat  |    $jml_sembuh  |       $jml_meninggal     |
--------------------------------------------";
            $file = fopen("data.txt","w");
            fwrite($file, $hasil);
            fclose($file);
        }
    ?>
</body>
</html>