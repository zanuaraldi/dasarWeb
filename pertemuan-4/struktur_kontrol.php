<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo " <br> Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br>";

echo "Ada soal cerita : Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika.<br>
Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah.<br>
Bantu guru ini menghitung total nilai yang akan digunakan untuk <br>
menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah.<br>Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)<br>";
echo "<b>JAWABAN:</b><br>";
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
$totalNilai = 0;
$jumlahSiswa = 0;
for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
    $jumlahSiswa += 1;
}
$rataRata = $totalNilai / $jumlahSiswa;
echo "Jadi rata-ratanya yaitu " . $rataRata;
echo "<br><br>";

echo "Ada soal cerita : Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. <br>
Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. <br>
Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon.<br>";
echo "<b>JAWABAN:</b><br>";
$hargaProduk = 120000;
$hargaBayar;
if($hargaProduk >= 100000){
    $hargaBayar = $hargaProduk - ($hargaProduk * 0.2);
    echo "Kamu mendapatkan diskon sebesar Rp.".($hargaProduk * 0.2)."<br>"   ;
} else {
    $hargaBayar = $hargaProduk;
}
echo "Harga yang harus dibayar Sebesar Rp.".$hargaBayar;
echo "<br><br>";

echo "Ada soal cerita : Seorang pemain game ingin menghitung total skor mereka dalam permainan.<br>
Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. Jika mereka memiliki<br>
lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. Buat tampilan baris<br>
pertama “Total skor pemain adalah: (<b>poin</b>)”. Dan baris kedua “Apakah pemain<br>
mendapatkan hadiah tambahan? <b>(YA/TIDAK)</b>”<br>";
echo "<b>JAWABAN:</b><br>";
$skor = 500;
echo "Total skor pemain adalah : ".$skor."<br>";
$hasil = ($skor > 500)? "YA" : "TIDAK";
echo "Apakah pemain mendapatkan hadiah tambahan? : ".$hasil."<br>";
$skor = 700;
echo "Total skor pemain adalah : ".$skor."<br>";
$hasil = ($skor > 500)? "YA" : "TIDAK";
echo "Apakah pemain mendapatkan hadiah tambahan? : ".$hasil."<br>";

?>