<?php
// mengecek apakah tombol edit telah diklik
//ragu"
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("koneksi1.php");

  // membuat variabel untuk menampung data dari form edit
  $id = $_POST['id'];
  $kodepelanggan = $_POST['kode'];
  $kategori = $_POST['kategori'];
  $nama = $_POST['nama' ];
  $alamat = $_POST['alamat'];
  $hp = $_POST['hp'];
  $email= $_POST['email'];
  $nama_sales = $_POST['sales'];
  //buat dan jalankan query UPDATE
  $query  = "UPDATE data_pelanggan SET kodepelanggan = '$kodepelanggan', kategori='$kategori', nama='$nama', alamat='$alamat', hp='$hp', email='$email', nama_sales='sales'  WHERE id='$id'";
  $result = mysqli_query($link, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

//lakukan redirect ke halaman index.php
header("location:index1.php");

?>