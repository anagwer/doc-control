<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>
<?php
// untuk memulai session pada fungsi login
session_start();

	include('koneksi_dokumen.php');
	
	

if(isset($_POST['submit'])){ //jika tombol submit di set atau dijalankan maka melakukan aksi
	//deklarasi variable POST
	$code_document 		 = $_POST['code_document'];
	$no_revisi	 = $_POST['no_revisi'];
	$judul_formulir	 = $_POST['judul_formulir'];
	$departement_pemilik	 = $_POST['departement_pemilik'];

	if ($_FILES["filedatasheet"]["name"]!=''){
	$target_dir = "uploads_file/doc_datasheet/";
$target_file = $target_dir . basename($_FILES["filedatasheet"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if ($_FILES["filedatasheet"]["size"] > 500000) {
    echo "Maaf, file terlalu besar. Maksimal 500KB.";
	//upload digagalkan
	echo "<script>window.location.href='index.php/datasheet';</script>";
}

if (move_uploaded_file($_FILES["filedatasheet"]["tmp_name"], $target_file)) {
        echo "File". basename( $_FILES["filedatasheet"]["name"]). " berhasil diupload.";

    } else {
        echo "Maaf, pengunggahan foto terjadi error.";
    }
	
	$filename = basename($_FILES['filedatasheet']['name']);
	}
	
	//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
		$table = "INSERT INTO datasheet SET";
		$field = "code_document 		 = '$code_document',
				  no_revisi = '$no_revisi',
				  judul_formulir = '$judul_formulir',
				  file_datasheet = '$filename',
				  departement_pemilik = '$departement_pemilik'";
		
				
				 
	//melakukan query dari variable $table dan $field
	mysql_query("$table $field")or die ('Error!!'.mysql_error());
	//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
	//fungsi ini untuk mengambil data yang terakhir di inputkan/dipilih
	//kemudian halaman akan diarahkan pada detail Pemesanan
	echo "<script>window.location.href='index.php/datasheet';</script>";
	exit;
}

//------------------------------------------------------------------


?>

<!--center><h4>&raquo; Form Input &laquo;</h4>

<!----------------------------------------Membuat tampilan form registrasi pemesanan---------------------------------------------------->

<form method="POST" action="" enctype="multipart/form-data" >
<table align="center">
	<tr>
		<td>Kode Dokumen</td>
		<td>:</td>
		<td><input type="text" name="code_document" class="form-control" required/></td>
	</tr>
	<tr>
		<td>Nomor Revisi</td>
		<td>:</td>
		<td><input type="text" name="no_revisi" class="form-control" required/></td>
	</tr>
	<tr>
		<td>Judul Formulir</td>
		<td>:</td>
		<td><input type="text" name="judul_formulir" class="form-control" required/></td>
	</tr>
	<tr>
		<td>Departemen Pemilik</td>
		<td>:</td>
		<td><input type="text" name="departement_pemilik" class="form-control" required/></td>
	</tr>
	<tr>
	<td>Tambah file</td>
	<td>:</td>
	<td><input type="file" name="filedatasheet" class='btn btn-primary'></td></tr>
	<tr>
	<tr>
		<td colspan=3 align='center'><input type="submit" name="submit" value="Simpan" class='btn btn-primary btn-sm' onClick="return confirm('Apakah data yang Anda masukkan sudah benar?')"/>
	</tr>

</table>
</form>

<?php
session_start();

	include "data_koneksi.php";
	
	
//$select = "SELECT * from document WHERE `DIVISION`='LBG'";
$select = "SELECT * from datasheet";

//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
	echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
<tr>
	<tr>
		<th bgcolor='silver' >No</th>
		<th bgcolor='silver' >Kode Dokumen</th>
		<th bgcolor='silver' >Nomor Revisi</th>
		<th bgcolor='silver' >Judul Formulir</th>
		<th bgcolor='silver' >Departemen Pemilik</th>
	</tr>
</tr>";
$no=0;
while($row = mysql_fetch_array($resultselect)){
extract($row);
//jika tidak makan $butt bernilai "Setujui"
echo "<tr>
	<td align='center'>".$no=1+$no."</td>";
	if ($file_datasheet!=null){
	echo "<td><a href='uploads_file/doc_sop/".$file_datasheet."' title=".$file_datasheet." download>".$code_document."</a></td>";
	}else{ 
	echo"<td>".$code_document."</td>";
	}
	echo"<td>".$no_revisi."</td>
	<td>".$judul_formulir."</td>
	<td>".$departement_pemilik."</td>
	</tr>";
}
echo"</table>";
}
