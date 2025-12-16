<?
// untuk memulai session pada fungsi login
session_start();

	$terhubung=mysql_connect("100.100.0.14","sa","141137100382");
	if(!$terhubung)
	die("Tidak bisa konek dengan database....!!!!");

	if(!mysql_select_db("data_ict",$terhubung))
	die("Database tidak bisa dibuka");



if(isset($_POST['submit'])){ //jika tombol submit di set atau dijalankan maka melakukan aksi
	//deklarasi variable POST
	$task 		 = $_POST['task'];
	$detailtask	 = $_POST['detailtask'];




	//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
		$table = "INSERT INTO agenda SET";
		$field = "task 		 = '$task',
				  detailtask = '$detailtask'";



	//melakukan query dari variable $table dan $field
	mysql_query("$table $field")or die ('Error!!'.mysql_error());
	//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
	//fungsi ini untuk mengambil data yang terakhir di inputkan/dipilih
	//kemudian halaman akan diarahkan pada detail Pemesanan
	echo "<script>window.location.href='http://100.100.0.28/ict3/index.php/agendakerja';</script>";
	exit;
}

//------------------------------------------------------------------


?>

<!--center><h4>&raquo; Form Input &laquo;</h4>

<!----------------------------------------Membuat tampilan form registrasi pemesanan---------------------------------------------------->
<!--
<form method="POST" action="" enctype="multipart/form-data" >
<table align="center">
	<tr>
		<td>Task</td>
		<td>:</td>
		<td><input type="text" name="task" class="form-control" required/></td>
	</tr>
    <tr><td>Detail Task</td><td>:</td><td><input type="text" name="detailtask"/></td></tr>
		<td colspan=3 align='center'><input type="submit" name="submit" value="Simpan" class='btn btn-primary btn-sm' onClick="return confirm('Apakah data yang Anda masukkan sudah benar?')"/>
        <a href=""><input type="button" name="batal" value="Batal" class='btn btn-warning btn-sm'/></a></td>
	</tr>
</table>
</form>
-->
<style>
table{ font-size:12px; }
</style>

<?
$select = "SELECT * from agenda";

//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
	echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
<tr>
	<th bgcolor='silver'>No</th>
	<th bgcolor='silver'>Task</th>
	<th bgcolor='silver'>Detail Task</th>
</tr>";
$no=0;
while($row = mysql_fetch_array($resultselect)){
extract($row);
//jika tidak makan $butt bernilai "Setujui"
echo "<tr>
	<td align='center'>".$no=1+$no."</td>
	<td>".$task."</td>
	<td>".$detailtask."</td>
	</tr>";
}
echo"</table>";
}


?>
