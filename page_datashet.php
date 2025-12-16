<script src="lib/jquery.min.js" type="text/javascript"></script>
<script src="Datatables1.10.7/media/js/jquery.dataTables.js" type="text/javascript"></script>
<style>
    table{ font-size:12px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
</style>

<script type="text/javascript" language="javascript" class="init">
    $(document).ready(function() {
        $('#example').DataTable({
            scrollX: true
        });
    });
</script>
<link href="Datatables1.10.7/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<?php
include('koneksi_dokumen.php');

$select = "SELECT * from datasheet ORDER BY id_sop DESC";

//membuat variable $resultselect untuk menjalankan query yang ada pada variable $select
$resultselect = mysql_query($select)or die('Error load data : ' . mysql_error());
if (mysql_num_rows($resultselect) == 0) { //mengecek apakan jumlah data dari variable $resultselect adalah 0
    echo"<center><span class='alert alert-warning'>Data tidak tersedia!</span></center>"; //jika 0 maka akan muncul pesan data tidak tersedia
} else { //jika tidak 0 atau ada data didalamnya maka akan ditampilkan isi dari query tersebut
    ?>
    <section>
        <table  id='example' class='display' cellspacing='0' width='100%'>
            <thead>
                <tr style="font-size:12px; background:#09568d; color:#fff;">
                    <th>No</th>
                    <th>Kode Dokumen</th>
                    <th>Nomor Revisi</th>
                    <th>Judul Formulir</th>
                    <th>Departemen Pemilik</th>
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
                        if ($file_datasheet != null) {
                            echo "<td><a href='$baseUrl/uploads_file/doc_datasheet/" . $file_datasheet . "' title=" . $file_datasheet . " download>" . $code_document . "</a></td>";
                        } else {
                            echo"<td>" . $code_document . "</td>";
                        }
                        ?>
                        <td  style='text-align:center;'><?= $no_revisi ?></td>
                        <td><?= $judul_formulir ?></td>
                        <td  style='text-align:center;'><?= $departement_pemilik ?></td>
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
