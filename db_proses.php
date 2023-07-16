<?php
$nama_lengkap = $_POST['nama_lengkap'];
$no_telepon = $_POST['no_telepon'];
$alamat_sekarang = $_POST['alamat_sekarang'];
$harga = $_POST['harga'];
$tipe = $_POST['tipe'];
$mulai = $_POST['mulai'];
$sampai = $_POST['sampai'];
// $hari = $_POST['hari'];

$mulai_date = new DateTime($mulai);
$sampai_date = new DateTime($sampai);
$hari_interval = $mulai_date->diff($sampai_date);
$hari = $hari_interval->days;

$fp = fopen("data_pesanan.txt", "a+");
fputs($fp, "$nama_lengkap|$no_telepon|$alamat_sekarang|$harga|$tipe|$mulai|$sampai|$hari\n");
fclose($fp);

$KTP = $_FILES['KTP']['tmp_name'];
$SIM_STNK = $_FILES['SIM_STNK']['tmp_name'];
$BPKB = $_FILES['BPKB']['tmp_name'];

$direktori_KTP = "inputfoto/" . $_FILES['KTP']['name'];
$direktori_SIM_STNK = "inputfoto/" . $_FILES['SIM_STNK']['name'];
$direktori_BPKB = "inputfoto/" . $_FILES['BPKB']['name'];

if (move_uploaded_file($KTP, $direktori_KTP) && move_uploaded_file($SIM_STNK, $direktori_SIM_STNK) && move_uploaded_file($BPKB, $direktori_BPKB)) {
    echo "Nama File KTP: <b>{$_FILES['KTP']['name']}</b><br>";
    echo "Nama File SIM/STNK: <b>{$_FILES['SIM_STNK']['name']}</b><br>";
    echo "Nama File BPKB: <b>{$_FILES['BPKB']['name']}</b><br>";

    $myDir = "inputfoto/";
    $dir = opendir($myDir);
    echo "Isi Folder (Klik Link Untuk Download:) <br>";

    while ($tmp = readdir($dir)) {
        echo "<a href='$myDir$tmp' target='_blank'>$tmp</a><br>";
    }
    closedir($dir);
} else {
    echo "Data berhasil Dimasukan<br>";
}
echo "<br>";
echo "Terima kasih atas partisipasi Anda mengisi data booking<br>";
echo "<a href='booking.html'>Data Booking</a><br>";
echo "<a href='db_lihat.php'>Lihat Data Booking</a><br>";

?>