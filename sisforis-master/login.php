<?php
include 
'config/koneksi.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if($username != "" and $password != "") {
	$query = mysql_query("SELECT * FROM pegawai where id_pegawai='$username' and password='$password'");
	$result = mysql_fetch_array($query);
	$row = mysql_num_rows($query);
	if($row == 1){
        $_SESSION['status_pegawai'] = $result['status_pegawai'];       	
        if($result['status_pegawai']=="INV"){
			header("location:menu_peg_inventaris.php");
        }else if($result['status_pegawai']=="KEU"){
			header("location:menu_peg_keuangan.php");
        }
		else if($result['status_pegawai']=="PEM") {
			header("location:menu_peg_pemeliharaan.php");
		}
    }else{
		echo "Username atau password anda salah";
    }
}
else {
	echo "Username atau password anda salah";
}

?>

