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
		$id = $_GET['id_report'];
		
		$qryDelete = "DELETE FROM report WHERE id_report='$id'";
	$del = mysql_query("$qryDelete")or die ('Error!!'.mysql_error());
	if ($del){
		?><script>alert("Data terhapus.");</script>
		<?php
		echo "<script>window.location.href='index.php/reporting/lain-lain/add-lain-lain';</script>";
	}
	}

	if(isset($_POST['submit'])){ //jika tombol submit di set atau dijalankan maka melakukan aksi
		//deklarasi variable POST
		$judul_report 		 	 = $_POST['judul_report'];
		$departemen	 			 = $_POST['departemen'];
		$tanggal_terbit	 		 = $_POST['tanggal_terbit'];
		$lampiran	 		 	 = $_POST['lampiran'];
		
	if ($_FILES['file_report']['name']!=''){
	$target_dir = "uploads_file/doc_report/";
	$target_file = $target_dir . basename($_FILES["file_report"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if ($_FILES["file_report"]["size"] > 1000000000) {
		echo "Maaf, file terlalu besar. Maksimal 500MB.";
		//upload digagalkan
		echo "<script>window.location.href='index.php/reporting/lain-lain/add-lain-lain';</script>";
	}

// FORMAT YG DIIJINKAN
//if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//&& $imageFileType != "gif" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //$uploadOk = 0;
//}

	if (move_uploaded_file($_FILES["file_report"]["tmp_name"], $target_file)) {
			echo "File". basename( $_FILES["file_report"]["name"]). " berhasil diupload.";

		} else {
			echo "Tidak ada file yang diunggah.";
		}
		
		$filename = basename($_FILES['file_report']['name']);
		}
		
		//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
			$table = "INSERT INTO report_lain_lain SET";
			$field = "judul_report   = '$judul_report',
					  departemen     = '$departemen',
					  tanggal_terbit = '$tanggal_terbit',
					  lampiran		 = '$filename'";
					
					 
		//melakukan query dari variable $table dan $field
		mysql_query("$table $field")or die ('Error!!'.mysql_error());
		//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
		//fungsi ini untuk mdepartemenambil data yang terakhir di inputkan/dipilih
		//kemudian halaman akan diarahkan pada detail Pemesanan
		echo "<script>window.location.href='index.php/reporting/lain-lain/add-lain-lain';</script>";
		exit;
	}

//------------------------------------------------------------------


?>

<!--center><h4>&raquo; Form Input &laquo;</h4>

<!----------------------------------------Membuat tampilan form registrasi pemesanan---------------------------------------------------->

<form method="POST" action="" enctype="multipart/form-data" >
<table align="center">
	<tr>
		<td>Judul Report</td>
		<td>:</td>
		<td><input type="text" name="judul_report" class="form-control" required/></td>
	</tr>
	<tr>
		<td>Departemen</td>
		<td>:</td>
		<td><input type="text" name="departemen" class="form-control" required/></td>
	</tr>
	<tr>
		<td>Tanggal Terbit</td>
		<td>:</td>
		<td><input type="text" name="tanggal_terbit" id="tanggal"/></td>
	</tr>
	<tr>
		<td>Lampirkan File</td>
		<td>:</td>
		<td><input type="file" name="file_report" class='btn btn-success'></td>
	</tr>
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
	
$select = "SELECT * from report_lain_lain";

//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
	echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
<tr>
	<tr>
		<th bgcolor='silver' >No</th>
		<th bgcolor='silver' >Judul Report</th>
		<th bgcolor='silver' >Departemen</th>
		<th bgcolor='silver' >Tanggal Terbit</th>
		<th bgcolor='silver' >Lampiran File</th>
	</tr>
</tr>";
$no=0;
while($row = mysql_fetch_array($resultselect)){
extract($row);
//jika tidak makan $butt bernilai "Setujui"
echo "<tr>
	<td align='center'>".$no=1+$no."</td>";
	if ($file_report!=null){
	echo "<td><a href='http://DC/DC/uploads_file/all_doc/".$file_report."' title=".$file_report.">".$judul_report."</a></td>";
	}else{ 
	echo"<td>".$judul_report."</td>";
	}
	
	echo "<td>".$departemen."</td>
	<td>".$tanggal_terbit."</td>
	<td>".$lampiran."</td>
	</tr>";
}
echo"</table>";
}
