<?php
// Membuat array asosiatif berisi data 10 mahasiswa, sekarang ditambahkan 'gambar'
$mahasiswa = [
    [
        "nama" => "Salwa Alya",
        "nim" => "243040081",
        "jurusan" => "Teknik Informatika",
        "email" => "salwaalya@gmail.com",
        "gambar" => "salwa.jpg"
    ],
    [
        "nama" => "Try Noer Arreva",
        "nim" => "243040072",
        "jurusan" => "Teknik Informatika",
        "email" => "TryNoeArreva@gmail.com",
        "gambar" => "areva.jpg"
    ],
    [
        "nama" => "Tanwirul Fuadhilan",
        "nim" => "243040010",
        "jurusan" => "Teknik Informatika",
        "email" => "tanwirulfuadhilan@gmail.com",
        "gambar" => "aceh.jpg"
    ],
    [
        "nama" => "Vicka Aulia",
        "nim" => "243040067",
        "jurusan" => "Teknik Informatika",
        "email" => "vickaaulia@gmail.com",
        "gambar" => "vicka.jpg"
    ],
    [
        "nama" => "Andien",
        "nim" => "241010052",
        "jurusan" => "Teknik Pangan",
        "email" => "Andien@gmail.com",
        "gambar" => "andin.jpg"
    ],
    [
        "nama" => "Billy Wicaksono",
        "nim" => "243040090",
        "jurusan" => "Teknik Informatika",
        "email" => "billywicaksono@gmail.com",
        "gambar" => "billy.jpg"
    ],
    [
        "nama" => "Rafika",
        "nim" => "242040071",
        "jurusan" => "Pendidikan Biologi",
        "email" => "rafika@gmail.com",
        "gambar" => "pikoy.jpg"
    ],
    [
        "nama" => "Ilham Syaugi",
        "nim" => "243040074",
        "jurusan" => "Teknik Informatika",
        "email" => "ilhamsyaugi@gmail.com",
        "gambar" => "ilham.jpg"
    ],
    [
        "nama" => "Arneu Raysa",
        "nim" => "243040089",
        "jurusan" => "Teknik Informatika",
        "email" => "arneuraysa@gmail.com",
        "gambar" => "arneu.jpg"
    ],
    [
        "nama" => "Almira Alifia Sp",
        "nim" => "243004097",
        "jurusan" => "Teknik Informatika",
        "email" => "almiraalifia@gmail.com",
        "gambar" => "almira.jpg"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nim"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>