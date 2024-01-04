<?php
require "../config/koneksi.php";
$targerdir ='img/';

$id = $_GET['id'];

$produk = query($koneksi,"SELECT * FROM rafailaproduk WHERE id = $id")[0];
if(isset($_POST['update'])){
    $rand = rand();
    $ekstensi = ['png','jpg','jpeg','gif'];
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $nama_produk = htmlspecialchars($_POST['nama_produk']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $harga = htmlspecialchars($_POST['harga']);
    $foto = $rand.'_'.$filename;
    $editUpload = true;
    if($_FILES['foto']['name'] == ""){
        $foto = $produk['foto'];
        $ext = 'jpg';
        $editUpload = false;
    } 
        if(!in_array($ext,$ekstensi) ) {
            echo "<script>alert('Gagal Update Data!');window.location.href = 'produk.php'</script>";
        } else {
            if($editUpload == true){
                unlink($targerdir.$produk["foto"]);
            }
            move_uploaded_file($_FILES['foto']['tmp_name'], $targerdir.$rand.'_'.$filename);
            $deteksi = tambah($koneksi,"UPDATE rafailaproduk SET nama_produk = '$nama_produk', deskripsi = '$deskripsi', harga = '$harga', foto = '$foto' WHERE id = $id");
    
        if($deteksi == true){
             echo "<script>alert('Berhasil Update Data!');window.location.href = 'produk.php'</script>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
* {
box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  margin-top : 2%;
  margin-left : 30%;
  float: center;
  width: 40%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: #be0000;
  margin-bottom : 10%;
  border-radius : 10px;
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 30px;
  }
}
input {
    width : 100%; 
    height : 10%;
    border-radius : 5px;
}
.update {
    width : 100%;
    height : 7%;
    background-color : #f1f1f1;
    border-radius : 5px;
    color : black;
    font-size : 18px;
}
    </style>
</head>
<body>
<div class="row">
        <div class="column">
            <div class="card">
                <h1 style="color : white">Update Barang</h1>
                <form action="" method="POST" enctype='multipart/form-data'>
                    <input type="text" name="nama_produk" value="<?php echo $produk['nama_produk'] ?> " placeholder="Masukkan Nama Produk"><br><br>
                    <input type="text" name="deskripsi" value="<?php echo $produk['deskripsi'] ?> " placeholder="Masukkan Deskripsi"><br><br>
                    <input type="number" name="harga" value="<?php echo $produk['harga'] ?>"><br><br>
                    <input style="color : white" type="file" name="foto"><br><br>
                    <button class="update" type="submit" name="update">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>