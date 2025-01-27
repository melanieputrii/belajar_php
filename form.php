<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
<fieldset>
        <h1>Isi Data Berikut Ini :</h1>
        <p>
            <label>NISN :</label>
        <input type="text" name="nisn" >
</p>

         <p>
            <label>Username :</label>
         <input type="text" name="nama">
            
        </p>
        <p>
            <label>Tempat lahir :</label>
            <input type="text" name="tempat" >
        </p>
        <p>
            <label>Tanggal Lahir :</label>
            <input type="date" name="tanggal" >
        </p>    
        <p>
            <label>Jenis Kelamin :</label>
            <input type="radio" name="Jenkel" value="L">Laki-laki
            <input type="radio" name="Jenkel" value="P">Perempuan <br />
        </p>
        <p>
            <label>Agama :</label>
                    <select name="agama">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
                    </select>
        </p>
        <p>
            <p> <label>Alamat :</label> </p>
            <textarea name="alamat" cols="30" rows="10"></textarea> 
        </p>
        <p>
            <label>Asal Sekolah :</label>
            <input type="text" name="asalsekolah">
        </p>
        <p>
            <label>Pilihan Jurusan 1 :</label>
            <select name="pilihan jurusan 1">
            <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
            <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
            <option value="DKV">Desai Komunikasi Visual</option>
            <option value="SP">Seni Pertunjukan</option>
            <option value="AKL">Akuntansi Dan Keuangan Lembaga</option>
            <option value="MPLB">Manajemen Perkantoran & Layanan Bisnin</option>
            <option value="PH">Perhotelan</option>
            <option value="PM">Pemasaran</option>
            <option value="BCF">BroadCasting &Perfilman</option>
            <option value="KL">Kuliner</option>
            </select>
        </p>
        <p>
            <label>Pilihan Jurusan 2 :</label>
            <select name="pilihan jurusan 2">
            <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
            <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
            <option value="DKV">Desai Komunikasi Visual</option>
            <option value="SP">Seni Pertunjukan</option>
            <option value="AKL">Akuntansi Dan Keuangan Lembaga</option>
            <option value="MPLB">Manajemen Perkantoran & Layanan Bisnin</option>
            <option value="PH">Perhotelan</option>
            <option value="PM">Pemasaran</option>
            <option value="BCF">BroadCasting &Perfilman</option>
            <option value="KL">Kuliner</option>
            </select>
        </p>
        <p>
            <labe>Ekstrakurikuler :</label>
            <input type="checkbox" name="OSIS">Osis
            <input type="checkbox" name="DA">Dewan Ambalan
            <input type="checkbox" name="PA">Pecinta Alam
            <input type="checkbox" name="REMAS">Remaja Masjid Al-Kautsar
            <input type="checkbox" name="PMR">Palang Merah Remaja
            <input type="checkbox" name="FUTSAL">Futsal
            <input type="checkbox" name="BASKET">Basket
            <input type="checkbox" name="VOLI">Voli 
            <input type="checkbox" name="TEATER">Teater
            <input type="checkbox" name="LH">Laskar Hijau
            <input type="checkbox" name="GDS">Gerakan Disiplin Sekolah
        </p>
        <p>
           <input type="submit" value="Daftar">
        </p>
        
    </form>
</fieldset>
    
    
</body>
</html>