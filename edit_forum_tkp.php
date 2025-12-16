<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>
<?php
	// untuk memulai session pada fungsi login
	session_start();
	include('tiketka_koneksi.php');
	
	if ($_GET['key']=='hapus'){
		$idPesan = $_GET['idPesan'];
		$qryDelete = "DELETE FROM complain WHERE idPesan=$idPesan";
		$exe = mysql_query($qryDelete);
		if ($exe){
			echo "<script>alert('Data dihapus.');</script>";
			
		}else{
			echo "<script>alert('Gagal menghapus data.');</script>";
		}
		echo "<script>window.location.href='index.php/complain-db/edit-complain';</script>";
	}
	

	if(isset($_POST['submit'])){ //jika tombol submit di set atau dijalankan maka melakukan aksi
		//deklarasi variable POST
		$status 		 = $_POST['status'];
		
		
		if ($_FILES["filecomplain"]["name"]!=''){
		$target_dir = "uploads_file/all_doc/";
		$target_file = $target_dir . basename($_FILES["filecomplain"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if ($_FILES["filecomplain"]["size"] > 500000) {
			echo "Maaf, file terlalu besar. Maksimal 500KB.";
			//upload digagalkan
			echo "<script>window.location.href='index.php/complain-db/edit-complain';</script>";
		}

	if (move_uploaded_file($_FILES["filecomplain"]["tmp_name"], $target_file)) {
			echo "File". basename( $_FILES["filecomplain"]["name"]). " berhasil diunggah.";

		} else {
			
			echo "Maaf, pengunggahan foto terjadi error.";
			//upload dan save digagalkan
		
		}
		echo "<script>window.location.href='index.php/complain-db/edit-complain';</script>";
		
		$filename = basename($_FILES['filecomplain']['name']);
		
		}
		
		if ($_GET['key']=='edit'){
			$idPesan = $_GET['idPesan'];
			
		//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
			$table = "UPDATE complain SET";
			$field = "status 		 = '$status'";
			$where = "WHERE idPesan='$idPesan'";
					
					 
		//melakukan query dari variable $table dan $field
		mysql_query("$table $field $where")or die ('Error!!'.mysql_error());
		//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
		//fungsi ini untuk mengambil data yang terakhir di inputkan/dipilih
		//kemudian halaman akan diarahkan pada detail Pemesanan
		echo "<script>window.location.href='http://100.100.1.148/documentcontrol/index.php/2016-01-22-02-27-21/edit-forum-tkp';</script>";
		exit;
	}
	}
?>

<!--center><h4>&raquo; Form Input &laquo;</h4>

<!----------------------------------------Membuat tampilan form registrasi pemesanan---------------------------------------------------->
<?php
	$tampil = mysql_fetch_array(mysql_query("SELECT * FROM complain WHERE idPesan = '".$_GET['idPesan']."'")); 
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
		<td>Registrasi</td>
		<td>:</td>
		<td><input type="text" name="antri" value="<?=$tampil['antri']?>" class="form-control" /></td>
	</tr>
	<tr>
		<td>Subject</td>
		<td>:</td>
		<td><input type="text" name="subject" value="<?=$tampil['subject']?>" class="form-control" /></td>
	</tr>
	<tr>
		<td>Submited By</td>
		<td>:</td>
		<td><input type="text" name="submitedby" value="<?=$tampil['submitedby']?>" class="form-control" /></td>
	</tr>
	<tr>
		<td>Addressed To</td>
		<td>:</td>
		<td><input type="date" name="addresedby" value="<?=$tampil['addresedby']?>" class="form-control" /></td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td>
			<select name="status">
				<option value="Open">Open</option>
				<option value="Close">Close</option>
			</select>
		</td>
	</tr>
	<?php } ?>
	<tr>
		<td colspan=3 align='center'><input type="submit" name="submit" value="Update" class='btn btn-primary btn-sm' onClick="return confirm('Apakah data yang Anda masukkan sudah benar?')"/>
	</tr>

</table>
</form>

<?php
session_start();
include ('tiketka_koneksi.php');
	
//$select = "SELECT * from document WHERE `DIVISION`='LBG'";
$select = "SELECT * from complain";

//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
	echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
<tr>
	<tr>
		<th bgcolor='silver' >No</th>
		<th bgcolor='silver' >Registrasi</th>
		<th bgcolor='silver' >Subject</th>
		<th bgcolor='silver' >Submited By</th>
		<th bgcolor='silver' >Addressed To</th>
		<th bgcolor='silver' >Status</th>
		<th bgcolor='silver' >Action</th>
	</tr>
</tr>";
$no=0;
while($row = mysql_fetch_array($resultselect)){
extract($row);
//jika tidak makan $butt bernilai "Setujui"
echo "<tr>
	<td align='center'>".$no=1+$no."</td>";
	if ($file_skse!=null){
	echo "<td><a href='uploads_file/doc_skse/".$file_skse."' title=".$file_skse.">".$antri."</a></td>";
	}else{ 
	echo"<td>".$antri."</td>";
	}
	echo "<td>".$subject."</td>
	<td>".$submitedby."</td>
	<td>".$addresedby."</td>
	<td>".$status."</td>
	<td>
		<a href='?key=edit&idPesan=$idPesan' class='btn btn-info btn-xs'>Edit</a>
		<a href='?key=hapus&idPesan=$idPesan' class='btn btn-danger btn-xs'>Hapus</a>
		</td>
	</tr>";
}
echo"</table>";
}
