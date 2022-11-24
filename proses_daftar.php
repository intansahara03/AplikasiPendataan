<?php
include("koneksi.php");
if(isset($_POST['kirim_data'])){
    $Nama_lengkap=$_POST['nama_lengkap'];
    $Username=$_POST['username'];
    $Password=$_POST['password'];
    $No_telpon=$_POST['no_telpon'];
    $Umur=$_POST['umur'];

    $sql = "INSERT INTO intan9nov(nama_lengkap,username, password,no_telpon,umur) VALUES ('$Nama_lengkap',$Username', '$Password',$No_telpon',$Umur')";
    $query= mysqli_query($koneksi, $sql); 
}else{
    ('akses dilarang');
}
?>