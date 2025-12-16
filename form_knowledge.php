<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>
<script src="lib/jquery.min.js"></script>
<script src="lib/zebra_datepicker.js"></script>
<link rel="stylesheet" href="lib/css/default.css" />
<?php
// untuk memulai session pada fungsi login
session_start();

	include('koneksi_dokumen.php');
	
	if ($_GET['key']=='hapus'){
		$id = $_GET['id_knowledge'];
		$qryDelete = "DELETE FROM knowledge WHERE id_sop=$id";
		$exe = mysql_query($qryDelete);
		if ($exe){
			echo "<script>alert('Data dihapus.');</script>";
			
		}else{
			echo "<script>alert('Gagal menghapus data.');</script>";
		}
		echo "<script>window.location.href='index.php/knowledge-db/add-knowledge';</script>";
	}
	

if(isset($_POST['submit'])){ //jika tombol submit di set atau dijalankan maka melakukan aksi
	//deklarasi variable POST
	$judul 		 = $_POST['judul'];
	$deskripsi	 = $_POST['deskripsi'];
	$jenis_file	 = $_POST['jenis_file'];
	$tgl_upload	 = $_POST['tgl_upload'];
	$recomended	 = $_POST['recomended'];
	$departemen	 = $_POST['departemen'];
	
	if ($_FILES["fileknowledge"]["name"]!=''){
	$target_dir = "uploads_file/doc_knowledge/";
$target_file = $target_dir . basename($_FILES["fileknowledge"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if ($_FILES["fileknowledge"]["size"] > 6000000) {
    echo "Maaf, file terlalu besar. Maksimal 50MB.";
	//upload digagalkan
	echo "<script>window.location.href='index.php/knowledge-db/add-knowledge';</script>";
}

if (move_uploaded_file($_FILES["fileknowledge"]["tmp_name"], $target_file)) {
        echo "File". basename( $_FILES["fileknowledge"]["name"]). " berhasil diunggah.";

    } else {
		
        echo "Maaf, pengunggahan foto terjadi error.";
		//upload dan save digagalkan
	
    }
	echo "<script>window.location.href='index.php/knowledge-db/add-knowledge';</script>";
	
	$filename = basename($_FILES['fileknowledge']['name']);
	
	}
	//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
		$table = "INSERT INTO knowledge SET";
		$field = "judul 		 = '$judul',
				  deskripsi = '$deskripsi',
				  jenis_file = '$jenis_file',
				  tgl_upload = '$tgl_upload',
				  recomended = '$recomended',
				  file_knowledge = '$filename',
				  departemen = '$departemen'";
		
				
				 
	//melakukan query dari variable $table dan $field
	mysql_query("$table $field")or die ('Error!!'.mysql_error());
	//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
	//fungsi ini untuk mengambil data yang terakhir di inputkan/dipilih
	//kemudian halaman akan diarahkan pada detail Pemesanan
	echo "<script>window.location.href='index.php/knowledge-db/add-knowledge';</script>";
	exit;
}

//------------------------------------------------------------------


?>

<!--center><h4>&raquo; Form Input &laquo;</h4>

<!----------------------------------------Membuat tampilan form registrasi pemesanan---------------------------------------------------->

<form method="POST" action="" enctype="multipart/form-data" >
<table align="center">
	<tr>
		<td>Judul</td>
		<td>:</td>
		<td><input type="text" name="judul" class="form-control" required/></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td>:</td>
		<td><input type="text" name="deskripsi" class="form-control" required/></td>
	</tr>
	<tr>
		<td>Jenis File</td>
		<td>:</td>
		<td><input type="text" name="jenis_file" class="form-control" required/></td>
	</tr>
	<tr>
		<td>Tanggal Upload</td>
		<td>:</td>
		<td><input type="text" name="tgl_upload" id="tanggal"/></td>
	</tr>
	<tr>
		<td>Recommended By</td>
		<td>:</td>
		<td><input type="text" name="recomended" class="form-control" required/></td>
	</tr>
	<tr>
		<td>Departement</td>
		<td>:</td>
		<td><input type="text" name="departemen" class="form-control" required/></td>
	</tr>
	<tr>
	<td>Tambah file</td>
	<td>:</td>
	<td><input type="file" name="fileknowledge" class='btn btn-primary'></td></tr>
	<tr>
	<tr>
		<td colspan=3 align='center'><input type="submit" name="submit" value="Simpan" class='btn btn-primary btn-sm' onClick="return confirm('Apakah data yang Anda masukkan sudah benar?')"/>
	</tr>

</table>
</form>
<script>
    $(document).ready(function(){
        $('#tanggal').Zebra_DatePicker({
            format: 'd-F-Y',
            months : ['01','02','03','04','05','06','07','08','09','10','11','12'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
</script>
<?php
session_start();

	include "data_koneksi.php";
	
//$select = "SELECT * from document WHERE `DIVISION`='LBG'";
$select = "SELECT * from knowledge";

//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
	echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
<tr>
	<tr>
		<th bgcolor='silver' >No</th>
		<th bgcolor='silver' >Judul</th>
		<th bgcolor='silver' >Deskripsi</th>
		<th bgcolor='silver' >Jenis File</th>
		<th bgcolor='silver' >Tanggal Upload</th>
		<th bgcolor='silver' >Recommended By</th>
		<th bgcolor='silver' >Departement</th>
	</tr>
</tr>";
$no=0;
while($row = mysql_fetch_array($resultselect)){
extract($row);
//jika tidak makan $butt bernilai "Setujui"
echo "<tr>
	<td align='center'>".$no=1+$no."</td>";
	if ($file_knowledge!=null){
	//echo "<td><a href='http://DC/DC/uploads_file/doc_wi/".$file_knowledge."' title=".$file_knowledge.">".$judul."</a></td>";
	echo "<td>".$judul."</td>";
	}else{ 
	echo"<td>".$judul."</td>";
	}
	echo"<td>".$deskripsi."</td>
	<td>".$jenis_file."</td>
	<td>".$tgl_upload."</td>
	<td>".$recomended."</td>
	<td>".$departemen."</td>
	</tr>";
}
echo"</table>";
}
