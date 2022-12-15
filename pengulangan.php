<?php 
$mahasiswa = [
    [
        "nama" => "Salman Alhidamkara",
        "nim" => "123456",
        "jurusan" => "Teknik Informatika",
        "email" => "rizky@gmail.com",
        "nilai"=>90,
    ],
    [
        "nama" => "Dede Kurniawan",
        "nim" => "123456",
        "jurusan" => "Teknik Informatika",
        "email" => "dede@gmail.com",
        "nilai"=>79,
    ],
    [
        "nama" => "rifki",
        "nim" => "1234561",
        "jurusan" => "Teknik Informatika",
        "email" => "rifki@gmail.com",
        "nilai"=> 60,
    ],
    [
        "nama" => "Ahmad",
        "nim" => "1234561",
        "jurusan" => "Teknik Informatika",
        "email" => "ahmad@gmail.com",
        "nilai"=> 95,
    ],
];

?>
<table border=1>
    <tr>
        <th> Nama</th>
        <th> NIM</th>
        <th> Jurusan </th>
        <th> Email</th>
        <th> Nilai</th>
        <th> Status</th>
    </tr>
       

<?php
foreach ($mahasiswa as $mhs) {
    echo "<tr>";
    echo "<td>{$mhs['nama']}</td>";
    echo "<td>{$mhs['nim']}</td>";
    echo "<td>{$mhs['jurusan']}</td>";
    echo "<td>{$mhs['email']}</td>";
    echo "<td>{$mhs['nilai']}</td>";
  

    if($mhs['nilai'] >= 65){

        echo "<td>Lulus<td>";

    }
    else{

        echo "<td>Tidak<td>";


    }

    echo "</tr>";
}

?>
</table>








