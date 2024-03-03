<?php
class database{
	private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "gelamang";
    public $koneksi;

    public function __construct() {
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->koneksi->connect_errno) {
            echo "Koneksi database gagal : " . $this->koneksi->connect_error;
            exit();
        }
    }

    public function getConnection() {
        return $this->koneksi;
    }


    // clas tampil data service
	function artikel(){
		$data = mysqli_query($this->koneksi,"select * from tb_service");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	
    // Clas input
	function create_artikel($judul,$tanggal_post,$artikel){
		mysqli_query($this->koneksi,"insert into artikel values ('','$judul','$tanggal_post','$artikel')");
	}

    // proses hapus data servicw 
	function hapus_artikel($id){
		mysqli_query($this->koneksi,"delete from artikel where id_artikel='$id'");
	}
    // class edit data service  
	function Edit_artikel($id){
		$data = mysqli_query($this->koneksi,"select * from artikel where id_artikel='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
    // proses update data service
	function Update_artikel($id,$nama_perangkat,$model,$tanggal_masuk,$deskripsi){
		mysqli_query($this->koneksi,"update tb_service set nama_perangkat='$nama_perangkat', model='$model', tanggal_masuk='$tanggal_masuk',deskripsi='$deskripsi' where id_service='$id'");
	}
	// Data_teknisi
	
	// proses update data pelanggan end

		// // tabel transaksi 
		// function Data_transaksi(){
		// 	$data = mysqli_query($this->koneksi,
		// 	"SELECT tb_trasaksi.id_transaksi,tb_pelanggan.nama,tb_pelanggan.alamat,tb_pelanggan.no_hp,
		// 	tb_service.nama_perangkat,tb_service.model,tb_service.tanggal_masuk, tb_service.deskripsi,
		// 	tb_teknisi.nama_teknisi,
		// 	tb_trasaksi.status_transaksi,
		// 	tb_trasaksi.di_proses_oleh,
		// 	tb_trasaksi.total_biaya,
		// 	tb_trasaksi.tanggal_transaksi
		// 	FROM tb_trasaksi
		// 	LEFT JOIN tb_pelanggan ON tb_trasaksi.id_transaksi=tb_pelanggan.Id_pelanggan
		// 	LEFT JOIN tb_service ON tb_trasaksi.id_transaksi=tb_service.id_service
		// 	LEFT JOIN tb_teknisi ON tb_trasaksi.id_transaksi=tb_teknisi.id_teknisi;");
		// 	while($row = mysqli_fetch_array($data)){
		// 		$hasil[] = $row;
		// 	}
		// 	return $hasil;
		// 	// tampil teknisi end 
		// }


		    // clas tampil pelanggan start
	function Data_transaksi_coba(){
		$data = mysqli_query($this->koneksi,"select * from tb_transaksi");

		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
		    // clas tampil pelanggan start
	function Data_transaksi(){
		$data = mysqli_query($this->koneksi,
		"SELECT tb_transaksi.id_transaksi,tb_transaksi.status_transaksi,
		tb_pelanggan.nama,tb_pelanggan.alamat,tb_pelanggan.no_hp,
		tb_service.nama_perangkat,	tb_service.model, tb_service.tanggal_masuk,tb_service.deskripsi
			FROM tb_transaksi
			LEFT JOIN tb_pelanggan ON tb_transaksi.id_transaksi=tb_pelanggan.id_pelanggan
			LEFT JOIN tb_service ON tb_transaksi.id_transaksi=tb_service.id_service;");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	

		// tambah pelanggan start
	function input_transaksi($id_pelanggan, $id_service, $status_transaksi){
		mysqli_query($this->koneksi,"insert into tb_transaksi values ('','$id_pelanggan','$id_service','$status_transaksi')");
	}



	// tambah data dari 2 tabel
	function Input_data_2($nama, $alamat, $no_tlpn, $nama_perangkat, $model, $tanggal_masuk, $deskripsi){
		// $sql = "insert into tb_pelanggan values ('','$nama','$alamat','$no_tlpn')";
		// $sql2 = "insert into tb_service values ('','$nama_perangkat','$model','$tanggal_masuk','$deskripsi')";

		mysqli_query($this->koneksi,"insert into tb_service values ('','$nama_perangkat','$model','$tanggal_masuk','$deskripsi')");
		mysqli_query($this->koneksi,"insert into tb_pelanggan values ('','$nama','$alamat','$no_tlpn')");
		
	}
	// tambah data dari 2 tabel end
	// insert into tb_service values ('','$nama_perangkat','$model','$tanggal_masuk','$deskripsi')
}
?>