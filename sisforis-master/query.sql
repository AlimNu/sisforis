CREATE TABLE pegawai(
	id_pegawai varchar(15) NOT NULL,
	nama_pegawai varchar(25) NOT NULL,
	password varchar(15) NOT NULL,
	status_pegawai varchar(15) NOT NULL,
	PRIMARY KEY(id_pegawai)
);


CREATE TABLE data_barang(
	no_aset int(10) NOT NULL AUTO_INCREMENT,
	id_pegawai varchar(15) NOT NULL,
	tgl_aset datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	dsc_aset varchar(50) NOT NULL,
	status varchar(5) NOT NULL,
	harga int NOT NULL DEFAULT 0,
	jenis varchar(20) NOT NULL,
	lokasi varchar(20) NOT NULL,
	jumlah int NOT NULL DEFAULT 0,
	PRIMARY KEY(no_aset),
	FOREIGN KEY(id_pegawai) references pegawai(id_pegawai)
);


CREATE TABLE data_lahan (
	no_aset int(10) NOT NULL AUTO_INCREMENT,
	id_pegawai varchar(15) NOT NULL,
	tgl_aset datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	dsc_aset varchar(50) NOT NULL,
	luas int NOT NULL DEFAULT 0,
	nib varchar(15) NOT NULL,
	no_sertifikat varchar(15) NOT NULL,
	ukuran int NOT NULL,
	PRIMARY KEY(no_aset),
	FOREIGN KEY(id_pegawai) references pegawai(id_pegawai)
);


CREATE TABLE data_lainnya (
	no_aset int(10) NOT NULL AUTO_INCREMENT,
	id_pegawai varchar(15) NOT NULL,
	tgl_aset datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	dsc_aset varchar(50) NOT NULL,
	kategori varchar(20) NOT NULL,
	warna varchar(15) NOT NULL,
	tahun int NOT NULL DEFAULT 0,
	nomor varchar(25) NOT NULL,
	tgl_berlaku date NOT NULL,
	PRIMARY KEY(no_aset),
	FOREIGN KEY(id_pegawai) references pegawai(id_pegawai)
);