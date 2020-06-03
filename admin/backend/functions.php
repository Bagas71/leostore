<?php 
$conn = mysqli_connect("localhost","root","","leostore");

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows [] = $row;
	}
	return $rows;
}


		// registrasi
// registrasi
function registrasi($data){
	global $conn;
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn,$data["password"]);
	$password1 = mysqli_real_escape_string($conn,$data["password1"]);
	
			//cek username sdh ada at belum
	$result = mysqli_query($conn, "SELECT username FROM login WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar!');
			</script>";
			return false;
	}

		// cek konfimasi password
	if($password !== $password1) {
			echo "
			<script>
				alert('konfimasi password tidak sesuai!');
			</script>";
			return false;
	}

		// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT); 

		// tambahkan username baru ke database
	mysqli_query($conn, "INSERT INTO login VALUES('','$username','$password')");

	return mysqli_affected_rows($conn);
}

		//input data Barang fashion dan beauty
	function tambahBarang($data){
	global $conn;

	$nama_barang = htmlspecialchars($data["nama"]);
	$jumlah_barang = htmlspecialchars($data["jumlah"]);
	$harga_barang = htmlspecialchars($data["harga"]);
	$stock_barang = htmlspecialchars($data["stock"]);
	$status_barang = htmlspecialchars($data["status"]);
	$jenis_barang = htmlspecialchars($data["jenis"]);
	$gender = htmlspecialchars($data["gender"]);
	$keterangan = htmlspecialchars($data["keterangan"]);

	//upload gambar
	$gambar = upload();
	if(!$gambar){
		return false;
	}

	$query = "INSERT INTO tabel_barang VALUES ('','$nama_barang','$jumlah_barang','$harga_barang',
				'$stock_barang','$status_barang','$jenis_barang','$gender','$keterangan','$gambar')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

	function upload(){

		$namaFile = $_FILES["gambar"]["name"];
		$ukuranFile = $_FILES["gambar"]["size"];
		$error = $_FILES["gambar"]["error"];
		$tmpName = $_FILES["gambar"]["tmp_name"];

		//cek apakah tidak ada gambar di upload
		if( $error === 4){
			echo "<script>
				alert('pilih gambar terlebih dahulu!')
				</script>";
			return false; 
		}

		// cek apakah yang diupload adalah gambar
		$ekstensiGambarValid = ['jpg','jpeg','png','mp3', 'mpeg'];
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
			echo "<script>
				alert('yang di upload bukan gambar!')
				</script>";
				return false;
		}

		// cek jika ukuran yang di upload terlalu besar
		if( $ukuranFile > 100000000 ){
				echo "<script>
				alert('ukuran gambar terlalu besar!')
				</script>";
				return false;
		}

		// lolos pengecekkan, gambar siap di upload
		// generate nama gambar
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;
		
		move_uploaded_file($tmpName, 'images/' . $namaFileBaru);

		return $namaFileBaru; 
}
		// end dari input data barang fashion dan beauty

	

		// hapus hasil inputan barang fashion dan beauty
	function hapus($id){
	global $conn;
	$sql = mysqli_query($conn, "SELECT * FROM tabel_barang WHERE id=$id");
	foreach ($sql as $key) {
		echo $key['gambar'];
		unlink("../frontend/data_input_barang/images/".$key['gambar']);
	}
	mysqli_query($conn, "DELETE FROM tabel_barang WHERE id=$id");
	return mysqli_affected_rows($conn);
}
		// end dari hapus input barang fashion dan beauty


		// ubah input data Barang fashion dan beauty
	function ubahBarang($data){
	global $conn;
	$id = $data["id"];
	$nama_barang = htmlspecialchars($data["nama"]);
	$jumlah_barang = htmlspecialchars($data["jumlah"]);
	$harga_barang = htmlspecialchars($data["harga"]);
	$stock_barang = htmlspecialchars($data["stock"]);
	$status_barang = htmlspecialchars($data["status"]);
	$jenis_barang = htmlspecialchars($data["jenis"]);
	$gender = htmlspecialchars($data["gender"]);
	$keterangan = htmlspecialchars($data["keterangan"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	// cek apakah user memilih gambar baru at tidak
	if ($_FILES['gambar']['error'] === 4){
		$gambar = $gambarLama;
	}else{
		$gambar = upload();
	}

	$query = "UPDATE tabel_barang SET 
				nama_barang = '$nama_barang',
				jumlah_barang = '$jumlah_barang',
				harga_barang = '$harga_barang',
				stock_barang = '$stock_barang',
				staus_barang = '$status_barang',
				jenis_barang = '$jenis_barang',
				gender = '$gender',
				keterangan = '$keterangan',
				gambar = '$gambar' 
					WHERE 
				id = $id";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
		// end dari ubah data fashion dan beauty
		
		// cari data store

function cari($keyword){
	$query = "SELECT  tabel_barang.id, tabel_barang.nama_barang, 
                        tabel_barang.jumlah_barang, tabel_barang.harga_barang,
                        tabel_barang.stock_barang, tabel_barang.staus_barang,
                        tabel_jenis_barang.jenis_barang, tabel_barang.gender,
                        tabel_barang.keterangan, tabel_barang.gambar 
						FROM tabel_barang
						JOIN tabel_jenis_barang
						ON tabel_jenis_barang.id = tabel_barang.jenis_barang
						WHERE tabel_jenis_barang.jenis_barang LIKE '%$keyword%'
						AND tabel_barang.gender LIKE '%$keyword%' 
						OR tabel_barang.nama_barang LIKE '%$keyword%'";
	return query($query);
}
		// akhir cari data store



//input data checkout
	function kirim($data){
	global $conn;
	$id = $_GET["id"];
 	$query = mysqli_query($conn,"SELECT nama_barang, harga_barang, jenis_barang FROM tabel_barang WHERE id =$id");
	$hasil =  mysqli_fetch_assoc($query);
	$nama_barang = $hasil["nama_barang"];
	$harga_barang = $hasil["harga_barang"];
	$jenis_barang = $hasil["jenis_barang"];
	$tanggal_pembelian = date("y-m-d");
	
	$nama_pembeli = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$kodepos = htmlspecialchars($data["kode"]);
	$telpon = htmlspecialchars($data["tel"]);
	$catatan = htmlspecialchars($data["catatan"]);

	


	$query = "INSERT INTO tabel_checkout VALUES ('','$nama_pembeli','$email','$alamat',
				'$kodepos','$telpon','$catatan','$nama_barang','$harga_barang','$jenis_barang', '$tanggal_pembelian')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
		//akhir input checkout

		// hapus checkout
function delete($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM tabel_checkout WHERE id=$id");
	return mysqli_affected_rows($conn);
}
		// akhir hapus checkout

 ?>	