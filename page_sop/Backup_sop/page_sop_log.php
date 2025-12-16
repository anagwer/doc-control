<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>

<?
session_start();

	include "data_koneksi.php";
	
	
//$select = "SELECT * from document WHERE `DIVISION`='LBG'";
$select = "SELECT * from sop where log !=''";

//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
	echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
<tr>
	<tr>
		<th bgcolor='silver' rowspan='2'>No</th>
		<th bgcolor='silver' rowspan='2'>Kode Dokumen</th>
		<th bgcolor='silver' rowspan='2'>Nomor Revisi</th>
		<th bgcolor='silver' rowspan='2'>Judul Dokumen</th>
		<th bgcolor='silver' text-align='center' colspan='2'>Tanggal Terbit</th>
		<th bgcolor='silver' colspan='12'>Departemen Pengguna Dokumen</th>
	</tr>
	<tr>
		<th bgcolor='silver'>Edisi Pertama</th>
		<th bgcolor='silver'>Edisi Terbaru</th>
		<th>MKT</th>
		<th>ENG</th>
		<th>PPID</th>
		<th>PRD</th>
		<th>PCH</th>
		<th>WHS</th>
		<th>LOG</th>
		<th>FAA</th>
		<th>HR</th>
		<th>PGA</th>
		<th>MTC</th>
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
	<td>".$eng."</td>
	<td>".$ppid."</td>
	<td>".$prd."</td>
	<td>".$pch."</td>
	<td>".$whs."</td>
	<td>".$log."</td>
	<td>".$faa."</td>
	<td>".$hr."</td>
	<td>".$pga."</td>
	<td>".$mtc."</td>
	<td>".$ia."</td>
	</tr>";
}
echo"</table>";
}
