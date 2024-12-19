<!DOCTYPE html>
<html>
<head>
    <title>Segitiga Angka</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 30px;
            height: 30px;
            text-align: center;
            color: white;
        }
        .dark {
            background-color: navy;
        }
        .light {
            background-color: gray;
        }
    </style>
</head>
<body>

<table>
<?php
// Loop untuk membuat baris
for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    // Loop untuk membuat kolom dalam baris
    for ($j = 1; $j <= $i; $j++) {
        // Tentukan kelas berdasarkan ganjil/genap kolom
        $class = ($i % 2 == 0) ? 'light' : 'dark';
        echo "<td class='$class'>$j</td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>