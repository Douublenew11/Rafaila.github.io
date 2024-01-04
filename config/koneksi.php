<?php   
$koneksi = mysqli_connect('localhost','root','','ps');

function query($koneksi,$query){
    $data = mysqli_query($koneksi,$query);
    $hasil = [];
    while($d = mysqli_fetch_assoc($data)){
        $hasil[] = $d;
    }
    return $hasil;
}

function tambah($koneksi,$query){
    $result = mysqli_query($koneksi,$query);

    if($result){
        return true;
    }
}

function rupiah($angka){
	
	$hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}

?>