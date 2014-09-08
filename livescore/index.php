<?php
include('db_connect.php');
?>
<html>
<head>
<title>Live Score - Escalades Revinesia</title>
<link rel="stylesheet" href="../css/layout.css">
<link rel="stylesheet" href="../css/skeleton.css">
<link rel="stylesheet" href="../css/style-home.css">
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
</head>
<body>
<div class="container">
	<div class="sixteen columns">
		<h1 class="score" align="center">Live Score</h1>
	</div>
	<div class="eight columns">
		<?php
			$sql = "SELECT * FROM basket ORDER BY id DESC LIMIT 1";
			$result = mysql_query($sql,$con) or die ('query_error');
			$data=mysql_fetch_row($result);			
		?>
		<h2 class="score" align=center>Basket</h2>
		<table colspan=0 cellspacing=0 border=0 align=center>
			<tr>
			<td><h3 class="score"><? echo $data[1];  ?></h3></td>
			<td><h1 class="score num"><? echo $data[3];  ?></h1></td>
			<td><h2 class="score">vs</h2></td>
			<td><h1 class="score num"><? echo $data[4];  ?></h1></td>
			<td><h3 class="score" align=right><? echo $data[2];  ?></h3></td>
			</tr>
		</table>
	</div>
	<div class="eight columns">
		<?php
			$sql = "SELECT * FROM catur ORDER BY id DESC LIMIT 1";
			$result = mysql_query($sql,$con) or die ('query_error');
			$data = mysql_fetch_row($result);			
		?>
		<h2 class="score" align="center">Catur</h2>
		<table colspan=0 cellspacing=0 border=0 align=center>
			<tr>
			<td><h3 class="score"><? echo $data[1];  ?></h3></td>
			<td><h1 class="score num"><? echo $data[3];  ?></h1></td>
			<td><h2 class="score">vs</h2></td>
			<td><h1 class="score num"><? echo $data[4];  ?></h1></td>
			<td><h3 class="score" align=right><? echo $data[2];  ?></h3></td>
			</tr>
		</table>
	</div>
	<div class="eight columns">
		<?php
			$sql = "SELECT * FROM futsal ORDER BY id DESC LIMIT 1";
			$result = mysql_query($sql,$con) or die ('query_error');
			$data=mysql_fetch_row($result);			
		?>
		<h2 class="score" align="center">Futsal</h2>
		<table colspan=0 cellspacing=0 border=0 align=center>
			<tr>
			<td><h3 class="score"><? echo $data[1];  ?></h3></td>
			<td><h1 class="score num"><? echo $data[3];  ?></h1></td>
			<td><h2 class="score">vs</h2></td>
			<td><h1 class="score num"><? echo $data[4];  ?></h1></td>
			<td><h3 class="score" align=right><? echo $data[2];  ?></h3></td>
			</tr>
		</table>
	</div>
    <div class="eight columns">
		<?php
			$sql = "SELECT * FROM futsal ORDER BY id DESC LIMIT 1";
			$result = mysql_query($sql,$con) or die ('query_error');
			$data=mysql_fetch_row($result);			
		?>
		<h2 class="score" align="center">Jadwal Pertandingan</h2>
		<table colspan=0 cellspacing=0 border=0 align=center>
			<tr>
			<td><h3 class="score"><? echo $data[1];  ?></h3></td>
			<td><h1 class="score num"><? echo $data[3];  ?></h1></td>
			<td><h2 class="score">vs</h2></td>
			<td><h1 class="score num"><? echo $data[4];  ?></h1></td>
			<td><h3 class="score" align=right><? echo $data[2];  ?></h3></td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>

<?php
mysql_close($con); 
?>
