<?php
    include '../config/koneksi.php';

    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    move_uploaded_file($file_tmp, 'img/' .$foto);
    $query = "INSERT INTO nadiyaproduk SET 
                                            nama_produk = '$nama_produk',
                                            harga = '$harga',
                                            foto = '$foto'   
    ";
    mysqli_query($koneksi, $query)
    or die("SQL Error" .mysqli_error());
    echo "<script>alert('Berhasil Menambah Data!');window.location.href = 'produk.php'</script>";
?>


