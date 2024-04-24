<?php
require_once "controllers/loginController.php"; // Mengambil logika controller

$judulHalaman = 'login';
require_once "layouts/top_style.php"; // Menggunakan layout halaman atas
?>
<!-- Membuat element didalam div ke tengah -->
<div class=" container-fluid row d-flex justify-content-center">
    <!-- Logo -->
    <img class="mt-5" src="img/logo.jpg" style="max-width: 6em; max-height: 6em;" alt="Logo">
    <!-- Text sambutan -->
    <div class="text-center mt-5">
        <h4>Selamat Datang Di Laundry<br><span>SMK Negeri 2 Banjarmasin</span></h4>
    </div>
    <!-- Membuat form login  -->
    <div class="border rounded bg-light w-25 h-50 p-3">
        <!-- Mengirimkan dengan metode post -->
        <form method="post">
            <!-- Pesan error -->
            <p class="mt-4 text-danger text-center fst-italic"><?= $error;?></p>
            <!-- Input untuk username -->
            <div class="input-group mb-5 mt-5">
                <label class="input-group-text" for="username">Username</label>
                <input class="form-control" type="text" name="username" id="username" placeholder="Masukan Username">
            </div>
            <!-- Input utuk password -->
            <div class="input-group mb-5">
                <label class="input-group-text" for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Masukan Password">
            </div>
            <!-- Tombol login -->
            <div class="d-flex justify-content-between">
                <span class="btn btn-primary">Register</span>
                <button class="btn btn-primary" type="submit" name="login" id="login">Login</button>
            </div>
        </form>
    </div>        
</div>

<?php require_once "layouts/bottom_style.php" ?> <!-- Layout halaman bawah -->