<?php
    function BukuTamu ($PDKoneksi, $Jenis = "Umum") {
        $IP            = ip_user();
        $Selancar      = browser_user();
        $SistemOperasi = os_user();

        $PDKueri = "INSERT INTO statistik_pengunjung (Jenis, IP, Selancar, SistemOperasi)
                    VALUES ('".$Jenis."', '".$IP."', '".$Selancar."', '".$SistemOperasi."')";
		$PDKoneksi->query($PDKueri);
    }
?>