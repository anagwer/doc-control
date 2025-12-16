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

	$select = "SELECT * from skse ORDER BY id_report ASC";

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
					<th>No SK/SE</th>
					<th>Judul SK/SE</th>
					<th>Tanggal Terbit</th>
					<th>Penerbit</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 0;
				while ($row = mysql_fetch_array($resultselect)) {
					extract($row);
				?> 
					<tr>
						<td><?= $no = 1 + $no ?></td>
						<?
						echo "<td><a href='http:index.php?option=com_content&view=article&id=131&idfile=".$lampiran."' >".$no_skse."</a></td>";
						?>
						<td><?= $judul_skse ?></td>
						<td><?= $tanggal_terbit ?></td>
						<td><?= $penerbit ?></td>
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
    