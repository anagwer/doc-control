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
	
	

	if(isset($_POST['submit'])){ //jika tombol submit di set atau dijalankan maka melakukan aksi
		//deklarasi variable POST
		$code_document 		 = $_POST['code_document'];
		$no_revisi	 		 = $_POST['no_revisi'];
		$judul_document	 	 = $_POST['judul_document'];
		$owner_document	 	 = $_POST['owner_document'];
		$penerbit	 		 = $_POST['penerbit'];
		$ed_pertama	 		 = $_POST['ed_pertama'];
		$ed_terbaru	 		 = $_POST['ed_terbaru'];
	
	if ($_FILES["fileextdoc"]["name"]!=''){	
	$target_dir = "uploads_file/doc_ext_doc/";
	$target_file = $target_dir . basename($_FILES["fileextdoc"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if ($_FILES["fileextdoc"]["size"] > 500000) {
		echo "Maaf, file terlalu besar. Maksimal 500KB.";
		//upload digagalkan
		echo "<script>window.location.href='index.php/external-doc/add-external-doc';</script>";
	}

	if (move_uploaded_file($_FILES["fileextdoc"]["tmp_name"], $target_file)) {
			echo "File". basename( $_FILES["fileextdoc"]["name"]). " berhasil diupload.";

		} else {
			echo "Maaf, pengunggahan foto terjadi error.";
		}
		
		$filename = basename($_FILES['fileextdoc']['name']);

	}
	
	
	//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
		$table = "INSERT INTO external_doc SET";
		$field = "code_document 		 = '$code_document',
				  no_revisi = '$no_revisi',
				  judul_document = '$judul_document',
				  owner_document = '$owner_document',
				  penerbit = '$penerbit',
				  ed_pertama = '$ed_pertama',
				  ed_terbaru = '$ed_terbaru',
				  file_ext_doc='$filename';";
		
				
				 
	//melakukan query dari variable $table dan $field
	mysql_query("$table $field")or die ('Error!!'.mysql_error());
	//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
	//fungsi ini untuk mengambil data yang terakhir di inputkan/dipilih
	//kemudian halaman akan diarahkan pada detail Pemesanan
	echo "<script>window.location.href='index.php/external-doc/add-external-doc';</script>";
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
		<td>Judul Dokumen</td>
		<td>:</td>
		<td><input type="text" name="judul_document" class="form-control" required/></td>
	</tr>
	<tr>
		<td>Owner Dokumen</td>
		<td>:</td>
		<td><input type="text" name="owner_document" class="form-control" required/></td>
	</tr>
	<tr>
		<td>Penerbit</td>
		<td>:</td>
		<td><input type="text" name="penerbit" class="form-control" required/></td>
	</tr>
	<tr>
		<td><h6>Tanggal Terbit</h6></td>
		<td>:</td>
		<tr>
			<td>Edisi Pertama</td>
			<td>:</td>
			<td><input type="text" name="ed_pertama" id="tanggal" /></td>
		</tr>
		<tr>
			<td>Edisi Terbaru</td>
			<td>:</td>
			<td><input type="text" name="ed_terbaru" id="tanggal1" /></td>
		</tr>
	</tr>
	<tr>
	<td>Tambah file</td>
	<td>:</td>
	<td><input type="file" name="fileextdoc" class='btn btn-success'></td></tr>
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
<script>
    $(document).ready(function(){
        $('#tanggal1').Zebra_DatePicker({
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
$select = "SELECT * from external_doc";

//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
	echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
<tr>
	<tr>
		<th bgcolor='silver' style='padding-top:15px;'>No</th>
		<th bgcolor='silver' style='width:90px; padding-top:15px;' >Kode Dokumen</th>
		<th bgcolor='silver' >Nomor Revisi</th>
		<th bgcolor='silver' style='padding-top:15px;text-align:center;'>Judul Dokumen</th>
		<th bgcolor='silver' >Owner Dok.</th>
		<th bgcolor='silver' style='padding-top:15px;text-align:center;'>Penerbit</th>
		<th bgcolor='silver' >Tanggal Terbit Edisi Pertama</th>
		<th bgcolor='silver' >Tanggal Terbit Edisi terbaru</th>
	</tr>
	</tr>
</tr>";
$no=0;
while($row = mysql_fetch_array($resultselect)){
extract($row);
//jika tidak makan $butt bernilai "Setujui"
echo "<tr>
	<td align='center'>".$no=1+$no."</td>";
	if ($file_ext_doc!=null){
	//echo "<td><a href='http://DC/DC/uploads_file/doc_sop/".$file_ext_doc."' title=".$file_ext_doc.">".$code_document."</a></td>";
	echo "<td style='text-align:center;'><a href='index.php?option=com_content&view=article&id=128&idfile=".$file_ext_doc."' title=".$file_ext_doc.">".$code_document."</a></td>";
	}else{ 
	echo"<td>".$code_document."</td>";
	}
	echo"<td>".$no_revisi."</td>
	<td>".$judul_document."</td>
	<td>".$owner_document."</td>
	<td>".$penerbit."</td>
	<td>".$ed_pertama."</td>
	<td>".$ed_terbaru."</td>
	</tr>";
}
echo"</table>";
}
