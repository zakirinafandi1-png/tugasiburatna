<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Sewa Mobil</title>
</head>
<body>

    <h2>Form Perhitungan Sewa Mobil</h2>

    <form method="post">
        Nama Penyewa: <br>
        <input type="text" name="nama" required><br><br>

        Jenis Mobil: <br>
        <select name="mobil" required>
            <option value="">-- Pilih Mobil --</option>
            <option value="Avanza">Avanza</option>
            <option value="Xenia">Xenia</option>
            <option value="Innova">Innova</option>
            <option value="Alphard">Alphard</option>
            <option value="Fortuner">Fortuner</option>
        </select><br><br>

        Lama Sewa (hari): <br>
        <input type="number" name="hari" min="1" required><br><br>

        <input type="submit" name="submit" value="Hitung Sewa">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $mobil = $_POST['mobil'];
        $hari = $_POST['hari'];

        // Variabel biaya sewa & asuransi
        $biayaSewa = 0;
        $biayaAsuransi = 0;

        // Menggunakan switch case
        switch($mobil) {
            case "Avanza":
                $biayaSewa = 300000;
                $biayaAsuransi = 15000;
                break;
            case "Xenia":
                $biayaSewa = 300000;
                $biayaAsuransi = 15000;
                break;
            case "Innova":
                $biayaSewa = 500000;
                $biayaAsuransi = 25000;
                break;
            case "Alphard":
                $biayaSewa = 750000;
                $biayaAsuransi = 30000;
                break;
            case "Fortuner":
                $biayaSewa = 700000;
                $biayaAsuransi = 25000;
                break;
            default:
                echo "<p>Jenis mobil tidak valid!</p>";
                exit;
        }

        // Hitung total
        $total = ($biayaSewa * $hari) + $biayaAsuransi;

        // Output tabel vertikal
        echo "<h3>Rincian Sewa Mobil</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>
                <tr><td>Nama Penyewa</td><td>$nama</td></tr>
                <tr><td>Jenis Mobil</td><td>$mobil</td></tr>
                <tr><td>Lama Sewa (hari)</td><td>$hari</td></tr>
                <tr><td>Biaya Sewa / Hari</td><td>Rp " . number_format($biayaSewa,0,',','.') . "</td></tr>
                <tr><td>Biaya Asuransi</td><td>Rp " . number_format($biayaAsuransi,0,',','.') . "</td></tr>
                <tr><td>Total Pembayaran</td><td>Rp " . number_format($total,0,',','.') . "</td></tr>
              </table>";
    }
    ?>

</body>
</html>