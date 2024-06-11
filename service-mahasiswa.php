<?php
$konek = mysqli_connect("localhost", "root", "");
mysqli_select_db($konek, "db_ajax046");

if (isset($_POST['nim'])) {
    $nim = mysqli_real_escape_string($konek, $_POST['nim']);
    $query = "SELECT * FROM tbl_mahasiswa046 WHERE nim046 = '{$nim}'";
    $result = mysqli_query($konek, $query);
    if ($result && $data = mysqli_fetch_array($result)) {
        echo "NAMA : {$data['nama046']} <br/>",
        "ALAMAT : {$data['alamat046']} <br/>",
        "TELP : {$data['telp046']} <br/>",
        "EMAIL : {$data['email046']} <br/>";
    }
}
?>