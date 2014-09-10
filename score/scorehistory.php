<?php
include('../livescore/db_connect.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Score History - Escalades Revinesia</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<link rel="stylesheet" href="../css/layout.css">
<link rel="stylesheet" href="../css/skeleton.css">
<link rel="stylesheet" href="../css/style-home.css">
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
<style>
table
{
	text-align:center;
}
</style>
</head>
<body>
<div class="container">
	<div class="sixteen columns">
   	 	<?php
			$sql = "SELECT * FROM futsal";
			$result = mysql_query($sql,$con) or die ('query_error');
			$data = mysql_fetch_row($result);			
		?>
    <h1 align="center" class="tagline">Futsal</h1>
   	<table colspan=0 cellspacing=0 border=0.5 align=center width=80%>
    		<tr>
            <td><h3 class="score">Sekolah X</h3></td>
            <td><h3 class="score">Sekolah Y</h3></td>
            <td><h3 class="score">Score X</h3></td>
            <td><h3 class="score">Score Y</h3></td>
            </tr>
			<tr>
			<td width=20%><h2 class="score"><? echo $data[1];  ?></h2></td>
			<td width=20%><h2 class="score"><? echo $data[2];  ?></h2></td>
			<td width=20%><h2 class="score"><? echo $data[3];  ?></h2></td>
			<td width=20%><h2 class="score"><? echo $data[4];  ?></h2></td>
			</tr>
		</table>
      </div>
      
      <div class="sixteen columns">
   	 	<?php
			$sql = "SELECT * FROM basket ORDER BY id DESC LIMIT 10";
			$result = mysql_query($sql,$con) or die ('query_error');
			$data = mysql_fetch_row($result);			
		?>
    <h1 align="center" class="tagline">Basket</h1>
   	<table colspan=0 cellspacing=0 border=0.5 align=center width=80%>
    		<tr>
            <td><h3 class="score">Sekolah X</h3></td>
            <td><h3 class="score">Sekolah Y</h3></td>
            <td><h3 class="score">Score X</h3></td>
            <td><h3 class="score">Score Y</h3></td>
            </tr>
			<tr>
			<td width=20%><h2 class="score"><? echo $data[1];  ?></h2></td>
			<td width=20%><h2 class="score"><? echo $data[2];  ?></h2></td>
			<td width=20%><h2 class="score"><? echo $data[3];  ?></h2></td>
			<td width=20%><h2 class="score"><? echo $data[4];  ?></h2></td>
			</tr>
		</table>
      </div>
</div>
</body>
</html>

<?php
mysql_close($con); 
?>
