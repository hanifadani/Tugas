<!DOCTYPE html>
<html>
<head>
    <title>Hitung Nilai Rata-Rata Mahasiswa</title>
</head>
<body>
    <form method="post" action="">
        <label>Nama Mahasiswa: </label>
        <input type="text" name="nama"><br><br>

        <label>Ujian Tengah Semester: </label>
        <input type="number" name="uts"><br><br>

        <label>Tugas Mandiri: </label>
        <input type="number" name="tugas"><br><br>

        <label>Ujian Akhir Semester: </label>
        <input type="number" name="uas"><br><br>

        <input type="submit" name="submit" value="Hitung Nilai"><br><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Mengambil nilai dari input form
        $nama = $_POST['nama'];
        $uts = $_POST['uts'];
        $tugas = $_POST['tugas'];
        $uas = $_POST['uas'];

        // Menghitung nilai rata-rata
        $rata_rata = ($uts + $tugas + $uas) / 3;

        // Menentukan grade
        if ($rata_rata >= 85) {
            $grade = "A";
        } elseif ($rata_rata >= 70) {
            $grade = "B";
        } elseif ($rata_rata >= 60) {
            $grade = "C";
        } elseif ($rata_rata >= 50) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        // Menentukan kelulusan
        $status = ($rata_rata >= 60) ? "lulus" : "tidak lulus";

        // Menampilkan hasil
        echo "$nama mendapatkan nilai rata-rata $rata_rata ($grade) dan $status.";
    }
    ?>
</body>
</html>