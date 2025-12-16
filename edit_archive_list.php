<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>
<script src="lib/jquery.min.js"></script>
<script src="lib/zebra_datepicker.js"></script>
<link rel="stylesheet" href="lib/css/default.css" />
<?
	// untuk memulai session pada fungsi login
	session_start();
	include('koneksi_dokumen.php');
	
	if ($_GET['key']=='hapus'){
		$id_arc = $_GET['id_arc'];
		
		$qryDelete = "DELETE FROM archieve WHERE id_arc='$id_arc'";
		$del = mysql_query("$qryDelete")or die ('Error!!'.mysql_error());
		if ($del){
			?><script>alert("Data terhapus.");</script>
			<?php
			echo "<script>window.location.href='index.php/archieve-list/edit-form-archieve';</script>";
		}
		}

	if(isset($_POST['submit'])){ //jika tombol submit di set atau dijalankan maka melakukan aksi
		//deklarasi variable POST
		$nama_departement 		 = $_POST['nama_departement'];
		$owner_document	 	 	 = $_POST['owner_document'];
		$no_revisi	 			 = $_POST['no_revisi'];
		$tanggal_revisi	 		 = $_POST['tanggal_revisi'];
		$target_dir 			 = "uploads_file/doc_archieve/";
		
	if ($_FILES["filearchieve"]["name"]!=''){	
	$target_file = $target_dir . basename($_FILES["filearchieve"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if ($_FILES["filearchieve"]["size"] > 100000000) {
		echo "Maaf, file terlalu besar. Maksimal 500KB.";
		//upload digagalkan
		echo "<script>window.location.href='index.php/archieve-list/edit-form-archieve';</script>";
	}

	if (move_uploaded_file($_FILES["filearchieve"]["tmp_name"], $target_file)) {
			echo "File". basename( $_FILES["filearchieve"]["name"]). " berhasil diunggah.";

		} else {
			
			echo "Maaf, pengunggahan foto terjadi error.";
			//upload dan save digagalkan
		
		}
		echo "<script>window.location.href='index.php/archieve-list/edit-form-archieve';</script>";
		$filename = basename($_FILES['filearchieve']['name']);
	}
			if ($_GET['key']=='edit'){
			$id_arc = $_GET['id_arc'];
		//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
			$table = "UPDATE archieve SET";
			$field = "nama_departement 		 = '$nama_departement',
					  owner_document = '$owner_document',
					  no_revisi = '$no_revisi',
					  tanggal_revisi = '$tanggal_revisi'";
			$where = "WHERE id_arc='$id_arc'";		  
			
					
					 
		//melakukan query dari variable $table dan $field
		mysql_query("$table $field $where")or die ('Error!!'.mysql_error());
		//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
		//fungsi ini untuk mengambil data yang terakhir di inputkan/dipilih
		//kemudian halaman akan diarahkan pada detail Pemesanan
		echo "<script>window.location.href='index.php/archieve-list/edit-form-archieve';</script>";
		exit;
	}
	}
?>

<!--center><h4>&raquo; Form Input &laquo;</h4>

<!----------------------------------------Membuat tampilan form registrasi pemesanan---------------------------------------------------->
<?
	$tampil = mysql_fetch_array(mysql_query("SELECT * FROM archieve WHERE id_arc = '".$_GET['id_arc']."'")); 
	{
	?>
	<?php	
		 if(!empty($err))  {
		   echo "<div class=\"msg\">";
		  foreach ($err as $e) {
			echo "* $e <br>";
			}
		  echo "</div>";	
		   }
		 ?>
<form method="POST" action="" enctype="multipart/form-data" >
	<table align="center">
		<tr>
			<td>Judul Dokumen</td>
			<td>:</td>
			<td><input type="text" name="nama_departement" value="<?=$tampil['nama_departement']?>" class="form-control" required/></td>
		</tr>
		<tr>
			<td>Owner Dokumen</td>
			<td>:</td>
			<td><input type="text" name="owner_document" class="form-control" required/></td>
		</tr>
		<tr>
			<td>Nomor Revisi</td>
			<td>:</td>
			<td><input type="text" name="no_revisi" value="<?=$tampil['no_revisi']?>" class="form-control" required/></td>
		</tr>
		<tr>
			<td>Tanggal Revisi</td>
			<td>:</td>
			<td><input type="text" name="tanggal_revisi" value="<?=$tampil['tanggal_revisi']?>" id="tanggal" required/></td>
		</tr>
		<tr>
		<!--td>Tambah file</td>
			<td>:</td>
			<td><input type="file" name="filearchieve" class='btn btn-primary'></td>
		</tr-->
	<? } ?>
		<tr>
			<td colspan=3 align='center'><input type="submit" name="submit" value="Update" class='btn btn-primary btn-sm' onClick="return confirm('Apakah data yang Anda masukkan sudah benar?')"/>
		</tr>

	</table>
</form>
<script>
    $(document).ready(function(){
        $('#tanggal').Zebra_DatePicker({
            format: 'd-F-Y',
            months : ['01','02','03','04','05','06','07','08','09','10','11','12'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
</script>
<?
	session_start();
	include ('data_koneksi.php');
		
	//$select = "SELECT * from document WHERE `DIVISION`='LBG'";
	$select = "SELECT * from archieve";

	//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
	$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
	if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
		echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
	}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
	echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
	<tr>
		<tr>
			<th bgcolor='silver' >No</th>
			<th bgcolor='silver' >Judul Dokumen</th>
			<th bgcolor='silver' >Owner Dok.</th>
			<th bgcolor='silver' >Nomor Revisi</th>
			<th bgcolor='silver' >Tanggal Revisi</th>
			<th bgcolor='silver' >Edit/hapus</th>
		</tr>
	</tr>";
	$no=0;
	while($row = mysql_fetch_array($resultselect)){
	extract($row);
	//jika tidak makan $butt bernilai "Setujui"
	echo "<tr>
		<td align='center'>".$no=1+$no."</td>";
		if ($file_archieve!=null){
		echo "<td><a href='uploads_file/doc_archieve/".$file_archieve."' title=".$file_archieve.">".$nama_departement."</a></td>";
		}else{ 
		echo"<td>".$nama_departement."</td>";
		}
		
		echo "
		<td>".$owner_document."</td>
		<td>".$no_revisi."</td>
		<td>".$tanggal_revisi."</td>
		<td>
		<a href='?key=edit&id_arc=$id_arc' class='btn btn-info btn-xs'>Edit</a>
		<a href='?key=hapus&id_arc=$id_arc' class='btn btn-danger btn-xs'>Hapus</a>
		</td>
		</tr>";
	}
	echo"</table>";
	}
