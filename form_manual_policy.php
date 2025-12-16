<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>
<script src="lib/jquery.min.js"></script>
<script src="lib/zebra_datepicker.js"></script>
<link rel="stylesheet" href="lib/css/default.css" />
<?php
	// untuk memulai session pada fungsi login
	session_start();
	include('koneksi_dokumen.php');
	
	if ($_GET['key']=='hapus'){
		$code_document = $_GET['id_doc'];
		
		$qryDelete = "DELETE FROM manual_policy WHERE code_document='$code_document'";
		$del = mysql_query("$qryDelete")or die ('Error!!'.mysql_error());
		if ($del){
			?><script>alert("Data terhapus.");</script>
			<?php
			echo "<script>window.location.href='index.php/manual-policy/addmanual-policy';</script>";
	}
	}

	if(isset($_POST['submit'])){

		//jika tombol submit di set atau dijalankan maka melakukan aksi
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
	
	//echo "<pre>"; print_r($_FILES['filepolice']); die();
	
	if ($_FILES['filepolice']['name']!=''){
	$target_dir = "uploads_file/doc_police/";
	$target_file = $target_dir . basename($_FILES["filepolice"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if ($_FILES["filepolice"]["size"] > 5000000000) {
		echo "Maaf, file terlalu besar. Maksimal 5 MB."; 
		//upload digagalkan
		echo "<script>window.location.href='/index.php/manual-policy/addmanual-policy';</script>";
		
	}
	
	
	if (move_uploaded_file($_FILES["filepolice"]["tmp_name"], $target_file)) {
			echo "File". basename( $_FILES["filepolice"]["name"]). " has been uploaded.";

		} else {
			
			echo "Tidak ada file yang diunggah.";
			//upload dan save digagalkan
		echo "<script>window.location.href='/index.php/manual-policy/addmanual-policy';</script>";
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
	//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
		$table = "INSERT INTO manual_policy SET";
		$field = "code_document 		 = '$code_document',
				  no_revisi 			 = '$no_revisi',
				  judul_document 		 = '$judul_document',
				  owner_document 		 = '$owner_document',
				  ed_pertama 			 = '$ed_pertama',
				  ed_terbaru 			 = '$ed_terbaru',
				  file_police		     ='$filename',
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
		
				
				 
	//melakukan query dari variable $table dan $field
	mysql_query("$table $field")or die ('Error!!'.mysql_error());
	//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
	//fungsi ini untuk mengambil data yang terakhir di inputkan/dipilih
	//kemudian halaman akan diarahkan pada detail Pemesanan
	echo "<script>window.location.href='index.php/manual-policy/addmanual-policy';</script>";
	exit;
}
?>

<!--center><h4>&raquo; Form Input &laquo;</h4>

<!----------------------------------------Membuat tampilan form registrasi pemesanan---------------------------------------------------->

<form method="POST" action="" enctype="multipart/form-data" >
	<table align="center">
		<tr>
			<td>Kode Dokumen</td>
			<td>:</td>
			<td><input type="text" name="code_document" class="form-control" required/></td>
		</tr>
		<tr>
			<td>Nomor Revisi</td>
			<td>:</td>
			<td><input type="text" name="no_revisi" class="form-control" required/></td>
		</tr>
		<tr>
			<td>Judul Dokumen</td>
			<td>:</td>
			<td><input type="text" name="judul_document" class="form-control" required/></td>
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
			<td><input type="text" name="ed_pertama" id="tanggal" /></td>
		</tr>
		<tr>
			<td>Edisi Terbaru</td>
			<td>:</td>
			<td><input type="text" name="ed_terbaru" id="tanggal1" /></td>
		</tr>
		</tr>
		<tr>
			<td>Departement Pengguna Dokumen</td>
			<td>:</td>
		</tr>
		<tr>
			<td>.</td>
			<td>.</td>
			<td>
			<input type="checkbox" name="mkt" 	value="√"> MKT<br>
			<input type="checkbox" name="sls" 	value="√"> SLS<br>
			<input type="checkbox" name="plant" value="√"> PLANT<br>
			<input type="checkbox" name="pch" 	value="√"> PCH<br>
			<input type="checkbox" name="log" 	value="√"> LOG<br>
			<input type="checkbox" name="ga" 	value="√"> GA<br>
			<input type="checkbox" name="hr" 	value="√"> HR<br>
			<input type="checkbox" name="ict" 	value="√"> ICT<br>
			<input type="checkbox" name="fin" 	value="√"> FIN<br>
			<input type="checkbox" name="acc" 	value="√"> ACC<br>
			<input type="checkbox" name="tax" 	value="√"> TAX<br>
			<input type="checkbox" name="mr" 	value="√"> MR<br>
			<input type="checkbox" name="ia" 	value="√"> IA<br>
			</td>
			
		</tr>
		<tr>
		<td>Tambah file</td>
		<td>:</td>
		<td><input type="file" name="filepolice" class='btn btn-success'></td></tr>
		<tr>
			<td colspan=3 align='center'><input type="submit" name="submit" value="Simpan" class='btn btn-primary btn-sm' onClick="return confirm('Apakah data yang Anda masukkan sudah benar?')"/>
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

	include "data_koneksi.php";
	
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
			<th bgcolor='silver' rowspan='2' style='text-align:center; padding-top:15px;'>No</th>
			<th bgcolor='silver' rowspan='2' style='text-align:center; width:100px; padding-top:15px;'>Kode Dokumen</th>
			<th bgcolor='silver' rowspan='2' style='text-align:center; padding-top:15px;'>Nomor Revisi</th>
			<th bgcolor='silver' rowspan='2' style='text-align:center; padding-top:15px;'>Judul Dokumen</th>
			<th bgcolor='silver' rowspan='2' style='text-align:center; padding-top:15px;'>Owner Dok.</th>
			<th bgcolor='silver' colspan='2' style='text-align:center;'>Tanggal Terbit</th>
			<th bgcolor='silver' colspan='13' style='text-align:center;'>Departemen Pengguna Dokumen</th>
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
		//echo "<td><a href='index.php?option=com_content&view=article&id=117/".$file_police."' title=".$file_police.">".$code_document."</a></td>";
		echo "<td>".$code_document."</td>";
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
