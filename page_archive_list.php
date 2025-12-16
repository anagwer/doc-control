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

<body oncontextmenu="return false;">

<link href="Datatables1.10.7/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<?php
include('koneksi_dokumen.php');

$select = "SELECT * from archieve ORDER BY id_arc DESC";

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
                <tr style="font-size:12px; background:#09568d; color:#fff;">
                    <th>No</th>
                    <th>Judul Dokumen</th>
                    <th>Owner Dok.</th>
                    <th>Nomor Revisi</th>
                    <th>Tanggal revisi</th>
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
                        if ($file_archieve != null) {
                            echo "<td><a href='index.php?option=com_content&view=article&id=146&idfile=" . $file_archieve . "' >" . $nama_departement . "</a></td>";
                        } else {
                            echo"<td>" . $nama_departement . "</td>";
                        }
                        ?>
                        <?php
                        // if ($file_archieve != null) {
                        //     echo "<td style='text-align:left;'><a href='uploads_file/doc_archieve/" . $file_archieve . "' title=" . $file_archieve . " download>" . $nama_departement . "</a></td>";
                        // } else {
                        //     echo"<td style='text-align:left;'>" . $nama_departement . "</td>";
                        // }
                        ?>
                        <td  style='text-align:center;'><?= $owner_document ?></td>
                        <td  style='text-align:center;'><?= $no_revisi ?></td>
                        <td  style='text-align:center;'><?= $tanggal_revisi ?></td>
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
</body>
<script language="JavaScript">
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>
