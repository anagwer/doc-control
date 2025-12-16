<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>
<?php
	// untuk memulai session pada fungsi login
	session_start();
	include('tiketka_koneksi.php');
	
	if ($_GET['key']=='hapus'){
		$id = $_GET['id_dep'];
		
		$qryDelete = "DELETE FROM departement WHERE id_dep='$id'";
		$del = mysql_query("$qryDelete")or die ('Error!!'.mysql_error());
		if ($del){
			echo "<script>alert('Data terhapus.');</script>";
		}else{
			echo "<script>alert('Data gagal dihapus.');</script>";
		}
		echo "<script>window.location.href='index.php/reporting/edit-departement';</script>";
		}

	if(isset($_POST['submit'])){ //jika tombol submit di set atau dijalankan maka melakukan aksi
		//deklarasi variable POST
		$dep_name	 		= $_POST['dep_name'];
		$kode	 			= $_POST['kode'];
		
		if ($_GET['key']=='edit'){
		$id_dep = $_GET['id_dep'];
		
		//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
		$sql = "UPDATE departement SET";
		$field = "dep_name = '$dep_name',
				  kode     = '$kode'";
		$where = "where id_dep='$id_dep'";
					
					 
		//melakukan query dari variable $table dan $field
		mysql_query("$sql $field $where")or die ('Error!!'.mysql_error());
		//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
		//fungsi ini untuk mengambil data yang terakhir di inputkan/dipilih
		//kemudian halaman akan diarahkan pada detail Pemesanan
		echo "<script>window.location.href='index.php/reporting/edit-departement';</script>";
		exit;
	}
	}
?>

<center><h4>&raquo; Form Input Departement &laquo;</h4>

<!----------------------------------------Membuat tampilan form registrasi pemesanan---------------------------------------------------->
<?php
$tampil = mysql_fetch_array(mysql_query("SELECT * FROM departement WHERE id_dep = '".$_GET['id_dep']."'")); 
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
			<td>Nama Departement</td>
			<td>:</td>
			<td><input type="text" name ="dep_name" value="<?=$tampil['dep_name']?>" class="form-control" required/></td>
		</tr>
		<tr>
			<td>Kode</td>
			<td>:</td>
			<td><input type="text" name ="kode" value="<?=$tampil['kode']?>" class="form-control" required/></td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan=3 align='center'><input type="submit" name="submit" value="Update" class='btn btn-primary btn-sm' onClick="return confirm('Apakah data yang Anda masukkan sudah benar?')"/>
		</tr>

	</table>
</form>

<?php
	session_start();
	include('tiketka_koneksi.php');
		
	$select = "SELECT * from departement";

	//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
	$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
	if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
		echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
	}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
	echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
	<tr>
		<tr>
			<th bgcolor='silver' >No</th>
			<th bgcolor='silver' >Nama Departement</th>
			<th bgcolor='silver' >Kode Departement</th>
			<th bgcolor='silver' >Edit / Hapus</th>
		</tr>
		</tr>
	</tr>";
	$no=0;
	while($row = mysql_fetch_array($resultselect)){
	extract($row);
	//jika tidak makan $butt bernilai "Setujui"
	echo "<tr>
		<td align='center'>".$no=1+$no."</td>";
		if ($file_ext_doc!=null){
		echo "<td><a href='uploads_file/doc_sop/".$file_ext_doc."' title=".$file_ext_doc.">".$dep_name."</a></td>";
		}else{ 
		echo"<td>".$dep_name."</td>
		<td>".$kode."</td>
		<td>
		<a href='?key=edit&id_dep=$id_dep' class='btn btn-info btn-xs'>Edit</a>
		<a href='?key=hapus&id_dep=$id_dep' class='btn btn-danger btn-xs'>Hapus</a>
		</td>
		</tr>";
	}
	}
	echo"</table>";
	}
	


