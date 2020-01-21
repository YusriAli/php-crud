<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="form_login.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </table>

  </head>
  <body>
    <div class="container"> <h2 class="alert alert-primary text-center mt-3">Input Data Pelanggan</h2></div>
    <div class="container">
        <form id="form_pelanggan" action="input_proses1.php" method="post">

          <div class="form-group">
            <label for="kode">Kode Pelanggan</label>
            <input type="text" name="kode" id="kode" class="form-control" placeholder="Nomer Pelanggan">
          </div>


          <div class="form-group" for="kategori">
            <label for="kategori">Kategori</label>
              <div>
                <select class="form-control" name="kategori" id="kategori">
                  <option value="member" name="kategori">Member</option>
                  <option value="terdaftar" name="kategori">Terdaftar</option>
                  <option value="guest" name="kategori">Guest</option>
                </select>
              </div>
          </div>

          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Lengkap">
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Sesuai KTP">
          </div>

          <div class="form-group">
            <label for="hp">Hp</label>
            <input type="text" name="hp" id="hp" class="form-control" placeholder="081234567890">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="ali.yusri96@gmail.com">
          </div>
         
          <div class="form-group">
            <label for="sales">Nama Sales</label>
            <input type="text" name="sales" id="sales" class="form-control" placeholder="Nama Sales">
          </div>


          <button type="submit" name="input" value="Tambah Data" class="btn btn-primary">Input</button>
          <button type="reset" name="reset" class="btn btn-danger">Cancel</button>


        
      </form>
    </div>
  </body>
</html>