	<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>
<?
// untuk memulai session pada fungsi login
session_start();

	include('koneksi_dokumen.php');
	
	

if(isset($_POST['submit'])){ //jika tombol submit di set atau dijalankan maka melakukan aksi
	//deklarasi variable POST
	$code_document 		 = $_POST['code_document'];
	$no_revisi	 		 = $_POST['no_revisi'];
	$judul_document	 	 = $_POST['judul_document'];
	$penerbit	 = $_POST['penerbit'];
	$ed_pertama	 = $_POST['ed_pertama'];
	$ed_terbaru	 = $_POST['ed_terbaru'];
	
	
	
	
	//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
		$table = "INSERT INTO external_doc SET";
		$field = "code_document 		 = '$code_document',
				  no_revisi = '$no_revisi',
				  judul_document = '$judul_document',
				  penerbit = '$penerbit',
				  ed_pertama = '$ed_pertama',
				  ed_terbaru = '$ed_terbaru'";
		
				
				 
	//melakukan query dari variable $table dan $field
	mysql_query("$table $field")or die ('Error!!'.mysql_error());
	//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
	//fungsi ini untuk mengambil data yang terakhir di inputkan/dipilih
	//kemudian halaman akan diarahkan pada detail Pemesanan
	echo "<script>window.location.href='http://businessprocess/ict/index.php/external-doc/add-external-doc';</script>";
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
$select = "SELECT * from external_doc";

//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
	echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
<tr>
	<tr>
		<th bgcolor='silver' style='text-align:center; padding-top:20px;'>No</th>
		<th bgcolor='silver' style='text-align:center; padding-top:20px;'>Kode Dokumen</th>
		<th bgcolor='silver' style='text-align:center; padding-top:10px;'>Nomor Revisi</th>
		<th bgcolor='silver' style='text-align:center; padding-top:20px;'>Judul Dokumen</th>
		<th bgcolor='silver' style='text-align:center; padding-top:10px;'>Owner Dok.</th>
		<th bgcolor='silver' style='text-align:center; padding-top:20px;'>Penerbit</th>
		<th bgcolor='silver' style='text-align:center;'>Tanggal Terbit Edisi Pertama</th>
		<th bgcolor='silver' style='text-align:center;'>Tanggal Terbit Edisi terbaru</th>
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
	//echo "<td style='text-align:center;'><a href='http://100.100.1.148/documentcontrol/uploads_file/doc_ext_doc/".$file_ext_doc."' target='_blank' title=".$file_ext_doc.">".$code_document."</a></td>";
	echo "<td style='text-align:center; width:100px;'><a href='index.php?option=com_content&view=article&id=128&idfile=".$file_ext_doc."' title=".$file_ext_doc.">".$code_document."</a></td>";
	}else{ 
	echo"<td style='text-align:center; width:100px;'>".$code_document."</td>";
	}
	echo"<td style='text-align:center;'>".$no_revisi."</td>
	<td style='text-align:left;'>".$judul_document."</td>
	<td>".$owner_document."</td>
	<td style='text-align:center;'>".$penerbit."</td>
	<td style='text-align:center;'>".$ed_pertama."</td>
	<td style='text-align:center;'>".$ed_terbaru."</td>
	</tr>";
}
echo"</table>";
}
