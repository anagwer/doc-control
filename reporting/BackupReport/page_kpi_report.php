<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>


<!--center><h4>&raquo; Form Input &laquo;</h4>

<!----------------------------------------Membuat tampilan form registrasi pemesanan---------------------------------------------------->



<?
session_start();

	include "data_koneksi.php";
	
$select = "SELECT * from report_kpi";

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
	if ($lampiran!=null){
	echo "<td><a href='http:index.php?option=com_content&view=article&id=130&idfile=".$lampiran."' title=".$lampiran.">".$judul_report."</a></td>";
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
