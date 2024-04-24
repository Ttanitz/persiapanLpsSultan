<?php
// Menghapus session
session_start();
session_unset();
session_destroy();
setcookie("auth", "", time() - 3600); // Hapus cookie
header("Location: ../index.php");
exit;
?>
