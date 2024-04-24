<?php
// Mengambil logika dari controller
require_once "../controllers/transaksiController.php";

$judulHalaman = "transaksi"; // Nama halaman berdasarkan paket
require_once "../layouts/top_style.php"; // layout halaman paling atas
?>

<div class="container">
    <div class="card px-4 bg-light" >

    <div class="my-3 row" >
        <!-- Nomor transaksi pelanggan -->
        <label class="col-2 " for="noTransaksi">Nomor Transaksi</label>
        <input class="col-6" type="number" name="noTransaksi" id="noTransaksi">
        
        <!-- Pilihan untuk tambahan yang bisa dipilih -->
        <div class="col-4" >
            <input type="radio" name="tambahan" id="tanpaPelembut" value="0">
            <label for="tanpaPelembut">Tidak ada tambahan - Rp. 0</label><br> <!-- Tidak menambah -->
            <input type="radio" name="tambahan" id="pelembut" value="10000">
            <label for="pelembut">Pelembut - Rp. 10.000</label> <!-- Menambah pelembut -->
        </div>
    </div>

    <div class="my-3 row" >
        <!-- Tanggal yang dipilih pelanggan -->
        <label class="col-2 " for="tanggalTransaksi">Tanggal Transaksi</label>
        <input class="col-6" type="date" name="tanggalTransaksi" id="tanggalTransaksi">
        <div class="col-4"></div>
    </div>
    <div class="my-3 row">
        <!-- Nama Pelanggan -->
        <label class="col-2 " for="namaCustomer">Nama Customer</label>
        <input class="col-6" type="text" name="namaCustomer" id="namaCustomer">
        <div class="col-4"></div>
    </div>
    <div class="my-3 row">
        <!-- Paket yang dipilih -->
        <label class="col-2 ">Pilihan Paket</label>
        <input class="col-2" type="text" value="<?= $paket[1] ?>">
    
        <!-- Harga dari paket yang dipilih -->
        <label class="col-2 ">Harga Paket</label>
        <input class="col-2" type="text" value="<?= $paket[2] ?>" id="hargaPaket">
        <div class="col-4"></div>
    </div>

    <div class="row">
        <!-- Tombol untuk menjumlahkan harga dan tambahan(jika dipilih) -->
        <button class="btn btn-secondary col-2" type="submit" id="hitungTotal">Hitung Total Harga</button>
    </div>
<hr>
    <div class="row">
        <!-- Label dari total harga -->
        <label class="col-3">Total Harga</label>
        <div class="col-9"></div>
    </div>
    <div class="row">
        <!-- Hasil dari harga total yang sudah di hitung -->
        <input class="col-3" type="text" id="hargaTotal" name="hargaTotal">
        <div class="col-2"></div>
        <!-- Pemberitahuan untuk pelanggan -->
        <span class="col-3 text-primary" id="pemberitahuan"></span>    
        <div class="col-4"></div>
    </div>
    <div class="row">
        <!-- Label dari pembayaran dan kembalian-->
        <label class="col-3" for="pembayaran">Pembayaran</label>
        <div class="col-2"></div>
        <label class="col-3" for="kembalian">Kembalian</label>
        <div class="col-4"></div>
    </div>
    <div class="row">
        <!-- Uang yang akan dibayarkan pelanggan dan hasil kembalian -->
        <input class="col-3" type="number" name="pembayaran" id="pembayaran">
        <div class="col-2"></div>
        <input class="col-3" type="text" name="kembalian" id="kembalian">
        <div class="4"></div>
    </div>

    <div class="row my-2">
        <!-- Tombol yang akan melakukan perhitungan pada uang yang dibayarkan dan total harga -->
        <button class="btn btn-secondary col-2" type="submit" id="hitungKembalian">Hitung Kembalian</button>
        <div class="col-5"></div>
        <!-- Tombol kembali jika tidak jadi memesan -->
        <a class="btn btn-danger col-2" href="index.php">Kembali</a>
        <div class="col-1"></div>
        <!-- Tombol untuk menampilkan pesan di tengah layar jika pelanggan selesai membeli -->
        <button class="btn btn-primary col-2" type="submit" name="simpan" id="simpan">Simpan Transaksi</button>
    </div>

    <!-- Pesan yang akan di tampilkan -->
    <div class="rounded text-center" id="notifBox" style="display: none; padding: 20px; background-color: #f0f0f0; border: 1px solid #ccc; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <h4>Transaksi disimpan</h4>
        <div style="margin-top: 5em;">
            <a class="btn btn-danger" href="index.php">Kembali ke Halaman Utama</a> <!-- Mengarahkan ke halaman utama -->
        </div>
    </div>
    </div>
</div>
<?php require_once "../layouts/bottom_style.php" ?> <!-- Layout halaman bawah -->