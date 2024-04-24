<!-- Layout untuk bagian atas halaman -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title><?= $judulHalaman;?></title>
</head>
<?php if($judulHalaman == "login"): ?>
<body>
<?php else : ?>
<body>
<?php 
    require_once "../controllers/loginController.php"; // Menggunakan logika dari controller login
    if(!isset($_SESSION['auth'])){ // Jika auth tidak ada(belum login)
        header("Location: ../index.php"); // Diarahkan ke menu login
        exit; // Menghentikan eksekusi kode
    }
?>
    <nav class="navbar bg-primary mb-5">
        <div class="container-fluid row text-white text-center">
            <h3 class="col-4">Aplikasi Laundry</h3>
            <div class="col-5"></div>
            <span class="col-1 btn btn-primary <?php if($judulHalaman == "halaman utama"){ echo 'active'; } ?>">Menu</span>
            <span class="col-1 btn btn-primary <?php if($judulHalaman == "transaksi"){ echo 'active'; } ?>">Transaksi</span>                
            <a href="../views/logout.php" class="col-1 btn btn-primary">Keluar</a>
        </div>
    </nav>
<?php endif; ?>