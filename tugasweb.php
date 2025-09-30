<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="shortcut icon" href="gambar/sucipto.jpeg" type="image/x-icon">
    <title>Tugas Web RAPLI</title>
</head>
<body>
    <?php
        $nama = "Rafli Nur Ramdhan";
        $nim = "102092400023";
        $kelas = "SI-08-A";
        $prodi = "Sistem Informasi";
        $fakultas = "Fakultas Rekayasa Industri";
    ?>
    <div class="header">
        <h1>Halo, saya <?php echo $nama?></h1>
        <h3>102092400023 | SISTEM INFORMASI | FAKULTAS REKAYASA INDUSTRI</h3>
    </div>

    <div class="fotoprofil">
        <img src="gambar/fotoprofil.jpeg" class="foto">
    </div>

    <div class="sosmed">
        <a href="https://www.instagram.com/raflinurrrrrr_/"><img src="gambar/instagram.png" class="foto"></a>
        <a href="https://www.tiktok.com/@raflinurrr"><img src="gambar/tiktok.png" class="foto"></a>
        <a href="https://github.com/raflinurramdhan21-dev"><img src="gambar/github.png" class="foto"></a>
        <a href="https://www.linkedin.com/in/rafli-nur-ramdhan-352363328/"><img src="gambar/linkedin.png" class="foto"></a>
    </div>

    <table class="tabel">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Program Studi</th>
            <th>Fakultas</th>
        </tr>
        <tr>
            <td><?php echo $nama ?></td>
            <td><?php echo $nim ?></td>
            <td><?php echo $kelas ?></td>
            <td><?php echo $prodi ?></td>
            <td><?php echo $fakultas ?></td>
        </tr>
    </table>

    <div class="link">
        <a href="https://www.youtube.com/watch?v=uV9koQm__fI">LINK GIVEAWAY</a>
    </div>

    <div class="footer">
        <h3>Created by Rafli Nur Ramdhan | 2025</h3>
        <time>Last Updated: <?php echo date("d M Y H:i:s"); ?></time>
    </div>
</body>
</html>