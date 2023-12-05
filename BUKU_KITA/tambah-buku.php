<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>

  <body>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">TAMBAH BUKU</div>
            <div class="card-body">
              <form action="simpan-buku.php" method="POST">
                <div class="form-group">
                  <label>Judul Buku</label>
                  <input type="text" name="judul" placeholder="Masukkan Judul Buku" class="form-control" />
                </div>

                <div class="form-group">
                  <label>Penerbit</label>
                  <input type="text" name="penerbit" placeholder="Masukkan Penerbit Buku" class="form-control" />
                </div>

                <div class="form-group">
                  <label>Pengarang</label>
                  <input type="text" name="pengarang" placeholder="Masukkan Pengarang Buku" class="form-control" />
                </div>

                <div class="form-group">
                  <label>Tahun</label>
                  <input type="number" name="tahun" placeholder="Masukkan Tahun Buku" class="form-control" />
                </div>

                <div class="form-group">
                  <label>Kategori_ID</label>
                  <input type="number" name="kategori_id" placeholder="Masukkan Kategori-ID Buku" class="form-control" />
                </div>

                <div class="form-group">
                  <label>Harga</label>
                  <input type="number" name="harga" placeholder="Masukkan Harga Buku" class="form-control" />
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
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
