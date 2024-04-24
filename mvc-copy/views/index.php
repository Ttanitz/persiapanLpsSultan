<?php 
// Menyambungkan koneksi ke database / model
require_once "../models/paketModel.php";

$judulHalaman = "halaman utama"; // Judul halaman ini
require_once "../layouts/top_style.php"; // Bagian atas halaman

?>
<div class="rounded" style="width: full; height: 16em; background: url(../img/banner.jpg);" ></div>
<h3 class="text-center">Pilih Paket Laundry</h3>
<?php
// Melakukan perhitungan untuk dijadikan id
$i = 0;
echo "<div class='container-fluid row justify-content-center'>";
foreach($datapaket as $paket){ // Melakukan perulangan untuk menampilkan semua data
echo "<div class='col-3 card text-center py-2 mt-5' style='width: 18rem;';
        <span>$paket[0]</span>
        <hr>
        <p>$paket[1]</p>
        <p class='fst-italic'>Rp. $paket[2]</p>
        <a class='btn btn-primary' href='transaksi.php?id=" . $i++ . "'>Pilih Paket</a>
    </div>";
    
}

require_once "../layouts/bottom_style.php"; // Bagian bawah halaman
