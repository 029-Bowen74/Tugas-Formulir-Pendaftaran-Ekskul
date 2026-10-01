<?php
// Data siswa
$nama  = "Alek Bijer";
$kelas = "XII RPL 1";
$tugas = 95;
$uts   = 85;
$uas   = 80;

// Menghitung nilai akhir
$nilai_akhir = ($tugas * 0.3) + ($uts * 0.3) + ($uas * 0.4);

// Menentukan predikat
if ($nilai_akhir >= 90) {
    $predikat = "A";
} elseif ($nilai_akhir >= 80) {
    $predikat = "B";
} elseif ($nilai_akhir >= 75) {
    $predikat = "C";
} elseif ($nilai_akhir >= 60) {
    $predikat = "D";
} else {
    $predikat = "E";
}

// Menentukan status kelulusan
if ($nilai_akhir >= 75) {
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Penilaian Siswa</title>
</head>
<body>
    <h2>Hasil Penilaian Siswa</h2>
    <?php
    echo "<p>Nama: $nama</p>";
    echo "<p>Kelas: $kelas</p>";
    echo "<hr>";
    echo "<p>Nilai Tugas: $tugas</p>";
    echo "<p>Nilai UTS: $uts</p>";
    echo "<p>Nilai UAS: $uas</p>";
    echo "<hr>";
    echo "<p>Nilai Akhir: $nilai_akhir</p>";
    echo "<p>Predikat: $predikat</p>";
    echo "<p>Status: $status</p>";
    ?>
</body>
</html>