<?php 

/** fungsi untuk connect ke database */
function conn(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_toko_baju";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
    return $conn;
}

/** fungsi untuk menampilkan data baju */
function getShirts() {
    $conn = conn();
    $sql = "SELECT * FROM tb_baju";
    $result = mysqli_query($conn,$sql);
    //biar ketika data di table buku kosong, $rows tidak undefined
    $rows = [];
    while ($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}

/** fungsi untuk menampilkan data pembeli */
function getCustomers() {
    $conn = conn();
    $sql = "SELECT * FROM tb_pembeli";
    $result = mysqli_query($conn,$sql);
    $rows = [];
    while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}

/** fungsi untuk menampilkan data transaksi */
function getTransactions(){
    $conn = conn();
    $sql = "SELECT tb_transaksi.id_transaksi, tb_pembeli.nama_pembeli, tb_baju.nama_baju, tb_transaksi.harga_baju, tb_transaksi.jumlah, tb_transaksi.total_bayar FROM tb_baju INNER JOIN tb_transaksi ON tb_baju.id_baju =  tb_transaksi.id_baju INNER JOIN tb_pembeli ON tb_pembeli.id_pembeli = tb_transaksi.id_pembeli";
    $result = mysqli_query($conn,$sql);
    $rows = [];
    while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}


/** fungsi untuk query insert data baju */
function insertShirt($nama_baju, $pembuat, $harga){
    $conn = conn();
    $sql = "INSERT INTO tb_baju (nama_baju, pembuat, harga) VALUES ('$nama_baju','$pembuat','$harga')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

/** fungsi untuk menampilkan data baju berdasarkan id_baju tertentu */
function getShirtbyID($id_baju){
    $conn = conn();
    $sql = "SELECT * FROM tb_baju WHERE id_baju = '$id_baju'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    return $row;
}

/** fungsi untuk query edit data baju*/
function updateShirt($id_baju, $nama_baju, $pembuat, $harga){
    $conn = conn();
    $sql = "UPDATE tb_baju SET nama_baju ='$nama_baju', pembuat ='$pembuat', harga ='$harga' WHERE id_baju ='$id_baju'";
    $result = mysqli_query($conn, $sql); 
    return $result;
}

/** fungsi untuk query hapus data baju */
function deleteShirt($id_baju){
    $conn = conn();
    $sql = "DELETE FROM tb_baju where id_baju = '$id_baju'";
    $result = mysqli_query($conn,$sql);
    return $result;
}

/** fungsi untuk query insert data pembeli */
function insertCustomers($nama_pembeli, $alamat, $email){
    $conn = conn();
    $sql = "INSERT INTO tb_pembeli (nama_pembeli, alamat, email) VALUES ('$nama_pembeli', '$alamat', '$email')";
    $result = mysqli_query($conn,$sql);
    return $result;
}

/** fungsi untuk menampilkan data pembeli berdasarkan id_pembeli tertentu */
function getCustomerbyID($id_pembeli){
    $conn = conn();
    $sql = "SELECT * from tb_pembeli WHERE id_pembeli = '$id_pembeli'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    return $row;
}

/** fungsi untuk query edit data pembeli */
function updateCustomer($id_pembeli, $nama_pembeli, $alamat, $email){
    $conn = conn();
    $sql = "UPDATE tb_pembeli SET nama_pembeli = '$nama_pembeli', alamat = '$alamat', email = '$email' WHERE id_pembeli = '$id_pembeli'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

/**fungsi untuk query hapus data pembeli */
function deleteCustomer($id_pembeli) {
    $conn = conn();
    $sql = "DELETE FROM tb_pembeli WHERE id_pembeli = '$id_pembeli'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

/** fungsi untuk mendapatkan nilai id_baju, nama_baju dan harga dari tabel baju untuk digunakan sebagai option di form*/
function fetchShirts(){
    $conn = conn();
    $sql = "SELECT id_baju, nama_baju, harga FROM tb_baju";
    $result = mysqli_query($conn, $sql);
    $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $options;
}

/** fungsi untuk mendapatkan nilai id_pembeli, nama_pembeli dari tabel tb_pembeli untuk digunakan sebagai option di form*/
function fetchCustomers(){
    $conn = conn();
    $sql = "SELECT id_pembeli, nama_pembeli FROM tb_pembeli";
    $result = mysqli_query($conn, $sql);
    $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $options;
}

/** fungsi untuk menampilkan data transaksi berdasarkan id_transaksi tertentu */
function getTransactionbyID($id_transaksi){
    $conn = conn();
    $sql = "SELECT tb_transaksi.id_transaksi, tb_baju.id_baju, tb_pembeli.id_pembeli, tb_baju.nama_baju, tb_pembeli.nama_pembeli, tb_transaksi.harga_baju, tb_transaksi.jumlah, tb_transaksi.total_bayar FROM tb_baju INNER JOIN tb_transaksi ON tb_baju.id_baju =  tb_transaksi.id_baju INNER JOIN tb_pembeli ON tb_pembeli.id_pembeli = tb_transaksi.id_pembeli WHERE tb_transaksi.id_transaksi = '$id_transaksi'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    return $row;
}

/** fungsi untuk mendapat harga baju */
function getHargaBaju($id_baju){
    $conn = conn();
    $sql = "SELECT harga FROM tb_baju WHERE id_baju = '$id_baju'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    return $row;
}

/** fungsi untuk query insert data transaksi */
function insertTransaction($id_baju, $id_pembeli, $harga_baju, $jumlah, $total_bayar){
    $conn = conn();
    $sql = "INSERT INTO tb_transaksi VALUE ('','$id_baju','$id_pembeli','$harga_baju','$jumlah', '$total_bayar')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

/** fungsi untuk query edit data transaksi */
function updateTransaction($id_transaksi, $id_baju, $id_pembeli, $harga_baju, $jumlah, $total_bayar){
    $conn = conn();
    $sql = "UPDATE tb_transaksi SET id_baju = '$id_baju', id_pembeli = '$id_pembeli', harga_baju = '$harga_baju', jumlah = '$jumlah', total_bayar = '$total_bayar' WHERE id_transaksi = '$id_transaksi'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

/** fungsi untuk query hapus data transaksi */
function deleteTransaction($id_transaksi){
    $conn = conn();
    $sql = "DELETE FROM tb_transaksi WHERE id_transaksi = '$id_transaksi'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

/** fungsi untuk query mendapatkan data user berdasarkan email */
function getUserByEmail($email){
    $conn = conn();
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

/**fungsi untuk query insert data user */
function insertUser($nama_lengkap, $email, $password, $role){
    $conn = conn();
    $sql = "INSERT INTO users VALUE ('', '$nama_lengkap', '$email', '$password', '$role')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

/** fungsi untuk query cek email dan password ada atau tidak di database */
function cekLogin($email, $password){
    $conn = conn();
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    return $result;
}