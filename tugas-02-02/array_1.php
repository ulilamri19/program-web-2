<!DOCTYPE html>
<html>
<head>
<title>Mengakses Variabel Array</title>
<link

href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/boots
trap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXS
U1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php
$mahasiswa = array
(
array("nim"=>"TI-001", "nama_mahasiswa"=>"Andi",

"program_studi"=>"Teknik Informatika"),

array("nim"=>"TI-002", "nama_mahasiswa"=>"Budi",

"program_studi"=>"Teknik Informatika"),

array("nim"=>"TI-003", "nama_mahasiswa"=>"Wati",

"program_studi"=>"Teknik Informatika"),

array("nim"=>"SI-001", "nama_mahasiswa"=>"Fatma",

"program_studi"=>"Sistem Informasi"),

array("nim"=>"SI-002", "nama_mahasiswa"=>"Wawan",

"program_studi"=>"Sistem Informasi")

);
?>
<table class="table table-striped">
<tr>
<th>No</th>
<th>NIM</th>
<th>Nama Mahasiswa</th>
<th>Program Studi</th>
</tr>
<?php
    $no = 1;
    foreach($mahasiswa as $mahasiswa)
        {
            echo "<tr>";
            echo "<td>".$no."</td>
                <td>".$mahasiswa['nim']."</td>
                <td>".$mahasiswa['nama_mahasiswa']."</td>
                <td>".$mahasiswa['program_studi']."</td>";
            echo "</tr>";
            $no++;
        }
?>
</table>
</body>
</html>