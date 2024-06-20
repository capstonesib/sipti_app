<?php
function edit_pribadi($post)
{
    global $conn;
    $id_user = $post['id_user'];  
    $nama_lengkap    = $post['nama_lengkap'];
    $tanggal   = $post['tanggal'];
    $alamat      = $post['alamat'];
    $nomor = $post['nomor'];
    $fotoLama  = strip_tags($post['fotoLama']);

    //check upload foto baru atau tidak?
    if($_FILES['foto']['error']== 4){
        $foto = $fotoLama;
    } else {
        $foto = upload_foto_profil();
    }
    
    $query = "UPDATE user SET nama_lengkap = '$nama_lengkap', tanggal = '$tanggal', alamat = '$alamat', nomor = '$nomor', foto = '$foto' WHERE id_user = $id_user";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function edit_password($post)
{
    global $conn;
    $id_user = $post['id_user'];  
    $email = $post['email'];
    $password = $post['password'];
    $password = md5($password);
    
    $query = "UPDATE user SET email = '$email', password = '$password' WHERE id_user = $id_user";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload_foto_profil()
{
    $namaFIle    = $_FILES['foto']['name'];
    $ukuranFile  = $_FILES['foto']['size'];
    $error       = $_FILES ['foto']['error'];
    $tmpName     = $_FILES['foto']['tmp_name'];

    //check file yang di upload
    $extensifileValid = ['jpg', 'jpeg', 'png'];
    $extensifile      = explode('.', $namaFIle);
    $extensifile      =strtolower(end($extensifile));

    //check format file 
    if (!in_array($extensifile, $extensifileValid)) {
        //pesan gagal
        echo "<script>
        alert('format File Tidak Valid');
        document location.href = 'ubah_profil.php';
        </script>";
    die();
    }

    //check ukuran file
    if ($ukuranFile > 2048000) {
        //pesan gagal
        echo "<script>
        alert('Ukuran max 2mb');
        document location.href = 'ubah_profil.php';
        </script>";
    }

    //generate nama_penjaga file baru
    $namaFIleBaru = uniqid();
    $namaFIleBaru .='.';
    $namaFIleBaru .= $extensifile;

    //pindahkan ke lokal folder
    move_uploaded_file($tmpName, '../assets/images'. $namaFIleBaru);
    return $namaFIleBaru;

}
?>