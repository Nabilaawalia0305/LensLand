<html>
    <head>
        <title>Data Booking</title>
        <style type="text/css">
		html,body{height: 100%}
		body{
			background-image: url(Bg2200018238.jpg);
			background-position: center;
			background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
			width: 100%;
			height: 100%;
		}</style>
    </head>
    <body>
        <div class="formulir">
        <?php
            echo "<head></head>";
            $fp = fopen("data_pesanan.txt", "r");
            echo "<table border = 0>";
            $pisah;
            while ($isi = fgets($fp))
            {
                $pisah = explode("|",$isi);
                if (isset($pisah[0])) {
                    $value = $pisah[0];
                    echo "<tr><td>Nama Lengkap</td><td> : $pisah[0]</td></tr>";
                }
                if (isset($pisah[1])) {
                    $value = $pisah[1];
                    echo "<tr><td>No.Telepon</td><td> : $pisah[1]</td></tr>";
                }
                if (isset($pisah[2])) {
                    $value = $pisah[2];
                    echo "<tr><td>Alamat Sekarang</td><td> : $pisah[2]</td></tr>";
                }
                if (isset($pisah[3])) {
                    $value = $pisah[3];
                    echo "<tr><td>Harga</td><td> : $pisah[3]</td></tr>";
                }
                if (isset($pisah[4])) {
                    $value = $pisah[4];
                    echo "<tr><td>Jenis Kamera</td><td> : $pisah[4]</td></tr>";
                }
                if (isset($pisah[5])) {
                    $value = $pisah[5];
                    echo "<tr><td>Sewa dari</td><td> : $pisah[5]</td></tr><tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
                } 
                if (isset($pisah[6])) {
                    $value = $pisah[6];
                    echo "<tr><td>Sewa sampai</td><td> : $pisah[6]</td></tr><tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
                } 
                if (isset($pisah[7])) {
                    $value = $pisah[7];
                    echo "<tr><td>Lama Sewa : $pisah[7]</td></tr><tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
                }
                if (isset($pisah[8])) {
                    $value = $pisah[8];
                    echo "<tr><td>KTP</td><td> : $pisah[8]</td></tr><tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
                }
                if (isset($pisah[9])) {
                    $value = $pisah[9];
                    echo "<tr><td>SIM_STNK</td><td> : $pisah[9]</td></tr><tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
                }
                if (isset($pisah[10])) {
                    $value = $pisah[10];
                    echo "<tr><td>BPKB</td><td> : $pisah[10]</td></tr><tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
                }
            }
                echo "<table>";
                echo "<br>";
                echo "<a href=booking.html>Klik Disini</a>Isi Form Data Booking";
        ?>
        </div>
    
    </body>
</html>
