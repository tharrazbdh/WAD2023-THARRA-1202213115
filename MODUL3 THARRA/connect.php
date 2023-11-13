<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
    $connect = mysqli_connect("localhost", "root", "", "jurnal3");


// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya


if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>