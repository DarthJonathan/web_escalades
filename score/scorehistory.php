<?php
include('db_connect.php');
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
</head>
<body>
<div class="container">
	<div class="sixteen columns">
   	 	<?php
			$sql = "SELECT * FROM history_futsal ORDER BY id DESC LIMIT 10";
			$result = mysql_query($sql,$con) or die ('query_error');
			$data = mysql_fetch_row($result);			
		?>
    <h1 align="center" class="tagline">Futsal</h1>
   	<table colspan=0 cellspacing=0 border=0 align=center width=100%>
			<tr>
			<td width=20%><h3 class="score"><? echo $data[1];  ?></h3></td>
			<td width=25% align=right><h1 class="score num"><? echo $data[3];  ?></h1></td>
			<td align=center><h2 class="score">vs</h2></td>
			<td width=25%><h1 class="score num"><? echo $data[4];  ?></h1></td>
			<td width=20%><h3 class="score" align=right><? echo $data[2];  ?></h3></td>
			</tr>
		</table>
</div>
</body>
</html>

<?php
mysql_close($con); 
?>
