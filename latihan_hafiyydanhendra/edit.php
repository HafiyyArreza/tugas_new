<?php

include("koneksi.php");


if( !isset($_GET['id']) ){
    header('Location: tampil.php');
}



$id = $_GET['id'];
$sql ="SELECT * FROM tb_peserta INNER JOIN tb_jurusan ON tb_peserta.jurusan_id =
tb_jurusan.jurusan_id WHERE tb_peserta.id='$id'";
$query = mysqli_query($db, $sql);
$tb_peserta = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<html>
   <head>
   </head>
   <body>
       <center>
       <h1>Edit</h1>
       <form action="proses_edit.php" method="POST">
       <input type="hidden" name="id" value="<?php echo $tb_peserta['id']?>" />
       <p>
        <label for="nama"> Nama : </label>
        <input type="text" name="nama" value="<?php echo $tb_peserta['nama']?>" />
    </p>
    <p>
        <label for="gender"> Gender : </label>
        <input type="radio" name="gender" value="LAKI MEN" value="<?php echo $row['gender']?>" /> Laki-laki
        <input type="radio" name="gender" value="WADON MEN" value="<?php echo $row['gender']?>" /> Perempuan
    </p>
    <p>
        <label for="asal_sekolah"> Asal Sekolah : </label>
        <input type="text" name="asal_sekolah" value="<?php echo $tb_peserta['asal_sekolah']?>" />
    </p>
    <p>
        <label for="tempat_lahir"> Tempat Lahir : </label>
        <input type="text" name="tempat_lahir" value="<?php echo $tb_peserta['tempat_lahir']?>" />
    </p>
    <p>
        <label for="tanggal_lahir"> Tanggal Lahir : </label>
        <input type="date" name="tanggal_lahir" value="<?php echo $tb_peserta['tanggal_lahir']?>" />
    </p>
    <p>
        <label for="jurusan"> Jurusan : </label>
        <input type="text" name="jurusan" value="<?php echo $tb_peserta['jurusan']?>" />
    </p>
    <p>
        <label for="kapasitas"> Kapasitas : </label>
        <input type="text" name="kapasitas" value="<?php echo $tb_peserta['kapasitas']?>" />
    </p>
    <p>
        <label for="terisi"> Terisi : </label>
        <input type="text" name="terisi" value="<?php echo $tb_peserta['terisi']?>" />
    </p>
<input type="submit" name="edit" value="edit">

</center>

</form>
</body>
</html>