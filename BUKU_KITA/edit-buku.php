<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM buku WHERE id = $id LIMIT 1";

  $result = mysqli_query($koneksi, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT BUKU
            </div>
            <div class="card-body">
              <form action="update-buku.php" method="POST">
                
                <div class="form-group">
                  <label>Judul Buku</label>
                  <input type="text" name="judul" value="<?php echo $row['judul'] ?>" placeholder="Masukkan Judul Buku" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Penerbit</label>
                  <input type="text" name="penerbit" value="<?php echo $row['penerbit'] ?>" placeholder="Masukkan Penerbit Buku" class="form-control">
                </div>

                <div class="form-group">
                  <label>Pengarang</label>
                  <input type="text" name="pengarang" placeholder="Masukkan Pengarang Buku" value="<?php echo $row['pengarang'] ?>" class="form-control">
                </div>
                
                <div class="form-group">
                <label>Tahun</label>
                  <input type="number" name="tahun" value="<?php echo $row['tahun'] ?>" placeholder="Masukkan Tahun Terbit Buku" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kategori_ID</label>
                  <input type="number" name="kategori" value="<?php echo $row['kategori_id'] ?>" placeholder="Masukkan Kategori_Id Buku" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga</label>
                  <input type="number" name="harga" placeholder="Masukkan Harga Buku" value="<?php echo $row['harga'] ?>" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>