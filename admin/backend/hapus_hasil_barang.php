<?php 
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0 ){

		echo "
			<script>
				alert('data berhasil dihapus!')
				document.location.href = '../frontend/hasil_input_barang/hasil_input_barang.php';
			</script>
		";
	}else{
			echo "
			<script>
				alert('data gagal dihapus!')
				document.location.href = '../frontend/hasil_input_barang/hasil_input_barang.php';
			</script>
			";
		
	}


 ?>