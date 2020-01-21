<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include 'koneksi1.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data mahasiswa dari database yang mempunyai id=$id
    $query = "SELECT * FROM data_pelanggan WHERE id='$id'";
    $result = mysqli_query($link, $query);
    // mengecek apakah query gagal
    if(!$result){
      die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
    }
    // mengambil data dari database dan membuat variabel" utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $kodepelanggan = $data ['kodepelanggan'];
    $kategori = $data ['kategori'];
    $nama = $data ['nama' ];
    $alamat = $data ['alamat'];
    $hp = $data ['hp'];
    $email= $data ['email'];
    $nama_sales = $data ['nama_sales'];

  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:index1.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="form_login.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </table>

    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
     <h1>Edit Data</h1>
    <div class="container">
      <form id="form_pelanggan" action="edit_proses1.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
     
        <legend>Edit Data Mahasiswa</legend>

          <div class="form-group">
            <label for="kode">Kode Pelanggan</label>
            <input type="text" name="kode" id="kode" class="form-control"  value="<?php echo $kodepelanggan ?>">
          </div>

           <div class="form-group" for="kategori" >
            <label for="kategori" >Kategori</label>
              <div>
                <select class="form-control" name="kategori" id="kategori" >
                  <option value="member" name="kategori" >Member</option>
                  <option value="terdaftar" name="kategori" >Terdaftar</option>
                  <option value="guest" name="kategori">Guest</option>
                </select>
              </div>
          </div>

          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control"  value="<?php echo $nama ?>">
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $alamat ?>">
          </div>

          <div class="form-group">
             <label for="hp">Hp</label>
            <input type="text" name="hp" id="hp" class="form-control" value="<?php echo $hp ?>">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
          </div>

          <div class="form-group">
            <label for="sales">Nama Sales</label>
            <input type="text" name="sales" id="sales" class="form-control" value="<?php echo $nama_sales ?>">
          </div>
        
          <div class="form-group"> 
            <button  class="btn btn-primary" type="submit" name="edit" value="Update Data"> Edit Data</button>
          </div>
    </form>
  </div>
    
  </body>
</html>