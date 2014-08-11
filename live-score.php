<html>
<head>
<title>Live Score - Escalades Revinesia</title>
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/style-home.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
</head>
<body>
<div class="container">
	<div class="five columns">
		<h1 class="tagline" align="center">Live Score</h1>
    </div>
    <div class="sixteen columns">
    	<?php
			$con = mysql_connect("localhost", "k9539147_esc", "revitalisasi") or die ('error1');
			$db_selected = mysql_select_db("k9539147_esc",$con);
			$sql = "SELECT * from basket";
			$result = mysql_query($sql,$con);
			$data=mysql_fetch_row($result);			
    	?>
    </div>
</div>
</body>
</html>