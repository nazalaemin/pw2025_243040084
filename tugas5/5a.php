<?php
// Membuat array asosiatif berisi data 10 mahasiswa
$mahasiswa = [
    [
        "nama" => "Salwa Alya",
        "nim" => "243040081",
        "jurusan" => "Teknik Informatika",
        "email" => "salwaalya@gmail.com"
    ],
    [
        "nama" => "Try Noer Arreva",
        "nim" => "243040072",
        "jurusan" => "Teknik Informatika",
        "email" => "TryNoeArreva@gmail.com"
    ],
    [
        "nama" => "Tanwirul Fuadhilan",
        "nim" => "243040010",
        "jurusan" => "Teknik Informatika",
        "email" => "tanwirulfuadhilan@gmail.com"
    ],
    [
        "nama" => "Vicka Aulia",
        "nim" => "243040067",
        "jurusan" => "Teknik informatika",
        "email" => "vickaaulia@gmail.com"
    ],
    [
        "nama" => "Andien",
        "nim" => "241010052",
        "jurusan" => "Teknik Pangan",
        "email" => "Andien@gmail.com"
    ],
    [
        "nama" => "Billy Wicaksono",
        "nim" => "243040090",
        "jurusan" => "Teknik Informatika",
        "email" => "billywicaksono@gmail.com"
    ],
    [
        "nama" => "Rafika",
        "nim" => "242040071",
        "jurusan" => "Pendidikan biologi",
        "email" => "rafika@gmail.com"
    ],
    [
        "nama" => "Ilham Syaugi",
        "nim" => "243040074",
        "jurusan" => "Teknik Informatika",
        "email" => "ilhamsyaugi@gmail.com"
    ],
    [
        "nama" => "Arneu Raysa",
        "nim" => "243040089",
        "jurusan" => "Teknik Informatika",
        "email" => "arneuraysa@gmail.com"
    ],
    [
        "nama" => "Almira Alifia Sp",
        "nim" => "243004097",
        "jurusan" => "Teknik Infofmatika",
        "email" => "almiraalifia@gmail.com"
    ]
];

// Menampilkan data mahasiswa ke layar
foreach ($mahasiswa as $data) {
    echo "Nama: " . $data["nama"] . "<br>";
    echo "NIM: " . $data["nim"] . "<br>";
    echo "Jurusan: " . $data["jurusan"] . "<br>";
    echo "Email: " . $data["email"] . "<br>";
    echo "<hr>";
}
?>