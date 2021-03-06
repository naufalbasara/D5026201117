<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Input Data Barang</title>
  </head>
  <body>
    <section class="container border mt-5 mb-5 me-auto ms-auto p-3">
      <h3>Naufal Rafiawan Basara</h3>
      <h5>RB</h5>
      <h5>5026201117</h5>

      <!-- form -->
      <form class="container-fluid me-auto ms-auto" id="form">
        <h1 class="text-center mb-5">Form Input Data Barang</h1>
        <div class="row">
          <div class="col-2"></div>
          <div class="col">
            <!-- nama barang -->
            <div class="row mb-3">
              <div class="col-sm-5">
                <label for="barang" class="form-label">Nama Barang:</label>
              </div>
              <div class="col-sm-7">
                <input type="text" name="barang" placeholder="Nama Barang" class="form-control barang" aria-describedby="name" />
              </div>
            </div>

            <!-- harga barang -->
            <div class="row mb-3">
              <div class="col-sm-5">
                <label for="harga" class="form-label">Harga Barang:</label>
              </div>
              <div class="col-sm-7">
                <input type="text" name="harga" placeholder="Harga Barang" class="form-control harga" aria-describedby="harga" />
              </div>
            </div>

            <!-- jenis barang -->
            <div class="row mb-3">
              <div class="col-sm-5">
                <label for="jenis" class="form-label">Jenis Barang:</label>
              </div>
              <div class="col-sm-7">
                <select name="jenis" class="form-control form-select jenis">
                  <option value="Default" class="text-secondary" selected>Please Choose..</option>
                  <option value="makanan">Makanan</option>
                  <option value="minuman">Minuman</option>
                  <option value="non">Non-makanan/minuman</option>
                </select>
              </div>
            </div>

            <!-- kode barang -->
            <div class="row mb-3">
              <div class="col-sm-5">
                <label for="kode" class="form-label">Kode Barcode:</label>
              </div>
              <div class="col-sm-7">
                <input type="text" name="kode" placeholder="Kode Barcode" class="form-control kode" aria-describedby="kode" />
              </div>
            </div>

            <!-- tombol -->
            <div class="row justify-content-center">
              <div class="col-sm-auto">
                <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
              </div>
              <div class="col-sm-auto">
                <button type="reset" class="btn btn-success btn-lg">Reset</button>
              </div>
            </div>
          </div>
          <div class="col-2"></div>
        </div>
      </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets-ets/app.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>