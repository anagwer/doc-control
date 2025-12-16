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
		$id = $_GET['id_skse'];
		
		$qryDelete = "DELETE FROM skse WHERE id_skse='$id'";
	$del = mysql_query("$qryDelete")or die ('Error!!'.mysql_error());
	if ($del){
		?><script>alert("Data terhapus.");</script>
		<?php
		echo "<script>window.location.href='index.php/skse-list/add-skse';</script>";
	}
	}

if(isset($_POST['submit'])){ //jika tombol submit di set atau dijalankan maka melakukan aksi
	//deklarasi variable POST
	$no_skse 		     = $_POST['no_skse'];
	$judul_skse 		 = $_POST['judul_skse'];
	$departemen	 	     = $_POST['departemen'];
	$tanggal_terbit	 	 = $_POST['tanggal_terbit'];
	$penerbit		 	 = $_POST['penerbit'];
	$lampiran		 	 = $_POST['lampiran'];
	
if ($_FILES["file_skse"]["name"]!=''){	
$target_dir = "uploads_file/doc_skse/";
$target_file = $target_dir . basename($_FILES["file_skse"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if ($_FILES["file_skse"]["size"] > 1000000000) {
    echo "Maaf, file terlalu besar. Maksimal 500KB.";
	//upload digagalkan
	echo "<script>window.location.href='index.php/reporting/add-sk-se';</script>";
}

if (move_uploaded_file($_FILES["file_skse"]["tmp_name"], $target_file)) {
        echo "File". basename( $_FILES["file_skse"]["name"]). " berhasil diunggah.";

    } else {
		
        echo "Maaf, pengunggahan foto terjadi error.";
		//upload dan save digagalkan
	
    }
	echo "<script>window.location.href='index.php/reporting/add-sk-se';</script>";
	$filename = basename($_FILES['file_skse']['name']);
}
	
	//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
		$table = "INSERT INTO skse SET";
		$field = "no_skse        = '$no_skse',
				  judul_skse     = '$judul_skse',
				  departemen     = '$departemen',
				  tanggal_terbit = '$tanggal_terbit',
				  penerbit		 = '$penerbit',
				  lampiran		 = '$filename'";
				
				 
	//melakukan query dari variable $table dan $field
	mysql_query("$table $field")or die ('Error!!'.mysql_error());
	//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
	//fungsi ini untuk mdepartemenambil data yang terakhir di inputkan/dipilih
	//kemudian halaman akan diarahkan pada detail Pemesanan
	echo "<script>window.location.href='index.php/2016-03-04-08-56-18/add-sk-se';</script>";
	exit;
}

//------------------------------------------------------------------


?>

<!--center><h4>&raquo; Form Input &laquo;</h4>

<!----------------------------------------Membuat tampilan form registrasi pemesanan---------------------------------------------------->

<form method="POST" action="" enctype="multipart/form-data" >
<table align="center">
	<tr>
		<td>Nomor SK / SE</td>
		<td>:</td>
		<td><input type="text" name="no_skse" class="form-control" required/></td>
	</tr>
	<tr>
		<td>Judul SK / SE</td>
		<td>:</td>
		<td><input type="text" name="judul_skse" class="form-control" required/></td>
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
		<td>Penerbit</td>
		<td>:</td>
		<td><input type="text" name="penerbit" class="form-control" required/></td>
	</tr>
	<tr>
		<td>Lampirkan File</td>
		<td>:</td>
		<td><input type="file" name="file_skse" class='btn btn-success'></td>
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
            months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
</script>
<?php
session_start();

	include "data_koneksi.php";
	
//$select = "SELECT * from document WHERE `DIVISION`='LBG'";
$select = "SELECT * from skse where judul_skse !=''";

//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
if(mysql_num_rows($resultselect)==0){ //mdepartemenecek apakan jumlah data dari variable $resultselect adalah 0
	echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
<tr>
	<tr>
		<th bgcolor='silver'>No</th>
		<th bgcolor='silver'>Nomor SK/SE</th>
		<th bgcolor='silver'>Judul SK/SE</th>
		<th bgcolor='silver'>Tanggal Terbit</th>
		<th bgcolor='silver'>Penerbit</th>
	</tr>
</tr>";
$no=0;
while($row = mysql_fetch_array($resultselect)){
extract($row);
//jika tidak makan $butt bernilai "Setujui"
echo "<tr>
	<td align='center'>".$no=1+$no."</td>";
	if ($lampiran!=null){
	echo "<td><a href='http:index.php?option=com_content&view=article&id=131&idfile=".$lampiran."' >".$no_skse."</a></td>";
	}else{ 
	echo"<td>".$no_skse."</td>";
	}
	echo 
	"<td>".$judul_skse."</td>
	<td>".$tanggal_terbit."</td>
	<td>".$penerbit."</td>
	</tr>";
}
echo"</table>";
}
