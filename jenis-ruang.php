<html>
    <head>
</head>
<body>
    <h1>APLIKASI PENDATAAN RUANG SMKN 1 SAYUNG</h1>
    <table border="1">
        <tr>
            <th>nama ruang</th>
            <th>jenis ruang</th>
            <th>kondisi</th>
        </tr>
<?php
include("koneksi.php");
$sql='SELECT * FROM intan9nov';
$query=mysqli_query($koneksi,$sql);
while($intan9nov=mysqli_fetch_array($query)){
    echo"<tr>"
    echo"<td>".$intan9nov['nama_ruang']."</td";
    echo"<td>".$intan9nov['jenis_ruang']."</td";
    echo"<td>".$intan9nov['kondisi']."</td";
    echo"</td>";
    echo"</td>";
}
?>
</table>
</body>
</html>