<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Form Produk</title>
</head>

<body class="d-flex justify-content-center align-items-center"
  style="height: 100vh; background-color: #f8f9fa; font-family: 'Poppins', sans-serif;">
  <div class="container shadow p-4" style="border-radius: 15px; background-color: #fff; max-width: 800px;">
    <div class="row align-items-center">
      <div class="col-md-3 text-center mb-3 mb-md-0">
        <img src="product.svg" alt="SVG Image" width="150%">
      </div>
      <div class="col-md-9">
        <h2 class="text-center mb-4">Form Produk</h2>
        <form action="proses_produk.php" method="post">
          <div class="form-group row">
            <label for="nama_produk" class="col-sm-3 col-form-label text-sm-right">Nama Produk</label>
            <div class="col-sm-9">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-codepen"></i></span>
                </div>
                <input id="nama_produk" name="nama" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="qty" class="col-sm-3 col-form-label text-sm-right">Qty</label>
            <div class="col-sm-9">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-sort-numeric-asc"></i></span>
                </div>
                <input id="qty" name="qty" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="harga" class="col-sm-3 col-form-label text-sm-right">Harga</label>
            <div class="col-sm-9">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-money"></i></span>
                </div>
                <input id="harga" name="harga" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jenis_produk" class="col-sm-3 col-form-label text-sm-right">Jenis</label>
            <div class="col-sm-9">
              <select id="jenis_produk" name="jenis_produk_id" class="custom-select">
                <option value="1">Elektronik</option>
                <option value="2">Furniture</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
              <button name="proses" value="Simpan" type="submit" class="btn btn-primary">Submit</button>
              <a href="list_produk.php" class="btn btn-secondary ml-2">List Produk</a>
            </div>
          </div>
        </form>
      </div>
</body>

</html>