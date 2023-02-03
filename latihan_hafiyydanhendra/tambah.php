<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <center>
</body>
</html>
<form action="proses_tambah.php" method="POST">
        <fieldset>
        <br>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" />
            <br>
            <p>
                <label for="gender">Jenis Kelamin :</label>
                <label><input type="radio" name="gender" value="LAKI MEN" />Laki - Laki</label>
                <label><input type="radio" name="gender" value="WADON MEN" />Perempuan</label>
            </p>
            <br>
                <label for="asal_sekolah">Asal Sekolah : </label>
                <input type="text" name="asal_sekolah" />
            <br>
            <br>
                <label for="tempat_lahir">Tempat Lahir : </label>
                <input type="text" name="tempat_lahir" />
            <br>
            <br>
                <label for="tanggal_lahir">Tanggal Lahir : </label>
                <input type="date" name="tanggal_lahir" />
            <br>
            <br>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" />
            <br>
            <br>
                <label for="kapasitas">Kapasitas : </label>
                <input type="text" name="kapasitas" />
            <br>
            <br>
                <label for="terisi">Terisi : </label>
                <input type="text" name="terisi" />
            <br>
            
<input type="submit" name="submit" value="submit">
</fieldset>
</form>
</body>
</html>
</center>