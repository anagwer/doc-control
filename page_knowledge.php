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

$select = "SELECT * from knowledge ORDER BY id_sop DESC";

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
                <tr style="font-size:11px; background:#09568d; color:#fff;">
                    <th>No</th>
                    <th style="width:300px;">Judul Dokumen</th>
                    <th style="width:300px;">Deskripsi</th>
                    <th>Jenis File</th>
                    <th>Tanggal Upload</th>
                    <th>Recommended By</th>
                    <th>Departement</th>
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
                        if ($file_knowledge != null) {
                            echo "<td style='text-align:left;'><a href='index.php?option=com_content&view=article&id=121&idfile=" . $file_knowledge . "' title=" . $file_knowledge . ">" . $judul . "</a></td>";
                        } else {
                            echo"<td style='text-align:left;'>" . $judul . "</td>";
                        }
                        ?>
                        <td><?= $deskripsi ?></td>
                        <td  style='text-align:center;'><?= $jenis_file ?></td>
                        <td  style='text-align:center;'><?= $tgl_upload ?></td>
                        <td  style='text-align:center;'><?= $recomended ?></td>
                        <td  style='text-align:center;'><?= $departemen ?></td>
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
    