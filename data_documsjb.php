<?
// untuk memulai session pada fungsi login
session_start();

	$terhubung=mysql_connect("localhost","root","mysql");
	if(!$terhubung)
	die("Tidak bisa konek dengan database....!!!!");
	 
	if(!mysql_select_db("data_ict",$terhubung))
	die("Database tidak bisa dibuka");
	
	//mulai upload file
    // untuk memindahkan file ke tempat uploadan
    $upload_path = "uploads_file/";
    // handle aplikasi : apabila folder yang dimaksud tidak ada, maka akan dibuat
    if (!is_dir($upload_path)) {
        mkdir($upload_path);
    }
    if (isset($_POST['submit'])) {
        $file = $_FILES['upload-file']['name'];
        $tmp  = $_FILES['upload-file']['tmp_name'];
        // jika $file ada dan tidak kosong
        if ((isset($file)) && ($file != "")) {
            // handle apabila sudah ada file sama yang terupload, maka akan dibuat copynya
            $uploadfile = (file_exists($upload_path.$file)) ? $upload_path." copy of ".$file : $upload_path.$file;
            move_uploaded_file($tmp, $uploadfile);
            if (chmod($uploadfile, 0775)) {
                // tampilkan pesan sukses apabila berhasil mengupload file
                echo "Sukses mengupload file";
            } else {
                // tampilkan pesan gagal apabila tidak berhasil mengupload file
                echo "Gagal mengupload file";
            }
        }
    }
//selesai upload file

if(isset($_POST['submit'])){ //jika tombol submit di set atau dijalankan maka melakukan aksi
	//deklarasi variable POST
	$nama 		 = $_POST['nama'];
	$keterangan	 = $_POST['keterangan'];
	$file 		 = $_FILES['upload-file']['name'];
	
	
	
	
	//deklarasi variable $table, $field yang akan digunakan untuk fungsi insert data
		$table = "INSERT INTO document SET";
		$field = "nama 		 = '$nama',
				  keterangan = '$keterangan',
				  upload 	 = '$file'";
		
				
				 
	//melakukan query dari variable $table dan $field
	mysql_query("$table $field")or die ('Error!!'.mysql_error());
	//memilih id Maximal atau id yang terbesar dari idPesan yang terdapat pada table pesan
	//fungsi ini untuk mengambil data yang terakhir di inputkan/dipilih
	//kemudian halaman akan diarahkan pada detail Pemesanan
	echo "<script>window.location.href='http://ict/ict/index.php/2015-05-22-02-59-52/document';</script>";
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
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" class="form-control" required/></td>
	</tr>
    <tr>
		<td>Keterangan</td>
		<td>:</td>
		<td><input type="text" name="keterangan" class="form-control" required/></td>
	</tr>
    <tr><td>Lampirkan Files</td><td>:</td><td><input type="file" name="upload-file"/></td></tr>
		<td colspan=3 align='center'><input type="submit" name="submit" value="Simpan" class='btn btn-primary btn-sm' onClick="return confirm('Apakah data yang Anda masukkan sudah benar?')"/>
        <a href=""><input type="button" name="batal" value="Batal" class='btn btn-warning btn-sm'/></a></td>
	</tr>
</table>
</form>
-->
<style>
table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>

<?
$select = "SELECT * from document WHERE division='SJB'";

//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
$resultselect= mysql_query($select)or die ('Error load data : '.mysql_error());
if(mysql_num_rows($resultselect)==0){ //mengecek apakan jumlah data dari variable $resultselect adalah 0
	echo"<center>Data tidak tersedia!</center>";	//jika 0 maka akan muncul pesan data tidak tersedia
}else{	//jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
echo "<table class='table table-striped table-bordered table-condensed bootstrap-datatable datatable' cellspacing='0' cellpadding='0' width='80%' align ='center' border ='1'>
<tr>
	<th bgcolor='silver'>No</th>
	<th bgcolor='silver'>Nama Form</th>
	<th bgcolor='silver'>Keterangan</th>
	<th bgcolor='silver'>Download Form</th>
</tr>";
$no=0;
while($row = mysql_fetch_array($resultselect)){
extract($row);
//jika tidak makan $butt bernilai "Setujui"
echo "<tr>
	<td align='center'>".$no=1+$no."</td>
	<td>".$nama."</td>
	<td>".$keterangan."</td>
	<td align='center'><a href='/ict/uploads_file/SJB/$upload'download>$upload</a></td>
	</tr>";
}
echo"</table>";
}


?>



 