<?php
session_start();
require "db.php";
$aksi = $_GET['action'];

switch ($aksi) {
    // aksi untuk insert ke data baju
    case 'insert_shirt':
        $nama_baju = $_POST['nama_baju'];
        $pembuat = $_POST['pembuat'];
        $harga = $_POST['harga'];
        $result = insertShirt($nama_baju,$pembuat,$harga);
        if ($result) {
            $msg = "Tambah Baju Berhasil";
            $loc = "data_baju.php";
        } else {
            $msg = "Tambah Baju Gagal";
            $loc = "data_baju.php";
        }
        break;

    // aksi untuk edit data baju
    case 'update_shirt':
        $result = updateShirt($_POST['id_baju'], $_POST['nama_baju'], $_POST['pembuat'], $_POST['harga']);
        if ($result) {
            $msg = "Edit Baju Berhasil";
            $loc = "data_baju.php";
        } else {
            $msg = "Edit Baju Gagal";
            $loc = "data_baju.php";
        }
        break;
    //aksi untuk delete data baju
    case 'delete_shirt':
        $result = deleteShirt($_GET['id_baju']);
        if ($result) {
            $msg = "Hapus Baju Berhasil";
            $loc = "data_baju.php";
        } else {
            $msg = "Hapus Baju Gagal";
            $loc = "data_baju.php";
        }
        break;
    //aksi untuk insert data pembeli
    case 'insert_customer':
        $result = insertCustomers($_POST['nama_pembeli'], $_POST['alamat'], $_POST['email']);
        if ($result) {
            $msg = "Tambah Pembeli Berhasil";
            $loc = "data_pembeli.php";
        } else {
            $msg = "Tambah Pembeli Gagal";
            $loc = "data_pembeli.php";
        }
        break;
    //aksi untuk edit data pembeli
    case 'update_customer':
        $result = updateCustomer($_POST['id_pembeli'], $_POST['nama_pembeli'], $_POST['alamat'], $_POST['email']);
        if ($result) {
            $msg = "Edit Pembeli Berhasil";
            $loc = "data_pembeli.php";
        } else {
            $msg = "Edit Pembeli Gagal";
            $loc = "data_pembeli.php";
        }
        break;
    //aksi untuk delete data pembeli
    case 'delete_customer':
        $result = deleteCustomer($_GET['id_pembeli']);
        if ($result) {
            $msg = "Hapus Pembeli Berhasil";
            $loc = "data_pembeli.php";
        } else {
            $msg = "Hapus Pembeli Gagal";
            $loc = "data_pembeli.php";
        }
        break;
    //aksi untuk insert data transaksi
    case 'insert_transaction':
        $id_baju = $_POST['id_baju'];
        $row = getHargaBaju($id_baju);
        $harga = $row['harga'];
        $total_bayar = $harga * $_POST['jumlah'];
        $result = insertTransaction($_POST['id_baju'], $_POST['id_pembeli'], $harga, $_POST['jumlah'], $total_bayar);
        if ($result) {
            $msg = "Tambah Transaksi Berhasil";
            $loc = "data_transaksi.php";
        } else {
            $msg = "Tambah Transaksi Gagal";
            $loc = "data_transaksi.php";
        }
        break;
    //aksi untuk edit data transaksi
    case 'update_transaction':
        $id_baju = $_POST['id_baju'];
        $row = getHargaBaju($id_baju);
        $harga = $row['harga'];
        $total_bayar = $harga * $_POST['jumlah'];
        $result = updateTransaction($_POST['id_transaksi'], $_POST['id_baju'], $_POST['id_pembeli'], $harga, $_POST['jumlah'], $total_bayar);
        if ($result) {
            $msg = "Edit Transaksi Berhasil";
            $loc = "data_transaksi.php";
        } else {
            $msg = "Edit Transaksi Gagal";
            $loc = "data_transaksi.php";
        }
        break;       
    //aksi untuk delete data transaksi
    case 'delete_transaction':
        $result = deleteTransaction($_GET['id_transaksi']);
        if ($result) {
            $msg = "Hapus Transaksi Berhasil";
            $loc = "data_transaksi.php";
        } else {
            $msg = "Hapus Transaksi Gagal";
            $loc = "data_transaksi.php";
        }
        break; 
    
    //aksi untuk insert data user
    case 'insert_user':
        $nama_lengkap = $_POST['nama_lengkap'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repeat_password = $_POST['password-repeat'];
        $role = $_POST['role'];

        $user = getUserByEmail($email);
        if (mysqli_num_rows($user) > 0 ) {
            $msg = "Email sudah terdaftar"; 
            $loc = "form_register.php";
        } else if ($password !== $repeat_password) {
            $msg = "Password Tidak Sama";
            $loc = "form_register.php";
        } else {
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $result = insertUser($nama_lengkap, $email, $pass, $role);
            if ($result) {
                $msg = "Register Berhasil";
                $loc = "login_form.php";
            } else {
                $msg = "Register Gagal";
                $loc = "form_register.php";
            }
        }
        break;
    //aksi untuk login
    case 'login_user':
        $email = $_POST['email'];    
        $password = $_POST['password'];
        $result = cekLogin($email);
        if (mysqli_num_rows($result) > 0){ 
            $row = mysqli_fetch_assoc($result);   
            if(password_verify($password, $row['password'])){
                
                $_SESSION['status'] = true;
                $_SESSION['name'] = $row['nama_lengkap'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['role'] = $row['role'];

                $msg = "Login Berhasil";
                $loc = "../home.php";
            } else {
                $msg = "Email Atau Password Salah";
                $loc = "login_form.php";
            }
        } else {
            $msg = "Email Atau Password Salah";
            $loc = "login_form.php";
        }
        break;
}

if (!empty($msg)){
    echo "<script>
        alert('$msg');
        location.href = '$loc';
    </script>";
}

?>