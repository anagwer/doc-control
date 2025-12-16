<script src="lib/jquery.min.js" type="text/javascript"></script>
<script src="Datatables1.10.7/media/js/jquery.dataTables.js" type="text/javascript"></script>
<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>

<script type="text/javascript" language="javascript" class="init">
    $(document).ready(function() {
        $('#example').DataTable({
            scrollX:true
        });
    });
</script>
<link href="Datatables1.10.7/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<?php
session_start();

	include "data_koneksi.php";
	
$select = "SELECT * from report_meeting";

	//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
	$resultselect = mysql_query($select)or die('Error load data : ' . mysql_error());
	if (mysql_num_rows($resultselect) == 0) { //mengecek apakan jumlah data dari variable $resultselect adalah 0
		echo"<center><span class='alert alert-warning'>Data tidak tersedia!</span></center>"; //jika 0 maka akan muncul pesan data tidak tersedia
	} else { //jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
	//echo"<span class='glyphicon glyphicon-info-sign'></span> Form konfirmasi diisi oleh Ibu Kusumastuti Sugiarto!";
            ?>
	<section>
		<table  id='example' class='display' cellspacing='0' width='100%'>
			<thead>
				<tr>
					<th>No</th>
					<th>Judul Report</th>
					<th>Departement</th>
					<th>Tanggal Terbit</th>
					<th>Lampiran File</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 0;
				while ($row = mysql_fetch_array($resultselect)) {
					extract($row);
				?> 
					<tr>
						<td  style='text-align:center;'><?= $no = 1 + $no ?></td>
						<?php
						if ($lampiran!=null){
						echo "<td><a href='http:index.php?option=com_content&view=article&id=130&idfile=".$lampiran."' title=".$lampiran.">".$judul_report."</a></td>";
						}else{ 
						echo"<td>".$judul_report."</td>";
						}
						?>
						<td  style='text-align:center;'><?= $departemen ?></td>
						<td  style='text-align:center;'><?= $tanggal_terbit ?></td>
						<td><?= $lampiran ?></td>
					</tr>
					<?php 
					}
					?>
			</tbody>
		</table>
	</section>
        <?php
       	}
?>
    