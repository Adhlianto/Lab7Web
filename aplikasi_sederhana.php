<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Sederhana</title>
</head>
<body>
<h2>Masukan Data Anda</h2>
    <form method="post">
        <div>
        <label> 
            <tr>
                <td>Nama : <td>
            </tr>
        </label>
        <input type="text" name="nama">
        </div>
        <div>
        <label> Tempat Tanggal Lahir : </label>
        <input type="text" name="ttl">
        </div>
        <div>
        <label> Pekerjaan : </label>
        <input type="text" name ="pekerjaan">
        </div>
        <div>
        <input type="submit" value="Kirim">
</div>
    </form>
    <div>
        <?php
        echo 'Nama :' . $_POST['nama'];
        ?>
    </div>
    <div>
        <?php
        echo 'Tempat Tanggal Lahir :' . $_POST['ttl'];
        ?>
    </div>
    <div>    
        <?php
        echo 'Pekerjaan :' . $_POST['pekerjaan'];
        ?>
    </div>
</body>
</html>