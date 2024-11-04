<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Login</title>
    <link rel ="stylesheet" type="text/css" href =style.css>
</head>
<body>
    <div class="kotak_login">
        <h3<b><center>Sistem Informasi Penjualan Barang</center></b> 
        <br/><center>Politeknik Negeri Subang</center></h3>
        <center><img src="gambar/logo_aplikasi.png" width = "200"></center>
    </div>
    <div class="kotak_login2">
        <p class="tulisan_login">Silahkan Login </p>
            <Form name = "form1" method="post" action ="proses_barang.php?action=login">
                <label>username</label>
                <input name="username" type="text" id="username" class ="form_login" placeholder="Username"/>

                <label>Password</label>
                <input name="Password" type="Password" id="Password" class ="form_login" placeholder="Password"/>

                <input type ="submit" name="Submit" class="tombol_login" value="Login"/>&nbsp;
                <input type="reset" name="reset" class="tombol_reset" value="reset"/>
    </Form>            
    </div>
</body>
</html>