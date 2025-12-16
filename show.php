<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>

<?
	session_start();

	$terhubung=mysql_connect("localhost","root","mysql");
	if(!$terhubung)
	die("Tidak bisa konek dengan database....!!!!");
	 
	if(!mysql_select_db("data_ict",$terhubung))
	die("Database tidak bisa dibuka");
	
	//$select = "SELECT * from document WHERE `DIVISION`='LBG'";
	$select = "SELECT * from manual_policy";

	//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
	$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
	if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
		echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
	}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
	echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
	<tr>
		<tr>
			<th bgcolor='silver' rowspan='2'>No</th>
			<th bgcolor='silver' rowspan='2'>
			Kode Dokumen
			</th>
			<th bgcolor='silver' rowspan='2'>Nomor Revisi</th>
			<th bgcolor='silver' rowspan='2'>Judul Dokumen</th>
			<th bgcolor='silver' text-align='center' colspan='2'>Tanggal Terbit</th>
			<th bgcolor='silver' colspan='13'>Departemen Pengguna Dokumen</th>
		</tr>
		<tr>
			<th bgcolor='silver'>Edisi Pertama</th>
			<th bgcolor='silver'>Edisi Terbaru</th>
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
		<td align='center'>".$no=1+$no."</td>
		";
		
		if ($file_police!=null){
		echo "<td><a href='http:index.php?option=com_content&view=article&id=117&idfile=".$file_police."' title=".$file_police.">".$code_document."</a></td>";
		}else{ 
		echo"<td>".$code_document."</td>";
		}
		echo"<td>".$no_revisi."</td>
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
?>
<p>{mp4}sera{/mp4}</p>
	
