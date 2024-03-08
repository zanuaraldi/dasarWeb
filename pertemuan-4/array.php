<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(',', $nilaiLulus);

echo "<br><br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6]
];
$karyawanPengalamanLimaTahun = [];
foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(',', $karyawanPengalamanLimaTahun);
echo "<br><br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],

    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['CHarlie', 85],
    ]
];
$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "+-----------------+<br>";
    echo "|Nama : {$nilai[0]}<br>";
    echo "|Nilai : {$nilai[1]}<br>";
}
echo "+-----------------+<br><br>";

echo "Ada soal cerita : Seorang guru ingin mencetak daftar nilai siswa dalam <br>
ujian matematika. Guru tersebut memiliki data setiap siswa terdrir dari nama dan nilai.<br> 
Bantu guru ini mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas.<br> 
Dengan ketentuan nama dan nilai siswa Alice dapat 85, Bob dapat 92, Charlie dapat 78, <br>
David dapat 64, Eva dapat 90<br>";
echo "<b>JAWABAN:</b><br>";
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];
$nilaiTotal= 0;
foreach($daftarNilai as $nilai){
    $nilaiTotal += $nilai[1];
}
$rataRata = $nilaiTotal / count($daftarNilai);
echo "<b>Yang memiliki nilai diatas rata-rata yaitu</b><br>";
foreach($daftarNilai as $nilai){
    if($nilai[1] > $rataRata){
        echo "Nama : $nilai[0]<br>";
        echo "Nilai : $nilai[1]<br>";
    }
}
echo "rata-rata kelas :  $rataRata";

?>