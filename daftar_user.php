<html>
    <head>
        <title> Membuat Login</title>
</head>
<body>
    <h2>Daftar User Anda</h2>
    <br/>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "DAFTAR GAGAL! USERNAME ATAU PASSWORD SALAH!";
        }else if($_GET['pesan'] == "daftar"){
            echo "ANDA TELAH BERHASIL DAFTAR-!!";
        }else if ($_GET['pesan'] == "belum_daftar"){
            echo "ANDA HARUS DAFTAR UNRUK MENGAKSES HALAMAN ADMIN";
        }
    }
    ?>
    <br/>
    <br/>
    <form method="POST" method="login.php">
    <p>
                    <label for ="nama_ruang">nama ruang:</label>
                    <input type="text" name="nama_ruang"/>
                </p>

   
                <p>
                    <label for ="nama_lengkap">nama_lengkap:</label>
                    <input type="text" name="nama_lengkap"/>
                </p>
</tr>
<tr>
<p>
                    <label for ="password">password:</label>
                    <input type="password" name="password"/>
                </p>
</tr>
<tr>
<p>
                    <label for ="no_telpon">no_telpon:</label>
                    <input type="number" name="no_telpon"/>
                </p>
</tr>
<tr>
<p>
                    <label for ="umur">umur:</label>
                    <input type="number" name="umur"/>
                </p>
</tr>
<tr>
        
    <td></td>
    <td>:</td>
    <td><a href="login.php"><input type="button" name="daftar" value="daftar"/></a></td>
</tr>
  </table>
</form>
</body>
</html>