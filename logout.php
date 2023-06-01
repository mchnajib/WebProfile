<?php
// Proses logout
// Kode untuk menghancurkan session atau data login
session_start();
session_destroy();

// Redirect ke halaman login
header("Location: login.php");
exit();
