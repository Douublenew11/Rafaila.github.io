<html>
    <head>
        <title>Menu dengan Hyperlink</title>
        <style>
            h1 {
                margin-left : 15px;
            }
            a {
                text-decoration : none;
                color : black;
            }
        </style>
    </head>
    <body>
        <h1>Menu</h1>
        <p color="sienna" size="4">
            <ul type="square">
                <li><a href="home.php" target="kanan">Home</a></li>
                <li><a href="produk.php" target="kanan">Produk</a></li>
                <li><a href="profil.php" target="kanan">Profil</a></li>
                <li><a href="logout.php" target="main" onclick="return confirm('Apakah Anda Yakin Akan Logout ?')">Logout</a></li>
            </ul>
        </p>
    </body>
</html>