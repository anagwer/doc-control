<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>



<?
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
