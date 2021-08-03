<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ford Registrasi Warga</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background: url(https://i.pinimg.com/236x/b5/74/e0/b574e060f76ae0f50d256305405ede91.jpg);
            text-decoration-color: white;
        }

        .card {
            width: 650px;
            height: 400px;
            margin-top: 100px;
        }
        .card-header {
            width: 650px;
        }
        .container {
            width: 700px;
        }
    </style>
</head>
<body>
        <div class="container">
            <div class="card">
            <form action="index.php" method="POST">
                <h4 class="card-header bg-dark text-white text-center">Form Registrasi Warga</h4>
                    <div class="form-group row">
                        <div class="card-body">
                        <section class="base">
                        <h4 class="col-sm-6 col-form-label" style="margin-left: 80px;">Data Pribadi</h4>
                            <div class="form-group row justify-content-center mt-3">
                                <!-- No KTP -->
                                <label for="no_ktp" class="col-sm-3 col-form-label">Nomor KTP :</label>
                                <div class="col-sm-6">
                                        <input type="text" class="form-control mb-2" name="no_ktp" id="no_ktp" placeholder="321888">
                                    </div>
                                </div>

                                <!-- Nama Lengkap -->
                                <div class="form-group row justify-content-center">
                                <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap :</label>
                                <div class="col-sm-6">
                                        <input type="text" class="form-control mb-2" name="nama_lengkap" id="nama_lengkap" placeholder="Nur Fauziah">
                                    </div>
                                </div>

                                <!-- Alamat Lengkap -->
                                <div class="form-group row justify-content-center">
                                <label for="alamat_lengkap" class="col-sm-3 col-form-label">Alamat Lengkap :</label>
                                <div class="col-sm-6">
                                        <input type="text" class="form-control mb-2" name="alamat_lengkap" id="alamat_lengkap" placeholder="Depok">
                                    </div>
                                </div>

                                <!-- Nomor HP -->
                                <div class="form-group row justify-content-center">
                                <label for="no_hp" class="col-sm-3 col-form-label">No HP :</label>
                                <div class="col-sm-6">
                                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="0856">
                                    </div>
                                </div>

                                <!-- Button simpan & kembali -->
                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-9 mt-4">
                                        <button type="submit" class="btn btn-primary" name="daftar" value="daftar">Daftar</button>
                                        <a href="index.php" class="btn btn-warning float-right" role="button">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        </div>
                    </div>
            </form>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>