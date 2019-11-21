<html>

<body>
    <center>
        <h1 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:chartreuse">Data Peserta</h1>
        <hr>
        <?php
        echo "Tanggal. Sekarang : " . date('l, d-m-Y  h:i:s a');
        $kota = "Surabaya";
        $nama = array("Lazuardy", "Syahrul", "Darfiansa");

        foreach ($nama as $value) {

            ?>
            <table border="1">
                <tr>
                    <td colspan="3" align="center" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color:blue; font-size:24;">Biodata</td>
                </tr>
                <tr>

                    <td><b>Nama</b></td>
                    <td>:</td>
                    <td>
                        <p style="color: red;"><?= $value ?></p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3"><b>Alamat Lengkap</b></td>
                    <td>:</td>
                    <td>Jalan Jombang</td>
                </tr>
                <tr>
                    <td>:</td>
                    <td>Gang 1 No. 32</td>
                </tr>
                <tr>
                    <td>:</td>
                    <td>Kota <?= $kota ?></td>
                </tr>


                <tr>
                    <td><b>No Handphone</b></td>
                    <td>:</td>
                    <td>085231426818</td>
                </tr>
                <tr>
                    <td><b>Asal SMK</b></td>
                    <td>:</td>
                    <td>
                        <p style="font-family: calibri;">SMK Telkom <?= $kota ?></p>
                    </td>
                </tr>


            </table>
            <hr>
        <?php
        }
        ?>
    </center>
</body>

</html>