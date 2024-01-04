<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        header('location: /login.php');
        exit;
    }
?>
<html>
    <head>
     <title> Halaman Utama </title>
     <style>
        h1 {
            margin-left : 10px;
            text-align : center;
            margin-top : 2%;
        }
        p {
            margin-left : 10px;
            text-align : center;
            margin-top : 2%;
        }
     </style>
    </head>
    <body>
        <h1>Selamat datang <?php echo $_SESSION['username']; ?></h1>

        <p>Halaman Ini Bertujuan Agar Admin Dapat Mengkontrol Data Produk.</p>

        
    </body>
</html>