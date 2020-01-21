<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  include 'koneksi1.php';
?>

<!DOCTYPE html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="form_login.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </table>

    <link href='style1.css' rel='stylesheet' type='text/css' media='screen'/> 
  </head>
  <body>
    <div class="container"> <br><br>

    <h1>Data Pelanggan</h1> <br>
    

    <!-- form pencarian masih ragu-->
		<form class="form-inline my-2 my-lg-0" action="index1.php" method="get">
      <input class="form-control mr-sm-2" type="text" name="cari" type="submit"  placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="cari">Search</button>
    </form>

    <br>
    <form>
      <a href="input1.php"><button type="button" class="btn btn-success">Input Data</button> </a>
    </form>
 

	<?php 
		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			echo "<b>Hasil pencarian : ".$cari."</b>";
		}
	?>

    <br/>
    <table class="table table-striped" border="1">
      <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Kode Pelanggan</th>
        <th>Kategori</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Hp</th>
        <th>Email</th>
        <th>Nama Sales</th>
        <th>Aksi</th>
      </tr>
      </thead>
    </center>
    <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
    if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$query = "SELECT * FROM data_pelanggan where kodepelanggan like '%".$cari."%'";
		}else{
			$query = "SELECT * FROM data_pelanggan ORDER BY kodepelanggan ASC";		
		}
      $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }
      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td>$no</td>"; //menampilkan no urut
        echo "<td>$data[kodepelanggan]</td>"; 
        echo "<td>$data[kategori]</td>";
        echo "<td>$data[nama]</td>"; 
        echo "<td>$data[alamat]</td>"; 
        echo "<td>$data[hp]</td>"; 
        echo "<td>$data[email]</td>"; 
        echo "<td>$data[nama_sales]</td>"; 

        // membuat link untuk mengedit dan menghapus data
        echo '<td>
          <a href="edit1.php?id='.$data['id'].'">Edit</a> /
          <a href="hapus1.php?id='.$data['id'].'"
      		  onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
        </td>';
        echo "</tr>";
        $no++; // menambah nilai nomor urutecho "<tr>";
      }
      ?>

</div>
    
  </body>
</html>