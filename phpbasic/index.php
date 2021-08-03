<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<?php //include('mylib/warga.lib.php'); 
include('mylib/myDb.php');

?>
<body>
<?php
    $Db = new MyDb();
    $data_warga = $Db->show();
    //print_r($data_warga);
    if(isset($_POST['daftar'])){
        //echo "Tombol Daftar Telah Di klik";
        $noktp=$_POST['no_ktp'];
        $nama = $_POST['nama_lengkap'];
        $alamat = $_POST['alamat_lengkap'];
        $nohp = $_POST['no_hp'];
        $querysimpan = $Db->add_data($noktp,$nama,$alamat,$nohp);
        //print_r($_POST);
        if($querysimpan==TRUE){
            $pesansimpan="Data Tersimpan Ke Database";
        }else{
            $pesansimpan="Data Gagal Simpan Ke Database";
        }
    }
    if(isset($_GET['hapus'])){
        //echo "Data dengan ID :".$_GET['hapus']."  Akan di hapus";
        $idwarga=$_GET['hapus'];
        $queryhapus = $Db->delete($idwarga);
        if($queryhapus==TRUE){
            $pesanhapus= "Data Berhasil di hapus";
        }else{
            $pesanhapus ="Data Gagal Hapus";
        }
    }
?>
<div class="container">
    <div class="col-12">
        <div class="mt-5">
            <h2>Data Warga</h2>
            <a href="form-daftar.php" class="btn btn-secondary mt-4 mb-3">[+] Daftar Warga</a>
        </div>
    <?php 
        if(isset($_POST['daftar'])){
    ?>
        <div class="alert alert-success"><?php echo $pesansimpan; ?></div>
        <?php 
    }

    ?>

    <?php 
        if(isset($_GET['hapus'])){
    ?>
        <div class="alert alert-danger"><?php echo $pesanhapus; ?></div>
        <?php 
    }
    
    ?>
        <div class="text-center bg-white">
            <!-- table -->
            <table class="table table-bordered ">
                <thead>
                    <tr class="bg-primary">
                        <th scope="col">No</th>
                        <th scope="col">No KTP</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    foreach($data_warga as $data){ 
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $data['no_ktp']; ?></td>
                            <td><?php echo $data['nama_lengkap']; ?></td>
                            <td><?php echo $data['alamat_lengkap']; ?></td>
                            <td><?php echo $data['no_hp']; ?></td>
                            <td>
                                <a class='btn btn-success' href="detail-warga.php?id=<?php echo $data['id']; ?>">Detail</a>  
                                <a class='btn btn-danger' href="index.php?hapus=<?php echo $data['id']; ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>