<?php
$daftar_mahasiswa = [
    "Baedo",
    "Athala",
    "Iqbal",
    "Danil",
    "Ferandy",
];
 
echo "<h3>Daftar Nama Mahasiswa</h3>";
echo "<ul>";
 
foreach($daftar_mahasiswa as $mahasiswa){
    echo "<li>$mahasiswa</li>";
}
 
echo "</ul>";
 
?>
