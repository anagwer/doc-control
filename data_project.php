<style>
#text { width:auto; height:auto; background-color:#218D6C;}
</style>
<p><h2 align="center">( UPDATE JULY - AUGUST 2015 )</h2></p>
<? include "tiketka_koneksi.php"; 
//SOFWARE//
$query = mysql_query ("SELECT * FROM pesan WHERE idBag='1' AND stat='done' AND MONTH (tanggal) IN (7,8)");
$softdone= mysql_num_rows($query);

$query = mysql_query ("SELECT * FROM pesan WHERE idBag='1' AND stat='On Progress' AND MONTH (tanggal) IN (7,8)");
$softprog= mysql_num_rows($query);

$tot1 = $softdone + $softprog;
$soft = ($softdone / $tot1) * 100;
 
//HARDWARE//
$query = mysql_query ("SELECT * FROM pesan WHERE idBag='2' AND stat='done' AND MONTH (tanggal) IN (7,8)");
$harddone= mysql_num_rows($query);

$query = mysql_query ("SELECT * FROM pesan WHERE idBag='2' AND stat='On Progress' AND MONTH (tanggal) IN (7,8)");
$hardprog= mysql_num_rows($query);

$tot2 = $harddone + $hardprog;
$hard = ($harddone / $tot2) * 100;
//Ms. Dynamics AX//
$query = mysql_query ("SELECT * FROM pesan WHERE idBag='3' AND stat='done' AND MONTH (tanggal) IN (7,8)");
$AXdone= mysql_num_rows($query);

$query = mysql_query ("SELECT * FROM pesan WHERE idBag='3' AND stat='On Progress' AND MONTH (tanggal) IN (7,8)");
$AXprog= mysql_num_rows($query);

$tot3 = $AXdone + $AXprog;
$AX = ($AXdone / $tot3) * 100;
//NETWORKING&SECURITY//
$query = mysql_query ("SELECT * FROM pesan WHERE idBag='4' AND stat='done' AND MONTH (tanggal) IN (7,8)");
$netdone= mysql_num_rows($query);

$query = mysql_query ("SELECT * FROM pesan WHERE idBag='4' AND stat='On Progress' AND MONTH (tanggal) IN (7,8)");
$netprog= mysql_num_rows($query);

$tot4 = $netdone + $netprog;
$net = ($netdone / $tot4) * 100;
//----------------------------------------------------------------------------------------------------------------------//
//Cabling & Communication//
$query = mysql_query ("SELECT * FROM pesan WHERE idBag='5' AND stat='done' AND MONTH (tanggal) IN (7,8)");
$comdone= mysql_num_rows($query);

$query = mysql_query ("SELECT * FROM pesan WHERE idBag='5' AND stat='On Progress' AND MONTH (tanggal) IN (7,8)");
$comprog= mysql_num_rows($query);

$tot5 = $comdone + $comprog;
$com = ($comdone / $tot5) * 100;
//CCTV//
$query = mysql_query ("SELECT * FROM pesan WHERE idBag='6' AND stat='done' AND MONTH (tanggal) IN (7,8)");
$ccdone= mysql_num_rows($query);

$query = mysql_query ("SELECT * FROM pesan WHERE idBag='6' AND stat='On Progress' AND MONTH (tanggal) IN (7,8)");
$ccprog= mysql_num_rows($query);

$tot6 = $ccdone + $ccprog;
$cc = ($ccdone / $tot6) * 100;
//Help Desk//
$query = mysql_query ("SELECT * FROM pesan WHERE idBag='7' AND stat='done' AND MONTH (tanggal) IN (7,8)");
$helpdone= mysql_num_rows($query);

$query = mysql_query ("SELECT * FROM pesan WHERE idBag='7' AND stat='On Progress' AND MONTH (tanggal) IN (7,8)");
$helpprog= mysql_num_rows($query);

$tot7 = $helpdone + $helpprog;
$help = ($helpdone / $tot7) * 100;
//Data Center & Security//
$query = mysql_query ("SELECT * FROM pesan WHERE idBag='8' AND stat='done' AND MONTH (tanggal) IN (7,8)");
$datdone= mysql_num_rows($query);

$query = mysql_query ("SELECT * FROM pesan WHERE idBag='8' AND stat='On Progress' AND MONTH (tanggal) IN (7,8)");
$datprog= mysql_num_rows($query);

$tot8 = $datdone + $datprog;
$dat = ($datdone / $tot8) * 100;
//Project Development//
$query = mysql_query ("SELECT * FROM pesan WHERE idBag='11' AND stat='done' AND MONTH (tanggal) IN (7,8)");
$projdone= mysql_num_rows($query);

$query = mysql_query ("SELECT * FROM pesan WHERE idBag='11' AND stat='On Progress' AND MONTH (tanggal) IN (7,8)");
$projprog= mysql_num_rows($query);

$tot9 = $projdone + $projprog;
$proj = ($projdone / $tot9) * 100;
?>

