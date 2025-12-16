<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>
<?
// untuk memulai session pada fungsi login
session_start();

	include('koneksi_dokumen.php');
	
	

if(isset($_POST['submit'])){ //jika tombol submit di set atau dijalankan maka melakukan aksi
	//deklarasi variable POST
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
	
	
	
	
	//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
		$table = "INSERT INTO manual_policy SET";
		$field = "code_document 		 = '$code_document',
				  no_revisi = '$no_revisi',
				  judul_document = '$judul_document',
				  ed_pertama = '$ed_pertama',
				  ed_terbaru = '$ed_terbaru',
				  mkt = '$mkt',
				  eng = '$eng',
				  ppid = '$ppid',
				  prd = '$prd',
				  pch = '$pch',
				  whs = '$whs',
				  log = '$log',
				  faa = '$faa',
				  hr = '$hr',
				  pga = '$pga',
				  mtc = '$mtc',
				  ia = '$ia'";
		
				
				 
	//melakukan query dari variable $table dan $field
	mysql_query("$table $field")or die ('Error!!'.mysql_error());
	//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
	//fungsi ini untuk mengambil data yang terakhir di inputkan/dipilih
	//kemudian halaman akan diarahkan pada detail Pemesanan
	echo "<script>window.location.href='http://localhost/ict/index.php/manual-policy';</script>";
	exit;
}

//------------------------------------------------------------------


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
		<td><h6>Tanggal Terbit</h6></td>
		<td>:</td>
		<tr>
			<td>Edisi Pertama</td>
			<td>:</td>
			<td><input type="date" name="ed_pertama" class="form-control" /></td>
		</tr>
		<tr>
			<td>Edisi Terbaru</td>
			<td>:</td>
			<td><input type="date" name="ed_terbaru" class="form-control" /></td>
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
		<input type="checkbox" name="mkt" value="√"> MKT<br>
		<input type="checkbox" name="eng" value="√"> ENG<br>
		<input type="checkbox" name="ppid" value="√"> PPID<br>
		<input type="checkbox" name="prd" value="√"> PRD<br>
		<input type="checkbox" name="pch" value="√"> PCH<br>
		<input type="checkbox" name="whs" value="√"> WHS<br>
		<input type="checkbox" name="log" value="√"> LOG<br>
		<input type="checkbox" name="faa" value="√"> FAA<br>
		<input type="checkbox" name="hr" value="√"> HR<br>
		<input type="checkbox" name="pga" value="√"> PGA<br>
		<input type="checkbox" name="mtc" value="√"> MTC<br>
		<input type="checkbox" name="ia" value="√"> IA<br>
		</td>
	</tr>
	<tr>
		<td colspan=3 align='center'><input type="submit" name="submit" value="Simpan" class='btn btn-primary btn-sm' onClick="return confirm('Apakah data yang Anda masukkan sudah benar?')"/>
	</tr>

</table>
</form>

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
		<th bgcolor='silver' rowspan='2'>Kode Dokumen</th>
		<th bgcolor='silver' rowspan='2'>Nomor Revisi</th>
		<th bgcolor='silver' rowspan='2'>Judul Dokumen</th>
		<th bgcolor='silver' text-align='center' colspan='2'>Tanggal Terbit</th>
		<th bgcolor='silver' colspan='12'>Departemen Pengguna Dokumen</th>
	</tr>
	<tr>
		<th bgcolor='silver'>Edisi Pertama</th>
		<th bgcolor='silver'>Edisi Terbaru</th>
		<th>MKT</th>
		<th>ENG</th>
		<th>PPID</th>
		<th>PRD</th>
		<th>PCH</th>
		<th>WHS</th>
		<th>LOG</th>
		<th>FAA</th>
		<th>HR</th>
		<th>PGA</th>
		<th>MTC</th>
		<th>IA</th>
	</tr>
</tr>";
$no=0;
while($row = mysql_fetch_array($resultselect)){
extract($row);
//jika tidak makan $butt bernilai "Setujui"
echo "<tr>
	<td align='center'>".$no=1+$no."</td>
	<td>".$code_document."</td>
	<td>".$no_revisi."</td>
	<td>".$judul_document."</td>
	<td>".$ed_pertama."</td>
	<td>".$ed_terbaru."</td>
	<td>".$mkt."</td>
	<td>".$eng."</td>
	<td>".$ppid."</td>
	<td>".$prd."</td>
	<td>".$pch."</td>
	<td>".$whs."</td>
	<td>".$log."</td>
	<td>".$faa."</td>
	<td>".$hr."</td>
	<td>".$pga."</td>
	<td>".$mtc."</td>
	<td>".$ia."</td>
	</tr>";
}
echo"</table>";
}
