<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi1.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
  $kodepelanggan = $_POST['kode'];
  $kategori = $_POST['kategori'];
  $nama = $_POST['nama' ];
  $alamat = $_POST['alamat'];
  $hp = $_POST['hp'];
  $email= $_POST['email'];
  $nama_sales = $_POST['sales'];
  
  

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO data_pelanggan VALUES (NULL, '$kodepelanggan','$kategori','$nama' , '$alamat', '$hp', '$email', '$nama_sales')";

  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:index1.php");
?>