<?php 
// Mengambil data dari database / model
require_once "../models/paketModel.php";
$id = $_GET['id']; // Mengambil id dari url
$paket = $datapaket[$id]; // Menambil data dari database berdasarkan id yang dipilih
?>
<script>
// Memuat seluruh halaman terlebih dahulu sebelum mengeksekusi script dibawahnya agar tidak ada error
document.addEventListener('DOMContentLoaded', function(){
    // Mendefinisikan sebagai variable untuk menampung data dari input
    const hargaPaket = parseFloat(document.getElementById('hargaPaket').value); // Mendefinisikan value dari input harga paket dan mengubahnya menjadi numerik
    const pelembut = document.getElementById('pelembut'); // Menyimpan id pelembut dari input jenis Radio
    const tanpaPelembut = document.getElementById('tanpaPelembut'); // Menyimpan id tanpa pelembut dari input jenis Radio
    let totalHarga; // Total harga yang dijumlahkan
    let kembalian; // Menghitung kembalian saat membayar

    // Menghitung Total Harga
    // Menjalankan sebuah function jika tombol dengan id hitungTotal di tekan
    document.getElementById('hitungTotal').addEventListener('click', () => {
        if(pelembut.checked){ // Jika pilihan tambahan pelembut di klik 
            totalHarga = hargaPaket + parseFloat(pelembut.value); // Menambahkan harga paket dengan harga tambahan pelembut
        }else if(tanpaPelembut.checked){
            totalHarga = hargaPaket; // Jika pilihannya tanpaPelembut maka akan menampilkan harga awal
        }else {
            totalHarga = hargaPaket; // Jika tidak dipilih maka akan menampilkan harga awal
        }
        document.getElementById('hargaTotal').value = totalHarga; // Menampilkan hasil perhitungan ke element dengan id hargaTotal
        });

    // Menghitung Kembalian
    // Jika tombol dengan id hitung kembalian di tekan maka akan melakukan suatu operasi
    document.getElementById('hitungKembalian').addEventListener('click', () => {
        const pembayaran = parseFloat(document.getElementById('pembayaran').value); // Mendefinisikan value dari input pembayaran dan mengubahnya menjadi numerik
        let pemberitahuan // Variabel untuk memberikan pemberitahuan kepada pelanggan
        if (pembayaran === '' || isNaN(pembayaran)) { // Jika inputan kosong atau pembayaran bukan number
            pemberitahuan = 'Silakan masukkan uang'; // Pesan jika input pembayaran kosong
            kembalian = 0; // Kembalian diatur ke 0 jika pembayaran kosong
        }else if(pembayaran < totalHarga){
            pemberitahuan = 'Uang anda kurang' // Jika uang yang dimasukan lebih kecil dari total harga yang ada
            kembalian = 0;
        }else{
            kembalian = pembayaran - totalHarga; // Jika pembayaran benar maka akan menghasilkan kembalian
            pemberitahuan = 'Pembayaran berhasil'; // Memberikan pesan berhasil
        }
        document.getElementById('kembalian').value = kembalian; // Menampilkan hasil kembalian ke input kembalian
        document.getElementById('pemberitahuan').innerText = pemberitahuan; // Mengirimkan hasil ke id pemberitahuan
    });

    // JavaScript untuk menampilkan kotak pemberitahuan setelah tombol simpan ditekan
document.getElementById('simpan').addEventListener('click', function() {
            // Menampilkan kotak pemberitahuan
            document.getElementById('notifBox').style.display = 'block';

            // Menonaktifkan tombol simpan
            this.disabled = true;
        });
});


</script>