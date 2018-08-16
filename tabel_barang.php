<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assets/css/vertical_menu/styles.css">
   <script src="assets/js/jquery-latest.min.js" type="text/javascript"></script>
   <script src="assets/css/vertical_menu/script.js"></script>
   <!-- tambahan -->
   <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" href="assets/plugins/bootstrap/js/bootstrap.min.js">
 <link rel="stylesheet" href="assets/plugins/jQuery/jquery-2.1.1.min.js">
 <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css">
 <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap-theme.min.css">
 <link rel="stylesheet" href="assets/css/themes/theme-default.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
<title>Sisforis</title>
<link href="sisil.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
<link href="assets/css/cssfamilyRoboto.css" rel='stylesheet' type='text/css'>
<link href="lala.css" rel="stylesheet" type="text/css">

</head>
<body>

<!-- bagian header -->
<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="menu_peg_inventaris.php">Sisforis</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
	<div class="header">
    <div class="row">
    <div class="col-sm-4" style="background-image:url(assets/img/billgates4.jpg);">
      
    </div>
    <div class="col-sm-6" >
      <h2> Bill Gates </h2>
      <br> <i>data diri</i>  
    </div>
  </div>
  
  </div>
    <div class="main">
    	<div class="left"><h2>Menu Inventaris</h2>
        <h3></h3>
		 
        <!-- /Navigation -->
        <!-- code vertical dropdown-up sidebar using jquery -->
      <div class="container-menu">
<div id="cssmenu">
<ul>
	<li class="has-sub"><a href="#">Menu Inventaris</a>
            <ul>
               <li><a href="form_insert_barang.php">Inventaris Barang</a></li>
               <li><a href="form_insert_lahan.php">inventaris Lahan</a></li>
               <li><a href="form_insert_lainnya.php">inventaris Lainnya</a></li>
            </ul>
         </li>
         <li class="has-sub"><a href="#">Menu Mutasi</a>
            <ul>
               <li><a href="#">Mutasi Barang Rusak</a></li>
               <li><a href="#">Mutasi Pemindahan Barang</a></li>
            </ul>
         </li>
   <li class="has-sub"><a href="#">Menu Pelaporan</a>
      <ul>
         <li class="has-sub"><a href="#">Pelaporan Inventaris</a>
            <ul>
               <li><a href="tabel_barang.php">Inventaris Barang</a></li>
               <li><a href="tabel_lahan.php">Inventaris Lahan</a></li>
               <li><a href="tabel_lainnya.php">Inventaris Lainnya</a></li>
            </ul>
         </li>
         <li><a href="#">Pelaporan Tutup Buku</a>
         </li>
      </ul>
   </li>
</ul>
</div>

    <script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
    <script src="assets/js/mainn.js"></script>
		</div></div></div>
        <div class="middle">
        
			<h2>Data Inventaris Barang</h2><br> 
           <!-- <a href="form_insert_barang.php"><input type="button" class="btn btn-info" value="Insert Barang"></a>  
             -->
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siswa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM data_barang";
$result = mysqli_query($conn, $sql);

echo '
		<table class="table table-striped">
    <thead>
		<tr>
		<th>No</th>
		<th>No Aset</th>
		<th>ID Pegawai</th>
		<th>Tanggal Aset</th>
		<th>Deskripsi Aset</th>
		<th>Status</th>
		<th>Harga</th>
		<th>Jenis</th>
		<th>Lokasi</th>
		<th>Jumlah</th>
		</tr>
	</thead>
	<tbody>
		<tr>';

if (mysqli_num_rows($result) > 0) {
	
	
	$no = 1;
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "nama: " . $row["nama"]. " - kelas: " . $row["kelas"]. " <br>";
		
		echo "
			  <tr>
			  	<td>".$no."</td>
				<td>".$row["no_aset"]."</td>
				<td>".$row["id_pegawai"]."</td>
				<td>".$row["tgl_aset"]."</td>
				<td>".$row["dsc_aset"]."</td>
				<td>".$row["status"]."</td>
				<td>".$row["harga"]."</td>
				<td>".$row["jenis"]."</td>
				<td>".$row["lokasi"]."</td>
				<td>".$row["jumlah"]."</td>
			  </tr>
		
			  ";
			  $no = $no+1;;
		} 
} else {
    echo "0 results";
}

mysqli_close($conn);
echo '</tbody>';
		echo '</table>';
?> 
        </div>
    <div class="footer">
		<p><center>Sisforis &copy; 2016 <a href="http://www.sisforis-rpl2k16.com">sisforis-rpl2k16.com</a></p>


</body>
</html>
