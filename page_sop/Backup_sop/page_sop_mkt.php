<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>
<?
// untuk memulai session pada fungsi login
session_start();
include('koneksi_dokumen.php');

	$select = "SELECT * from sop where mkt !=''";

//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
	$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
	if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
	echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
	}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
	echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
<tr>
	<tr>
			<th bgcolor='silver' rowspan='2' style='text-align:center;'>No</th>
			<th bgcolor='silver' rowspan='2' style='text-align:center;'>Kode Dokumen</th>
			<th bgcolor='silver' rowspan='2' style='text-align:center;'>Nomor Revisi</th>
			<th bgcolor='silver' rowspan='2' style='text-align:center;'>Judul Dokumen</th>
			<th bgcolor='silver' colspan='2' style='text-align:center;'>Tanggal Terbit</th>
			<th bgcolor='silver' colspan='13' style='text-align:center;'>Departemen Pengguna Dokumen</th>
		</tr>
		<tr>
			<th bgcolor='silver' style='text-align:center;'>Edisi Pertama</th>
			<th bgcolor='silver' style='text-align:center;'>Edisi Terbaru</th>
			<th>MKT</th>
			<th>SLS</th>
			<th>PLANT</th>
			<th>PCH</th>
			<th>LOG</th>
			<th>GA</th>
			<th>HR</th>
			<th>ICT</th>
			<th>FIN</th>
			<th>ACC</th>
			<th>TAX</th>
			<th>MR</th>
			<th>IA</th>
		</tr>
</tr>";
$no=0;
while($row = mysql_fetch_array($resultselect)){
extract($row);
//jika tidak makan $butt bernilai "Setujui"
echo "<tr>
	<td align='center'>".$no=1+$no."</td>";

	if ($file_sop!=null){
	//echo "<td><a href='http://businessprocess/ict/uploads_file/doc_sop/".$file_sop."' title=".$file_sop." download>".$code_document."</a></td>";
	echo "<td><a href='index.php?option=com_content&view=article&id=118&idfile=".$file_sop."' >".$code_document."</a></td>";
	}else{ 
	echo"<td>".$code_document."</td>";
	}
	echo "<td>".$no_revisi."</td>
	<td>".$judul_document."</td>
	<td>".$ed_pertama."</td>
	<td>".$ed_terbaru."</td>
	<td>".$mkt."</td>
	<td>".$sls."</td>
	<td>".$plant."</td>
	<td>".$pch."</td>
	<td>".$log."</td>
	<td>".$ga."</td>
	<td>".$hr."</td>
	<td>".$ict."</td>
	<td>".$fin."</td>
	<td>".$acc."</td>
	<td>".$tax."</td>
	<td>".$mr."</td>
	<td>".$ia."</td>
	</tr>";
}
echo"</table>";
}
