<html>
<title>Form Biodata</title>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <form method="post" action="" onSubmit="return periksaKota()" onSubmit="return periksaKota()" name="bio">
        <div class="container">
            <h1>Registrasi Biodata Diri</h1>
            <p>Isi dengan benar dan ikhlas</p>
            <hr>
            <div class="form-group">
                <label for="nama"><b style="font-size=24;">Nama</b></label>
                <input class="form-control" type="text" placeholder="Masukkan Nama Anda" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat"><b>Alamat</b></label>
                <input class="form-control" type="text" placeholder="Masukkan Alamat Anda" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="ttl"><b>Tempat Tanggal Lahir</b></label>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <select name="kota" class="form-control">
                            <option value="0">Pilih Kota Anda</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Tanggerang">Tanggerang</option>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Bekasi">Malang</option>
                            <option value="Bekasi">Probolinggo</option>
                        </select>
                    </div>
                    <div class="form-group col-md-10">
                        <input class="form-control" type="text" placeholder="Masukkan Tanggal Lahir Anda" name="ttl" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="usia"><b>Usia</b></label>
                <select name="usia" class="form-control">
                    <option value="0">Pilih Usia Anda</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                </select>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0"><b>Jenis Kelamin</b></legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="Laki-Laki" checked>
                            <label class="form-check-label" for="jklaki">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                            <label class="form-check-label" for="jkperempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group">
                <hr>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
    </form>

    <?php
    error_reporting(0);
    $nama = $_POST['nama'];
    $kota = $_POST['kota'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $usia = $_POST['usia'];
    $jk = $_POST['jk'];

    echo "<h2>Biodata Anda:</h2>";
    echo "Nama Anda adalah <b style='font-size='24'; color:red;>" . $nama . "</b>";
    echo "<br>";
    echo "Alamat Anda di <b>" . $alamat . "</b>";
    echo "<br>";
    echo "Tempat Tanggal Lahir Anda yaitu <b>" . $kota . " , " . $ttl . "</b>";
    echo "<br>";
    echo "Anda berusia <b>" . $usia . "</b> tahun";
    echo "<br>";
    echo "Jenis Kelamin Anda adalah <b>" . $jk . "</b>";
    ?>
</body>

</html>
<script type="text/javascript">
    function periksaKota() {

        var terpilih = document.bio.kota.value;

        if (terpilih == "0") {

            alert("Harap pilih kota asalmu");

            return false;

        }

    }

    function periksaUsia() {

        var terpilih = document.bio.usia.value;

        if (terpilih == "0") {

            alert("Harap pilih usia anda!");

            return false;

        }

    }
</script>