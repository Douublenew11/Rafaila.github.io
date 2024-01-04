<?php  
require "../config/koneksi.php";
$targerdir ='img/';

$produks = query($koneksi,"SELECT * FROM rafailaproduk");

if (isset($_POST['tambah'])) {
    $rand = rand();
    $ekstensi = ['png','jpg','jpeg','gif'];
    $foto = $_FILES['foto']['name'];
    $filename = $_FILES['foto']['tmp_name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $nama_produk = htmlspecialchars($_POST['nama_barang']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $harga = htmlspecialchars($_POST['harga']);
    
    if(!in_array($ext,$ekstensi) ) {
        echo "<script>alert('Gagal Menambah Data!');window.location.href = 'produk.php'</script>";
    } else {
        move_uploaded_file($filename, 'img/' .$foto);
        $deteksi = tambah($koneksi,"INSERT INTO rafailaproduk VALUES('','$nama_produk', $deskripsi','$harga','$foto')");

    if($deteksi == true){
        echo "<script>alert('Berhasil Menambah Data!');window.location.href = 'produk.php'</script>";
    }

    }
}


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> Halaman Galery </TITLE>
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
textarea {
    width : 100%; 
    height : 15%;
    border-radius : 5px;
}
input {
    width : 100%; 
    height : 7%;
    border-radius : 5px;
}
.tambah {
    width : 100%;
    height : 7%;
    background-color : #f1f1f1;
    border-radius : 5px;
    color : black;
    font-size : 18px;
}
.edit {
    width : 30%;
    /* margin-left : 15%; */
    background-color : yellow;
    border-radius : 5px;
}
.edit:hover {
    background-color : orange;
}
.edit a:hover {
    color : white;
}
.edit a{
    text-decoration : none;
    color : black;
    font-size : 15px;
}
.hapus {
    width : 30%;
    /* margin-left : 10%; */
    background-color : red;
    border-radius : 5px;
}
.hapus:hover {
    background-color : pink;
}
.hapus a{
    text-decoration : none;
    color : white;
    font-size : 15px;
}
.hapus a:hover {
    color : black;
}
tr th {
    background-color : #be0000 ; 
    color : white;
}
tr td {
    text-align : center;
}
</style>
</head>
<body>
    <div class="row">
        <div class="column">
            <div class="card">
                <h1 style="color : white">Tambah Produk</h1>
                <form action="proses.php" method="POST" enctype='multipart/form-data'>
                    <input type="text" name="nama_produk" placeholder="Masukkan Nama Produk"><br><br>
                    <textarea name="deskripsi" id="" cols="30" rows="10" placeholder="Masukkan Deskripsi produk"></textarea><br><br>
                    <input type="number" name="harga" placeholder="Masukkan Harga Produk"><br><br>
                    <input style="color : white" type="file" name="foto"><br><br>
                    <button class="tambah" type="submit" name="tambah">Tambah</button>
                </form>
            </div>
        </div>
    </div>

<table border="1" width="100%">
    <tr>
        <th>NO</th>
        <th>Nama Barang</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
<?php $i = 1; foreach($produks as $p) : ?>
    <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $p['nama_produk'] ?></td>
        <td style="width: 25%"><?php echo $p['deskripsi'] ?></td>
        <td><?php echo $p['harga'] ?></td>
        <td><img src="img/<?php echo $p['foto'] ?>" alt="" width="150px"></td>
        <td>
            <button class="edit"><a href="edit.php?id=<?php echo $p['id'] ?>">edit</a></button>
            <button class="hapus"><a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Produk Ini ?')" href="hapus.php?id=<?php echo $p['id'] ?>">hapus</a> <br></button>
        </td>
    </tr>
<?php endforeach; ?>
</table>


</BODY>
</HTML>