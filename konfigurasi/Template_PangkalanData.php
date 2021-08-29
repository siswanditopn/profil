<?php
	$peladen		= ""; // Alamat server
	$pangkalan_data	= ""; // Nama pangkalan data / database
	$nama_pengguna	= ""; // Nama pengguna / username pangkalan data / database
	$kata_sandi		= ""; // Kata sandi / password pangkalan data / database

	$pd_utama = $pangkalan_data;

	// Buat koneksi
	$koneksi = new mysqli($peladen, $nama_pengguna, $kata_sandi, $pangkalan_data);

	date_default_timezone_set('Asia/Jakarta');

	// Cek koneksi
	if ($koneksi->connect_error) {
	    die("Koneksi gagal: " . $koneksi->connect_error);
	// } else {
		// echo "KONEKSI BERHASIL!";
	}
?>