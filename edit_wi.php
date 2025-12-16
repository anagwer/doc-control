<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>
<?php
	// untuk memulai session pada fungsi login
	session_start();
	include('koneksi_dokumen.php');
	
	if ($_GET['key']=='hapus'){
		$id_sop = $_GET['id_sop'];
		
		$qryDelete = "DELETE FROM wi WHERE id_sop='$id_sop'";
		$del = mysql_query("$qryDelete")or die ('Error!!'.mysql_error());
		if ($del){
			?><script>alert("Data terhapus.");</script>
			<?php
			echo "<script>window.location.href='index.php/wi/edit-form-wi';</script>";
	}
	}
	
	if(isset($_POST['submit'])){ //jika tombol submit di set atau dijalankan maka melakukan aksi
	//deklarasi variable POST
	$code_document 		 = $_POST['code_document'];
	$no_revisi	 		 = $_POST['no_revisi'];
	$judul_document	 	 = $_POST['judul_document'];
	$owner_document	 	 = $_POST['owner_document'];
	$ed_pertama	 		 = $_POST['ed_pertama'];
	$ed_terbaru	 		 = $_POST['ed_terbaru'];
	$mkt	 = $_POST['mkt'];
	$sls	 = $_POST['sls'];
	$plant	 = $_POST['plant'];
	$pch	 = $_POST['pch'];
	$log	 = $_POST['log'];
	$ga	 	 = $_POST['ga'];
	$hr		 = $_POST['hr'];
	$ict	 = $_POST['ict'];
	$fin     = $_POST['fin'];
	$acc	 = $_POST['acc'];
	$tax	 = $_POST['tax'];
	$mr	 	 = $_POST['mr'];
	$ia	 	 = $_POST['ia'];
	
	
	if ($_FILES['filepolice']['name']!=''){
	$target_dir = "uploads_file/all_doc/";
	$target_file = $target_dir . basename($_FILES["filepolice"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if ($_FILES["filepolice"]["size"] > 1000000000) {
		echo "Maaf, file terlalu besar. Maksimal 500KB.";
		//upload digagalkan
		echo "<script>window.location.href='index.php/wi/edit-form-wi';</script>";
		
	}

	if (move_uploaded_file($_FILES["filepolice"]["tmp_name"], $target_file)) {
			echo "File". basename( $_FILES["filepolice"]["name"]). " has been uploaded.";

		} else {
			
			echo "Tidak ada file yang diunggah.";
			//upload dan save digagalkan
		echo "<script>window.location.href='index.php/manual-policy/addmanual-policy';</script>";
		}
		
		$filename = basename($_FILES['filepolice']['name']);
		}else{
			$filename = null;
		}
// Allow certain file formats
//if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//&& $imageFileType != "gif" ) {
 //   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  
//}
		if ($_GET['key']=='edit'){
		$id_sop = $_GET['id_sop'];
		
		//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
		$sql = "UPDATE wi SET";
		$field = "code_document 		 = '$code_document',
				  no_revisi 			 = '$no_revisi',
				  judul_document 		 = '$judul_document',
				  owner_document 		 = '$owner_document',
				  ed_pertama 			 = '$ed_pertama',
				  ed_terbaru 			 = '$ed_terbaru',
				  mkt 	= '$mkt',
				  sls 	= '$sls',
				  plant = '$plant',
				  pch 	= '$pch',
				  log 	= '$log',
				  ga 	= '$ga',
				  hr 	= '$hr',
				  ict 	= '$ict',
				  fin 	= '$fin',
				  acc 	= '$acc',
				  tax 	= '$tax',
				  mr 	= '$mr',
				  ia 	= '$ia'";
		$where = " WHERE id_sop='$id_sop'";
		
		//$qryDelete = "DELETE FROM wi WHERE code_document='$code_document'";
		$up = mysql_query("$sql $field $where")or die ('Error!!'.mysql_error());
		if ($up){
			?><script>alert("Data terupdate.");</script>
			<?php
			echo "<script>window.location.href='index.php/wi/edit-form-wi';</script>";
	}
	}
	
		
				
				 
	//melakukan query dari variable $table dan $field
	mysql_query("$table $field")or die ('Error!!'.mysql_error());
	//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
	//fungsi ini untuk mengambil data yang terakhir di inputkan/dipilih
	//kemudian halaman akan diarahkan pada detail Pemesanan
	echo "<script>window.location.href='index.php/manual-policy/edit-manual-policy';</script>";
	exit;
}
?>

<!--center><h4>&raquo; Form Input &laquo;</h4>

<!----------------------------------------Membuat tampilan form registrasi pemesanan---------------------------------------------------->
<?php
$tampil = mysql_fetch_array(mysql_query("SELECT * FROM wi WHERE id_sop = '".$_GET['id_sop']."'")); 
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
			<td>Kode Dokumen</td>
			<td>:</td>
			<td><input type="text" name="code_document" value="<?=$tampil['code_document']?>" class="form-control" required/></td>
		</tr>
		<tr>
			<td>Nomor Revisi</td>
			<td>:</td>
			<td><input type="text" name="no_revisi" value="<?=$tampil['no_revisi']?>" class="form-control" required/></td>
		</tr>
		<tr>
			<td>Judul Dokumen</td>
			<td>:</td>
			<td><input type="text" name="judul_document" value="<?=$tampil['judul_document']?>" class="form-control" required/></td>
		</tr>
		<tr>
			<td>Owner Dokumen</td>
			<td>:</td>
			<td><input type="text" name="owner_document" class="form-control" required/></td>
		</tr>
		<tr>
			<td><h6>Tanggal Terbit</h6></td>
			<td>:</td>
		<tr>
			<td>Edisi Pertama</td>
			<td>:</td>
			<td><input type="text" name="ed_pertama" value="<?=$tampil['ed_pertama']?>" id="tanggal" /></td>
		</tr>
		<tr>
			<td>Edisi Terbaru</td>
			<td>:</td>
			<td><input type="text" name="ed_terbaru" value="<?=$tampil['ed_terbaru']?>" id="tanggal1" /></td>
		</tr>
		<tr>
			<td>Departement Pengguna Dokumen</td>
			<td>:</td>
			<td style="color:red; font-weight:bold; font-size:15px;">" Ceklist kembali untuk pilih departement pengguna dokumen "</td>
		</tr>
		<tr>
			<td>.</td>
			<td>.</td>
			<td style="color:green;" >
				<input type="checkbox" name="mkt" 	value="√">  <?=$tampil['mkt']?>  - MKT<br>
				<input type="checkbox" name="sls" 	value="√">  <?=$tampil['sls']?>  - SLS<br>
				<input type="checkbox" name="plant" value="√">  <?=$tampil['plant']?> - PLANT<br>
				<input type="checkbox" name="pch" 	value="√">  <?=$tampil['pch']?>  - PCH<br>
				<input type="checkbox" name="log" 	value="√">  <?=$tampil['log']?>  - LOG<br>
				<input type="checkbox" name="ga" 	value="√">  <?=$tampil['ga']?>   - GA<br>
				<input type="checkbox" name="hr" 	value="√">  <?=$tampil['hr']?>   - HR<br>
				<input type="checkbox" name="ict" 	value="√">  <?=$tampil['ict']?>  - ICT<br>
				<input type="checkbox" name="fin" 	value="√">  <?=$tampil['fin']?>  - FIN<br>
				<input type="checkbox" name="acc" 	value="√">  <?=$tampil['acc']?>  - ACC<br>
				<input type="checkbox" name="tax" 	value="√">  <?=$tampil['tax']?>  - TAX<br>
				<input type="checkbox" name="mr" 	value="√">  <?=$tampil['mr']?>   - MR<br>
				<input type="checkbox" name="ia" 	value="√">  <?=$tampil['ia']?>   - IA<br>
			</td>
		</tr>
		</tr>
		<!--td>Tambah file</td>
			<td>:</td>
			<td><input type="file" name="filepolice" class='btn btn-success'></td>
		</tr-->
		<?php } ?>
		<tr>
			<td colspan=3 align='center'><input type="submit" name="submit" value="Update" class='btn btn-primary btn-sm' onClick="return confirm('Apakah data yang Anda masukkan sudah benar?')"/>
		</tr>

	</table>
</form>
<script src="lib/jquery.min.js"></script>
<script src="lib/zebra_datepicker.js"></script>
<link rel="stylesheet" href="lib/css/default.css" />
<script>
    $(document).ready(function(){
        $('#tanggal').Zebra_DatePicker({
            format: 'd-F-Y',
            months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#tanggal1').Zebra_DatePicker({
            format: 'd-F-Y',
            months : ['01','02','03','04','05','06','07','08','09','10','11','12'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
</script>
<?php
	session_start();

	include ('data_koneksi.php');
	
	//$select = "SELECT * from document WHERE `DIVISION`='LBG'";
	$select = "SELECT * from wi";

	//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
	$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
	if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
		echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
	}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
	echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
	<tr>
		<tr>
			<th bgcolor='silver' rowspan='2' style='text-align:center; padding-top:15px;'>No</th>
			<th bgcolor='silver' rowspan='2' style='text-align:center; width:90px; padding-top:15px;'>Kode Dokumen</th>
			<th bgcolor='silver' rowspan='2' style='text-align:center; padding-top:15px;'>Nomor Revisi</th>
			<th bgcolor='silver' rowspan='2' style='text-align:center; padding-top:15px;'>Judul Dokumen</th>
			<th bgcolor='silver' rowspan='2' style='text-align:center; padding-top:15px;'>Owner Dok.</th>
			<th bgcolor='silver' colspan='2' style='text-align:center;'>Tanggal Terbit</th>
			<th bgcolor='silver' colspan='13' style='text-align:center;'>Departemen Pengguna Dokumen</th>
			<th bgcolor='silver' colspan='1' style='width:130px;'>Action</th>
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
			<th>Edit/Hapus</th>
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
		echo "<td><a href='uploads_file/doc_police/".$file_police."' title=".$file_police.">".$code_document."</a></td>";
		}else{ 
		echo"<td>".$code_document."</td>";
		}
		echo"<td>".$no_revisi."</td>
		<td>".$judul_document."</td>
		<td>".$owner_document."</td>
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
		<td>
		<a href='?key=edit&id_sop=$id_sop' class='btn btn-info btn-xs'>Edit</a>
		<a href='?key=hapus&id_sop=$id_sop' class='btn btn-danger btn-xs'>Hapus</a>
		
		
		</td>
		</tr>";
	}
	echo"</table>";
}

	//jika klik tombol edit
	if ($_GET['key']=='edit'){
		$code_document 		 = $_POST['code_document'];
		$no_revisi	 = $_POST['no_revisi'];
		$judul_document	 = $_POST['judul_document'];
		$ed_pertama	 = $_POST['ed_pertama'];
		$ed_terbaru	 = $_POST['ed_terbaru'];
		$mkt	 = $_POST['mkt'];
		$eng	 = $_POST['eng'];
		$ppid	 = $_POST['ppid'];
		$prd	 = $_POST['prd'];
		$pch	 = $_POST['pch'];
		$whs	 = $_POST['whs'];
		$log	 = $_POST['log'];
		$faa	 = $_POST['faa'];
		$hr	     = $_POST['hr'];
		$pga	 = $_POST['pga'];
		$mtc	 = $_POST['mtc'];
		$ia	 	 = $_POST['ia'];
	}
