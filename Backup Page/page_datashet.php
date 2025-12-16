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
	$no_revisi	 = $_POST['no_revisi'];
	$judul_formulir	 = $_POST['judul_formulir'];
	$departement_pemilik	 = $_POST['departement_pemilik'];

	
	
	//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
		$table = "INSERT INTO datasheet SET";
		$field = "code_document 		 = '$code_document',
				  no_revisi = '$no_revisi',
				  judul_formulir = '$judul_formulir',
				  departement_pemilik = '$departement_pemilik'";
		
				
				 
	//melakukan query dari variable $table dan $field
	mysql_query("$table $field")or die ('Error!!'.mysql_error());
	//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
	//fungsi ini untuk mengambil data yang terakhir di inputkan/dipilih
	//kemudian halaman akan diarahkan pada detail Pemesanan
	echo "<script>window.location.href='http://dc/dc/index.php/datasheet/add-datasheet';</script>";
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
$select = "SELECT * from datasheet";

//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
	echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
<tr>
	<tr>
		<th bgcolor='silver' style='text-align:center;'>No</th>
		<th bgcolor='silver' style='text-align:center;'>Kode Dokumen</th>
		<th bgcolor='silver' style='text-align:center;'>Nomor Revisi</th>
		<th bgcolor='silver' style='text-align:center;'>Judul Formulir</th>
		<th bgcolor='silver' style='text-align:center;'>Departemen Pemilik</th>
	</tr>
</tr>";
$no=0;
while($row = mysql_fetch_array($resultselect)){
extract($row);
//jika tidak makan $butt bernilai "Setujui"
echo "<tr>
	<td style='text-align:center;'>".$no=1+$no."</td>";
	if ($file_datasheet!=null){
	echo "<td><a href='http://dc/dc/uploads_file/doc_datasheet/".$file_datasheet."' title=".$file_datasheet." download>".$code_document."</a></td>";
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
