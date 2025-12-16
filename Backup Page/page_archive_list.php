<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>
<?
// untuk memulai session pada fungsi login
session_start();

	include('koneksi_dokumen.php');
	
	

if(isset($_POST['submit'])){ //jika tombol submit di set atau dijalankan maka melakukan aksi
	//deklarasi variable POST
	$nama_departement 		 = $_POST['nama_departement'];
	$no_revisi	 = $_POST['no_revisi'];
	$tanggal_revisi	 = $_POST['tanggal_revisi'];
		
	
	//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
		$table = "INSERT INTO archieve SET";
		$field = "nama_departement 		 = '$nama_departement',
				  no_revisi = '$no_revisi',
				  tanggal_revisi = '$tanggal_revisi'";
		
				
				 
	//melakukan query dari variable $table dan $field
	mysql_query("$table $field")or die ('Error!!'.mysql_error());
	//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
	//fungsi ini untuk mengambil data yang terakhir di inputkan/dipilih
	//kemudian halaman akan diarahkan pada detail Pemesanan
	echo "<script>window.location.href='http://dc/dc/index.php/archieve-list/add-archieve';</script>";
	exit;
}

//------------------------------------------------------------------


?>

<!--center><h4>&raquo; Form Input &laquo;</h4>

<!----------------------------------------Membuat tampilan form registrasi pemesanan---------------------------------------------------->



<?
session_start();

	include "data_koneksi.php";
	
//$select = "SELECT * from document WHERE `DIVISION`='LBG'";
$select = "SELECT * from archieve";

//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
	echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
<tr>
	<tr>
		<th bgcolor='silver' style='text-align:center;'>No</th>
		<th bgcolor='silver' style='text-align:center;'>Judul Dokumen</th>
		<th bgcolor='silver' style='text-align:center;'>Owner Dok.</th>
		<th bgcolor='silver' style='text-align:center;'>Nomor Revisi</th>
		<th bgcolor='silver' style='text-align:center;'>Tanggal Revisi</th>
	</tr>
</tr>";
$no=0;
while($row = mysql_fetch_array($resultselect)){
extract($row);
//jika tidak makan $butt bernilai "Setujui"
echo "<tr>
	<td style='text-align:center;'>".$no=1+$no."</td>";
	
	if ($file_archieve!=null){
	//echo "<td style='text-align:center;'><a href='http://100.100.1.148/documentcontrol/uploads_file/doc_archieve/".$file_archieve."' title=".$file_archieve." download>".$nama_departement."</a></td>";
	echo "<td style='text-align:left;'><a href='http://dc/dc/uploads_file/doc_archieve/".$file_archieve."' title=".$file_archieve." download>".$nama_departement."</a></td>";
	}else{ 
	echo"<td style='text-align:left;'>".$nama_departement."</td>";
	}
	echo "
	<td>".$owner_document."</td>
	<td style='text-align:center;'>".$no_revisi."</td>
	<td style='text-align:center;'>".$tanggal_revisi."</td>
	</tr>";
}
echo"</table>";
}
