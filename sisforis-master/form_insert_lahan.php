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
		</div></div></div>
		<div class="middle">
    <!--<div class="col-sm-4" style="background-image:url(assets/img/billgates4.jpg);">-->
      <h2 class="">Form Data Lahan</h2><br>
	<div class="form-group">
      <label class="control-label col-sm-2" for="no_aset">No. Aset:</label>
      <div class="col-sm-10">
        <input name="no_aset" type="text" class="form-control" id="no_aset" placeholder="No. Aset Barang"><br>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="id_peg">ID Pegawai:</label>
      <div class="col-sm-10">          
        <input name="id_peg" type="text" class="form-control" id="id_peg" placeholder="ID Pegawai"><br>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="date">Tanggal Masuk Aset:</label>
      <div class="col-sm-10">          
        <input name="tgl_aset" type="date" class="form-control" id="date" placeholder="Tanggal Masuk Aset" ><br>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="dsc_aset">Deskripsi Aset:</label>
      <div class="col-sm-10">          
        <input name="dsc_aset" type="text" class="form-control" id="dsc_aset" placeholder="Deskrpisi Aset"><br>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="luas">Luas:</label>
      <div class="col-sm-10">          
        <input name="luas" type="number" class="form-control" id="luas" placeholder="Luas"><br>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="nib">NIB:</label>
      <div class="col-sm-10">          
        <input name="nib" type="number" class="form-control" id="number" placeholder="NIB"><br>
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="no_sertifikat">No. Sertifikat:</label>
      <div class="col-sm-10">          
        <input name="harga" type="text" class="form-control" id="no_sertifikat" placeholder="No. Sertifikat"><br>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="ukuran">Ukuran:</label>
      <div class="col-sm-10">          
        <input name="ukuran" type="number" class="form-control" id="ukuran" placeholder="Ukuran"><br>
      </div>
    </div>
    <div class="form-group">   
      <div class="col-sm-offset-2 col-sm-12">
        <button type="submit" class="btn btn-warning">Submit</button>
        
      </div>
    </div>
        
    </div>
    <?php
			$n1 = $_POST["no_aset"];
			$n2 = $_POST["id_peg"];
			$n3 = $_POST["tgl_aset"];
			$n4 = $_POST["dsc_aset"];
			$n5 = $_POST["luas"];
			$n6 = $_POST["nib"];
			$n7 = $_POST["no_sertifikat"];
			$n8 = $_POST["ukuran"];
			
			include 'connectdb001.php';
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
			$quer = "INSERT INTO data_lahan(no_aset,id_peg,tgl_aset,dsc_aset,luas,nib,no_sertifikat,ukuran) values 			('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8')";
		mysql_query($quer);
		
		?>  
     <script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
    <script src="assets/js/mainn.js"></script>       
    <div class="footer">
		<p><center>Sisforis &copy; 2016 <a href="http://www.sisforis-rpl2k16.com">sisforis-rpl2k16.com</a></p>


</body>
</html>
