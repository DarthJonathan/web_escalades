<?php
include('db_connect.php');
?>
<html>
<head>
<title>Live Score - Escalades Revinesia</title>
<!-- Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<link rel="stylesheet" href="../css/layout.css">
<link rel="stylesheet" href="../css/skeleton.css">
<link rel="stylesheet" href="../css/style-home.css">
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
<style>
table
{
	text-align:center;
	vertical-align:middle;
}
</style>
</head>
<body>
<div class="container">
	<div class="sixteen columns">
		<h1 class="score" align="center">Live Score</h1>
	</div>
	<div class="sixteen columns">
		<?php
			$sql = "SELECT * FROM basket ORDER BY id DESC LIMIT 1";
			$result = mysql_query($sql,$con) or die ('query_error');
			$data=mysql_fetch_row($result);			
		?>
		<h2 class="score" align=center>Basket</h2>
		<table colspan=0 cellspacing=0 border=0 align=center width=80%>
			<tr>
			<td width=20%><h3 class="score"><? echo $data[1];  ?></h3></td>
			<td width=25% align=right bgcolor="#000000"><h1 align="center" class="score num"><? echo $data[3];  ?></h1></td>
			<td align=center><h2 class="score">vs</h2></td>
			<td width=25% bgcolor="#000000"><h1 class="score num"><? echo $data[4];  ?></h1></td>
			<td width=20%><h3 class="score" align=right><? echo $data[2];  ?></h3></td>
			</tr>
		</table>
	</div>
	<div class="sixteen columns">
		<?php
			$sql = "SELECT * FROM futsal ORDER BY id DESC LIMIT 1";
			$result = mysql_query($sql,$con) or die ('query_error');
			$data=mysql_fetch_row($result);			
		?>
		<h2 class="score" align="center">Futsal</h2>
		<table colspan=0 cellspacing=0 border=0 align=center width=80%>
			<tr>
			<td width=20%><h3 class="score"><? echo $data[1];  ?></h3></td>
			<td width=25% align=right bgcolor="#000000"><h1 align="center" class="score num"><? echo $data[3];  ?></h1></td>
			<td align=center><h2 class="score">vs</h2></td>
			<td width=25% bgcolor="#000000"><h1 class="score num"><? echo $data[4];  ?></h1></td>
			<td width=20%><h3 class="score" align=right><? echo $data[2];  ?></h3></td>
			</tr>
		</table>
	</div>
    <div class="sixteen columns">
		<h2 class="score" align="center">Jadwal Pertandingan</h2>
		<table colspan=0 cellspacing=0 border=0 align=center width=80%>
        	<tr>
            <td><h3 class="score">Lomba</h3></td>
            <td><h3 class="score">Jam</h3></td>
            <td><h3 class="score">Lokasi</h3></td>
            <td><h3 class="score">Sekolah</h3></td>
            <td><h3 class="score">Sekolah</h3></td>
            <td><h3 class="score">Keterangan</h3></td>
            </tr>
		<?php
			$sql = "SELECT * FROM jadwal ORDER BY id DESC LIMIT 10";
			$result = mysql_query($sql,$con) or die ('query_error');
			while( $data=mysql_fetch_row($result) ){
		?>
			<tr>
			<td width=20%><h3 class="score"><? echo $data[1];  ?></h3></td>
			<td width=25%><h3 class="score"><? echo $data[2];  ?></h3></td>
			<td width=25%><h3 class="score"><? echo $data[3];  ?></h3></td>
			<td width=20%><h3 class="score"><? echo $data[4];  ?></h3></td>
			<td width=20%><h3 class="score"><? echo $data[5];  ?></h3></td>
			<td width=20%><h3 class="score"><? echo $data[6];  ?></h3></td>
			</tr>
		<?
		 }
		?>
		</table>
	</div>
</div>
</body>
</html>

<?php
mysql_close($con); 
?>