<style>
table{ font-size:12px; color:#000000; }
</style>
<table width="100%" border="0">
<tr align="center" height="100">
	<td><h3><font color="#29A095">Software</h3></td>
    <td><h3><font color="#29A095">Hardware</h3></td>
    <td><h3><font color="#29A095">Dynamics AX</h3></td>
    <td><h3><font color="#29A095">Networking & Security</h3></td>
</tr>
<tr>
	<td>
	<div data-uk-circle-chart="{maxPercent:<? echo $soft; ?>,size:120,border:10}"></div>
	</td>
    <td>
    <div data-uk-circle-chart="{maxPercent:<? echo $hard; ?>,size:120,border:10}"></div>
    </td>
    <td>
    <div data-uk-circle-chart="{maxPercent:<? echo $AX; ?>,size:120,border:10}"></div>
    </td>
    <td>
    <div data-uk-circle-chart="{maxPercent:<? echo $net; ?>,size:120,border:10}"></div>
    </td>
</tr>
 <tr align="center">
    <td><h6><font color="#0000FF">Total = <? echo $tot1 ; ?></h6></td>
    <td><h6><font color="#0000FF">Total = <? echo $tot2 ; ?></h6></td>
    <td><h6><font color="#0000FF">Total = <? echo $tot3 ; ?></h6></td>
    <td><h6><font color="#0000FF">Total = <? echo $tot4 ; ?></h6></td>
    </tr>
    <tr align="center">
    <td><h6><font color="#009900">Done = <? echo number_format($softdone,2); ?></h6></td>
    <td><h6><font color="#009900">Done = <? echo number_format($harddone,2); ?></h6></td>
    <td><h6><font color="#009900">Done = <? echo number_format($AXdone,2); ?></h6></td>
    <td><h6><font color="#009900">Done = <? echo number_format($netdone,2); ?></h6></td>
    </tr>
    <tr align="center">
    <td><h6><font color="#FF0000">Outstanding = <? echo $softprog ; ?></h6></td>
    <td><h6><font color="#FF0000">Outstanding = <? echo $hardprog ; ?></h6></td>
    <td><h6><font color="#FF0000">Outstanding = <? echo $AXprog ; ?></h6></td>
    <td><h6><font color="#FF0000">Outstanding = <? echo $netprog ; ?></h6></td>
    </tr>
    
<tr align="center" height="100">
	<td><h3><font color="#29A095">Cabling & Communication</h3></td>
    <td><h3><font color="#29A095">CCTV</h3></td>
    <td><h3><font color="#29A095">Help Desk</h3></td>
    <td><h3><font color="#29A095">Data Center & Security</h3></td>
</tr>
<tr>
	<td>
	<div data-uk-circle-chart="{maxPercent:<? echo $com; ?>,size:120,border:10}"></div>
	</td>
    <td>
    <div data-uk-circle-chart="{maxPercent:<? echo $cc; ?>,size:120,border:10}"></div>
    </td>
    <td>
    <div data-uk-circle-chart="{maxPercent:<? echo $help; ?>,size:120,border:10}"></div>
    </td>
    <td>
    <div data-uk-circle-chart="{maxPercent:<? echo $dat; ?>,size:120,border:10}"></div>
    </td>
    
</tr>
    <tr align="center">
    <td><h6><font color="#0000FF">Total = <? echo $tot5; ?></h6></td>
    <td><h6><font color="#0000FF">Total = <? echo $tot6; ?></h6></td>
    <td><h6><font color="#0000FF">Total = <? echo $tot7; ?></h6></td>
    <td><h6><font color="#0000FF">Total = <? echo $tot8; ?></h6></td>
    </tr>
    <tr align="center">
    <td><h6><font color="#009900">Done = <? echo number_format($comdone,2); ?></h6></td>
    <td><h6><font color="#009900">Done = <? echo number_format($ccdone,2); ?></h6></td>
    <td><h6><font color="#009900">Done = <? echo number_format($helpdone,2); ?></h6></td>
    <td><h6><font color="#009900">Done = <? echo number_format($datdone,2); ?></h6></td>
    </tr>
    <tr align="center">
    <td><h6><font color="#FF0000">Outstanding = <? echo $comprog; ?></h6></td>
    <td><h6><font color="#FF0000">Outstanding = <? echo $ccprog; ?></h6></td>
    <td><h6><font color="#FF0000">Outstanding = <? echo $helpprog; ?></h6></td>
    <td><h6><font color="#FF0000">Outstanding = <? echo $datprog; ?></h6></td>
    </tr>
<tr align="center" height="100">
	<td><h3><font color="#29A095">Project Development</h3></td>
</tr>
<tr>
	<td>
    <div data-uk-circle-chart="{maxPercent:<? echo $proj; ?>,size:120,border:10}"></div>
    </td>
</tr>
<tr align="center"><td><h6><font color="#0000FF">Total = <? echo $tot9 ; ?></h6></td></tr>
<tr align="center"><td><h6><font color="#009900">Done = <? echo number_format($projdone,2); ?></h6></td></tr>
<tr align="center"><td><h6><font color="#FF0000">Outstanding = <? echo $projprog; ?></h6></td></tr>
</table>
<br/><br/>


