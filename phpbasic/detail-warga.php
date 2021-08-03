<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ford Detail Registrasi Warga</title>
</head>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
<?php
include('mylib/myDb.php');
$Db=new myDb();
$idwarga=$_GET['id'];
$data=$Db->get_by_id($idwarga);
//print_r($data);
//echo "blalala";
?>
    <div class="container">
   
    <div class="row">
        <div class="col-md-8">
        <h2>Form Detail Registrasi Warga</h2>
        <hr>
        <table class="table table-bordered">
            <tr>
                <td>No ID</td>
                <td><?php echo $data['id']; ?></td>
            </tr>
            <tr>
                <td>No KTP</td>
                <td><?php echo $data['no_ktp']; ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><?php echo $data['nama_lengkap']; ?></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td><?php echo $data['alamat_lengkap']; ?></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><?php echo $data['no_hp']; ?></td>
            </tr>
            <tr>
                <td><a href="index.php" class="btn btn-primary">Kembali</a></td>
                <td></td>
            </tr>
        </table>

        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>