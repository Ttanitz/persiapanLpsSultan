<?php 
session_start(); // Memulai session
$error = ''; // Pesan error jika belum digunakan akan kosong untuk mencegah error

// Jika tombol login ditekan maka akan menjalankan operasi
if(isset($_POST['login'])){
    // Membuat variabel username dan password yang nilainya diambil dari form input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Melakukan cek pada username dan password 
    if($username == 'userlsp' && $password == 'smkn2bjm'){
        $_SESSION['auth'] = $username; // Menyimpan auth dengan nilai username kedalam session
        setcookie("auth", $username); // Menyimpan auth dan username kedalam cookie agar memudahkan dalam login
        header("Location: views/index.php"); // Jika benar maka akan di arahkan ke halaman index view
    }else{
        $error = "Username atau Password salah!"; // Jika salah akan menampilkan pesan error
    }
}