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
	include('koneksi_dokumen.php');

	$select = "SELECT * from sop where ict !=''";

	//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
	$resultselect = mysql_query($select)or die('Error load data : ' . mysql_error());
	if (mysql_num_rows($resultselect) == 0) { //mengecek apakan jumlah data dari variable $resultselect adalah 0
		echo"<center><span class='alert alert-warning'>Data tidak tersedia!</span></center>"; //jika 0 maka akan muncul pesan data tidak tersedia
	} else { //jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
	//echo"<span class='glyphicon glyphicon-info-sign'></span> Form konfirmasi diisi oleh Ibu Kusumastuti Sugiarto!";
            ?>
	<section>
		<table  id='example' class='display' cellspacing='0' width='1800px'>
			<thead>
				<tr>
					<th rowspan='2'>No</th>
					<th rowspan='2'>Kode Dokumen</th>
					<th rowspan='2'>Nomor Revisi</th>
					<th rowspan='2'>Judul Dokumen</th>
					<th rowspan='2'>Owner Dok.</th>
					<th colspan='2'>Tanggal Terbit</th>
					<th colspan='13'>Departemen Pengguna Dokumen</th>
				</tr>
				<tr>
					<th>Edisi Pertama</th>
					<th>Edisi Terbaru</th>
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
							if ($file_sop!=null){
									echo "<td><a href='index.php?option=com_content&view=article&id=118&idfile=".$file_sop."' >".$code_document."</a></td>";
									}else{ 
									echo"<td>".$code_document."</td>";
									}						
						?>
						<td  style='text-align:center;'><?= $no_revisi ?></td>
						<td><?= $judul_document ?></td>
						<td><?= $owner_document ?></td>
						<td><?= $ed_pertama ?></td>
						<td><?= $ed_terbaru ?></td>
						<td><?= $mkt ?></td>
						<td><?= $sls ?></td>
						<td><?= $plant ?></td>
						<td><?= $pch ?></td>
						<td><?= $log ?></td>
						<td><?= $ga ?></td>
						<td><?= $hr ?></td>
						<td><?= $ict ?></td>
						<td><?= $fin ?></td>
						<td><?= $acc ?></td>
						<td><?= $tax ?></td>
						<td><?= $mr ?></td>
						<td><?= $ia ?></td>
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
    